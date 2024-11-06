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
            $table->unsignedBigInteger('student_id'); // Reference to the student
            $table->string('virtual_account_number')->unique(); // Virtual account number
            $table->dateTime('expired_at'); // Expiration date
            $table->boolean('is_active')->default(true); // Active status (default to true)
            $table->decimal('nominal', 10, 2); // Nominal amount (precision 10, scale 2 for decimal)
            $table->timestamps();

            // Set up the foreign key relationship if needed (assuming a student model exists)
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
