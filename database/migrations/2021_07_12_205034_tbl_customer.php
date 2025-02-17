<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tbl_customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Institution')->nullable()->default('NULL');
            $table->string('Full_Name')->nullable()->default('NULL');
            $table->string('Sex')->nullable()->default('NULL');
            $table->string('Title')->nullable()->default('NULL');
            $table->string('Position')->nullable()->default('NULL');
            $table->string('Occupation')->nullable()->default('NULL');
            $table->string('Relationship')->nullable()->default('NULL');
            $table->string('Date_of_Birth')->nullable()->default('NULL');

            $table->string('Place_of_Birth')->nullable()->default('NULL');
            $table->string('Nationality')->nullable()->default('NULL');
            $table->string('Passport_No')->nullable()->default('NULL') ;
            $table->string('National_ID_No')->nullable()->default('NULL') ;
            $table->string('Driving_License')->nullable()->default('NULL') ;
            $table->string('Account_No')->nullable()->default('NULL') ;
            $table->string('TN_No')->nullable()->default('NULL') ;


            $table->string('City')->nullable()->default('NULL');
            $table->string('Sub_City')->nullable()->default('NULL');
            $table->string('Wereda')->nullable()->default('NULL');
            $table->string('House_No')->nullable()->default('NULL') ;
            $table->string('RA_P_O_Box')->nullable()->default('NULL') ;
            $table->string('RA_Phone_No')->nullable()->default('NULL') ;
            $table->string('RA_Email_Address')->nullable()->default('NULL') ;
            $table->string('Place')->nullable()->default('NULL');


            $table->string('A_Phone_No')->nullable()->default('NULL') ;
            $table->string('A_P_O_Box')->nullable()->default('NULL') ;
            $table->string('A_Email_Address')->nullable()->default('NULL') ;
            $table->string('Year_of_Appointee')->nullable()->default('NULL');
            $table->string('Other_Infn')->nullable()->default('NULL');


            $table->rememberToken();
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('tbl_customer');
        //
    }
}
