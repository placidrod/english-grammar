<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorToTranslateItemTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('translate_item', function(Blueprint $table)
        {
            $table->string('created_by', 100)->after('updated_at');
            $table->string('updated_by', 100)->after('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('translate_item', function(Blueprint $table)
        {
            $table->dropColumn(array('created_by','updated_by'));
        });
    }

}
