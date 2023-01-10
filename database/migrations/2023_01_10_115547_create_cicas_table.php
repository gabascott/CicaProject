<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Cica;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cicas', function (Blueprint $table) {
            $table->id('cica_id');
            $table->string('neve', 50);
            $table->string('neme', 10);
            $table->boolean('fajta');//0-fiú, 1-lány
            $table->integer('kora');
            $table->integer('sulya');
            $table->string('gazda_neve', 50)->nullable();
            $table->string('gazda_lakcim')->nullable();
            $table->timestamps();
        });

        Cica::create(['neve'=> 'Stormi', 'neme' => 'lány', 'fajta'=> 'házi cica', 'kora' => 4, 'sulya' => 5, 'gazda_neve' => 'Somoskői Gábor', 'gazda_lakcim' => '1119, Budapest, Etele út 33.']);
        Cica::create(['neve'=> 'Bandita', 'neme' => 'fiú', 'fajta'=> 'sziámi', 'kora' => 2, 'sulya' => 3.5]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cicas');
    }
};
