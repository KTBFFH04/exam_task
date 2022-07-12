<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->date('issue_date');
            $table->date('circulation_deadline');
            $table->unsignedInteger('nominal_price');
            $table->enum('payment_frequency',[1,2,4,12]);
            $table->enum('percent_calc_period',[360, 364, 365]);
            $table->unsignedTinyInteger('coupon_interest');
            $table->timestamps();
        });

        //add constraint to min\max value to coupon_interest
        DB::statement('ALTER TABLE purchase_orders ADD CONSTRAINT chk_coupon_interest CHECK (coupon_interest >= 0 AND coupon_interest <= 100);');


    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_orders');
    }
};
