<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserImageFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_image_files', function (Blueprint $table) {
            $table->id();
                $table->unsignedBigInteger('image_files_id');
                $table->foreign('image_files_id')->references('id')->on('image_files');
                $table->morphs('userType');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_image_files');
    }
}
