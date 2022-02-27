<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('text');
            $table->timestamps();
        });

        DB::table('notes')->insert([
            [
                'id' => 1,
                'title' => 'Note 1',
                'text' => 'This is note 1',
                'created_at' => '2022-02-28 16:56:03',
                'updated_at' => '2022-02-28 16:56:03'
            ],
            [
                'id' => 2,
                'title' => 'Note 2',
                'text' => 'This is note 2',
                'created_at' => '2022-02-28 17:01:13',
                'updated_at' => '2022-02-28 17:01:13'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
