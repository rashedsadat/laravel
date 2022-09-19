<div class="form-group {{$col ?? ''}}">
    <label class="{{$labelClass ?? ''}}" for=""{{$name ?? ''}}"">{{$labelName}}</label>
    <input type="{{$type ?? 'text'}}" name="{{$name}}" id="{{$name}}" class="form-control {{$class ?? ''}}" placeholder="{{$placeholder ?? ''}}" {{$required ?? ''}} aria-describedby="{{$ariaDescribedby ?? ''}}">
</div>