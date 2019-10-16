<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cats', function (Blueprint $table) {

          $table -> bigInteger('shelter_id')
                 -> unsigned()
                 -> index();
          $table -> foreign('shelter_id', 'cat_shelter')
                 -> references('id')
                 -> on('shelters');
        });
        Schema::table('cat_vaccination', function (Blueprint $table) {

          $table -> bigInteger('cat_id')
                 -> unsigned()
                 -> index();
          $table -> foreign('cat_id', 'cat_vacc_cat')
                 -> references('id')
                 -> on('cats');
          $table -> bigInteger('vaccination_id')
                 -> unsigned()
                 -> index();
          $table -> foreign('vaccination_id', 'cat_vacc_vac')
                 -> references('id')
                 -> on('vaccinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cats', function (Blueprint $table) {

          $table -> dropForeign('cat_shelter');
          $table -> dropColumn('shelter_id');
        });
        Schema::table('cat_vaccination', function (Blueprint $table) {

          $table -> dropForeign('cat_vacc_cat');
          $table -> dropColumn('cat_id');
          $table -> dropForeign('cat_vacc_vac');
          $table -> dropColumn('vaccination_id');
        });
    }
}
