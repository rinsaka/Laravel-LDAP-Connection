<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // 一旦中身を削除する
        DB::table('comments')->delete();

        DB::table('comments')->insert([
            'title' => '1- TEAM SKY'
        ]);

        DB::table('comments')->insert([
            'title' => '11- AG2R LA MONDIALE'
        ]);

        DB::table('comments')->insert([
            'title' => '21- MOVISTAR TEAM'
        ]);

        DB::table('comments')->insert([
            'title' => '31- TREK - SEGAFREDO'
        ]);

        DB::table('comments')->insert([
            'title' => '41- BMC RACING TEAM'
        ]);

        DB::table('comments')->insert([
            'title' => '51- ASTANA PRO TEAM'
        ]);

        DB::table('comments')->insert([
            'title' => '61- UAE Team Emirates'
        ]);

        DB::table('comments')->insert([
            'title' => '71- FDJ'
        ]);

        DB::table('comments')->insert([
            'title' => '81- ORICA - SCOTT'
        ]);

        DB::table('comments')->insert([
            'title' => '91- TEAM DIMENSION DATA'
        ]);

        DB::table('comments')->insert([
            'title' => '101- QUICK - STEP FLOORS'
        ]);

        DB::table('comments')->insert([
            'title' => '111- BORA - HANSGROHE'
        ]);

        DB::table('comments')->insert([
            'title' => '121- TEAM KATUSHA ALPECIN'
        ]);

        DB::table('comments')->insert([
            'title' => '131- LOTTO SOUDAL'
        ]);

        DB::table('comments')->insert([
            'title' => '141- TEAM SUNWEB'
        ]);

        DB::table('comments')->insert([
            'title' => '151- COFIDIS, SOLUTIONS CREDITS'
        ]);

        DB::table('comments')->insert([
            'title' => '161- TEAM LOTTO NL - JUMBO'
        ]);

        DB::table('comments')->insert([
            'title' => '171- DIRECT ENERGIE'
        ]);

        DB::table('comments')->insert([
            'title' => '181- CANNONDALE DRAPAC PROFESSIONAL CYCLING TEAM'
        ]);

        DB::table('comments')->insert([
            'title' => '191- BAHRAIN - MERIDA'
        ]);

        DB::table('comments')->insert([
            'title' => '201- WANTY - GROUPE GOBERT'
        ]);

        DB::table('comments')->insert([
            'title' => '211- FORTUNEO - VITAL CONCEPT'
        ]);

    }
}
