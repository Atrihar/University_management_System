<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('std_ID',16);
            $table->string('email',100);
            $table->string('contact_no',16);
            $table->string('fathers_name',100);
            $table->string('fathers_contact_no',16);
            $table->string('mothers_name',100);
            $table->string('mothers_contact_no',16);
            $table->string('parmenent_address',200);
            $table->string('parmenent_city',100);
            $table->string('parmenent_state',100);
            $table->string('parmenent_zip_code',10);
            $table->string('present_address',200);
            $table->string('present_city',100);
            $table->string('present_state',100);
            $table->string('present_zip_code',10);
            $table->string('batch',10);
            $table->string('password',);
            $table->string('profile_pic')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
