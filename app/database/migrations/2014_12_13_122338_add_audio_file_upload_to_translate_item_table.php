<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAudioFileUploadToTranslateItemTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('translate_item', function(Blueprint $table)
        {
            $table->string('audio_file_location')->unique()->after('lang_2');
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
            $table->dropColumn('audio_file_location');
        });
    }

}
