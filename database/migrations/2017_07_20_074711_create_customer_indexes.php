<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerIndexes extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('customers', function ($collection) {
            $collection->index('customer_id');
        });
    }

    public function down() {
        Schema::drop('customers', function ($collection) {
            $collection->dropIndex('customer_id');
        });
    }
}
