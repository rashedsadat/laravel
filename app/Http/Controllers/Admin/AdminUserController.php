<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Rules\UniqueEmail;
use Illuminate\Http\Request;
use App\Rules\StrongPassword;
use App\Rules\ValidPhoneNumber;
use App\Rules\UniquePhoneNumber;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserFormRequest;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('TwoFa');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new Admin();
        $users = $users->paginate(10);
        // $role = array();
        // foreach ($users as $user) {
        //     $temp = $user->getRoleNames()->toArray();
        //     dd($temp);
        //     array_push($role, $temp);
        // }
        // dd($role);
        return view('admin.admin_users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->toArray();
        return view('admin.admin_users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'                  => ['required', 'string', 'max:255'], 
            'email'                 => ['required', 'email', 'max:255', new UniqueEmail],
            'phone_no'              => ['required', 'max:11', new UniquePhoneNumber, new ValidPhoneNumber],
            'gender'                => ['required', 'string'],
            'password'              => ['required', 'string', 'confirmed', new StrongPassword],
            'password_confirmation' => ['required', 'string'],
            'role'                  => ['required', 'string']
        ]);
        $input = $request->all();
        $user = new Admin();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone_no = $input['phone_no'];
        $user->gender = $input['gender'];
        $user->verified_at = now();
        $user['password'] = Hash::make($input['password']);
        $user->save();
        $user = Admin::where('email', $input['email'])->get()->first();

        $user->syncRoles($input['role']);

        $permissions = $user->getAllPermissions();
        $permission_list = array();
        foreach ($permissions as $permission) {
            array_push($permission_list, $permission->name);
        }
        $user->syncPermissions($permission_list);
    
        return redirect()->route('admin_users.index')->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Admin::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('admin.users.edit',compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = Admin::find($id);
        $user->save();
    
        $user->syncRoles($request->input('roles'));
        $permissions = $user->getAllPermissions();
        $permission_list = array();
        foreach ($permissions as $permission) {
            array_push($permission_list, $permission->name);
        }
        $user->syncPermissions($permission_list);
    
        return redirect()->route('admin_users.index')->with('success','Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Admin::find($id);
        $roles = $user->getRoleNames();
        foreach ($roles as $role) {
            $user->removeRole($role);
        }
        $permissions = $user->getAllPermissions();
        $permission_list = array();
        foreach ($permissions as $permission) {
            $user->revokePermissionTo($permission);
        }
        DB::table("admins")->where('id',$id)->delete();
        return redirect()->route('admin_users.index')->with('success','Role deleted successfully');
    }
}
