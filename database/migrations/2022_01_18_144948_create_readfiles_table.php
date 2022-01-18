<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_address');
            $table->date('move_out_date')->format('d/m/Y');
            $table->date('physical_move_out_date')->format('d/m/Y');
            $table->time("move_out_time");
            $table->unsignedInteger('recommendation_scale');
            $table->string('reason_for_leaving');
            $table->boolean('other_reason_for_leaving');
            $table->string('understand_rating');
            $table->string('thm_id');
            $table->string('current_tenancy_id');
            $table->unsignedInteger('indonesian_bank_account');
            $table->string('indonesian_bank_account_number');
            $table->string('indonesian_bank_name');
            $table->boolean('bank_account_full_name');
            $table->boolean('foreign_bank_account_number');
            $table->boolean('foreign_bank_account_country');
            $table->boolean('foreign_bank_account_currency');
            $table->boolean('foreign_bank_account_iban');
            $table->boolean('foreign_bank_account_swift');
            $table->boolean('foreign_bank_account_other_details');
            $table->string('submission_time_notice_1601976166415');
            $table->string('submit_1561348107244');
            $table->unsignedInteger('form_id');
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
        Schema::dropIfExists('readfiles');
    }
}
