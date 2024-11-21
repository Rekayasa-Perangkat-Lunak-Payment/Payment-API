<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('payment_period_id');
            $table->string('virtual_account_number')->unique();
            $table->dateTime('expired_at');
            $table->boolean('is_active')->default(true);
            $table->decimal('total_amount', 10, 2);
            $table->string('payment_period');
            $table->timestamps();

            // Set up the foreign key relationship if needed (assuming a student model exists)
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('payment_period_id')->references('id')->on('payment_periods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtual_accounts');
    }
}
