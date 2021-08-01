<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('full_name',300);
            $table->integer('gender');
            $table->string('shakha',200)->nullable();
            $table->date('dob');
            $table->string('complexion',300)->nullable();
            $table->string('mother_tongue',300);
            $table->string('blood_group',300)->nullable();
            $table->integer('marital_status');
            $table->string('divorced_date',300)->nullable();
            $table->integer('duration_of_previouse_life')->nullable();
            $table->integer('total_childrens')->nullable();
            $table->string('address',300);
            $table->string('mobile',300);
            $table->string('gotra',300)->nullable();
            $table->string('rashi',300)->nullable();
            $table->string('nakashatra',300)->nullable();
            $table->string('nadi',300)->nullable();
            $table->string('gan',300)->nullable();
            $table->string('charan',300)->nullable();
            $table->string('mangal',300)->nullable();
            $table->string('qualification',300);
            $table->string('work_name',300);
            $table->string('designation',300);
            $table->string('income_pa',300);
            $table->string('experience',300);
            $table->string('mother_name',300);
            $table->string('father_name',300);
            $table->string('occupation_profile',300)->nullable();

            $table->string('mother_occupation',300)->nullable();
            $table->string('father_occupation',300)->nullable();

            $table->integer('no_of_brothers')->nullable();
            $table->integer('no_of_sisters')->nullable();
            $table->integer('alliance_working')->nullable()->default(3);
            $table->string('alliance_qualification')->nullable();
            $table->string('any_other_information')->nullable();
            $table->integer('status')->unsigned()->default(0);
            $table->string('razorpay_payment_id')->nullable();
            $table->integer('isPaymentSuccess')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(Blueprint $table)
    {
        $table->dropForeign('lists_user_id_foreign');
        $table->dropIndex('lists_user_id_index');
        $table->dropColumn('user_id');
        Schema::dropIfExists('user_details');
    }
}
