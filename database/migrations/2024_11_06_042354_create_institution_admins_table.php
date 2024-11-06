<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institution_id');
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->string('title');
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();

            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institution_admins');
    }
}
