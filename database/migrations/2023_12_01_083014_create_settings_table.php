<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Sederhana',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => 'Sleman, Yogyakarta, Indonesia',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://youtube.com/@NewJeans_official',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://instagram.com/newjeans_official',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_twitter',
            'label' => 'Twitter',
            'value' => 'https://twitter.com/NewJeans_ADOR',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://facebook.com/official.newjeans',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Website sederhana, dengan admin filament, untuk hidup sederhana',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
