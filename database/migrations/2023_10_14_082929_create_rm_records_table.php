<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_records', function (Blueprint $table) {
            $table->id();
            $table->string('rm_staffId')->unique;
            $table->string('rm_code')->unique;
            $table->string('rm_firstName');
            $table->string('rm_middleName');
            $table->string('rm_lastName');
            $table->string('rm_email')->unique;
            $table->string('rm_jobTitle');
            $table->string('rm_unitName');
            $table->string('rm_unitCode');
            $table->string('rm_grade');
            $table->string('rm_roleCode')->default(0);
            $table->string('rm_status')->default('FE');
            $table->string('rm_avatar')->default("0");
            $table->string('updatedby')->default('0');
            $table->timestamps();
        });

        // `id` int(11) NOT NULL,
        // `UnitPosCode` varchar(100) DEFAULT NULL,
        // `UnitCode` varchar(100) DEFAULT NULL,
        // `UnitName` varchar(100) DEFAULT NULL,
        // `EmployeeID` varchar(50) DEFAULT NULL,
        // `EmployeeFirstName` varchar(100) DEFAULT NULL,
        // `EmployeeMiddleName` varchar(100) DEFAULT NULL,
        // `EmployeeLastName` varchar(100) DEFAULT NULL
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_records');
    }
};
