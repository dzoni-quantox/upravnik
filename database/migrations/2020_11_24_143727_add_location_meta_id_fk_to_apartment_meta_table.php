<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationMetaIdFkToApartmentMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apartment_meta', function (Blueprint $table) {
            $table->foreignId('location_meta_id')->unsigned()->onDelete('cascade')->after('apartment_id');
            $table->dropColumn('field_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apartment_meta', function (Blueprint $table) {
            $table->dropForeign(['location_meta_id']);
            $table->string('field_name')->after('apartment_id');
        });
    }
}
