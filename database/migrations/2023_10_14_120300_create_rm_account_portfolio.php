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
        Schema::create('rm_account_portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('grade');
            $table->string('rm_DepositTarget')->default(0);
            $table->string('rm_loanTarget')->default(0);
            $table->string('rm_Pip_depositTarget');
            $table->string('rm_pip_loanTarget');
            $table->string('pip');
            $table->string('updatedby')->default('0');
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
        Schema::dropIfExists('rm_account_portfolio');
    }
};
