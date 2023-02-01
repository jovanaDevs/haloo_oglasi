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
        Schema::table('tip_vozilas', function (Blueprint $table) {
            $table->renameColumn('naziv','naziv_tipa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tip_vozilas', function (Blueprint $table) {
            $table->renameColumn('naziv_tipa','naziv');
        });
    }
};
