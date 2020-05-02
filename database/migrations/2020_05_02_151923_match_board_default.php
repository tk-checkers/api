<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MatchBoardDefault extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function (Blueprint $table) {
            $board_default = [
                ['E', 'R', 'E', 'R', 'E', 'R', 'E', 'R'],
                ['R', 'E', 'R', 'E', 'R', 'E', 'R', 'E'],
                ['E', 'R', 'E', 'R', 'E', 'R', 'E', 'R'],
                ['E', 'E', 'E', 'E', 'E', 'E', 'E', 'E'],
                ['E', 'E', 'E', 'E', 'E', 'E', 'E', 'E'],
                ['B', 'E', 'B', 'E', 'B', 'E', 'B', 'E'],
                ['E', 'B', 'E', 'B', 'E', 'B', 'E', 'B'],
                ['B', 'E', 'B', 'E', 'B', 'E', 'B', 'E'],
            ];
    
            $board_default_string = json_encode($board_default);

            $table->string('board', 1024)->default($board_default_string)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            //
        });
    }
}
