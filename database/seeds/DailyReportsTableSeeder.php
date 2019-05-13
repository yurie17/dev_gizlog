<?php

use Illuminate\Database\Seeder;

class DailyReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daily_reports')->truncate();
        DB::table('daily_reports')->insert([
            [
                'user_id'     => 2,
                'reporting_time'            => '2018-03-6',
                'title'                     => 'テスト',
                'contents'                  => 'テスト',
            ],
            [
                'user_id'     => 2,
                'reporting_time'            => '2018-02-9',
                'title'                     => '長文テスト',
                'contents'                  => '今日もとっても頑張りました',
            ],
            [
                'user_id'     => 2,
                'reporting_time'            => '2018-01-29',
                'title'                     => 'Carbonのテスト',
                'contents'                  => 'テストテスト',
            ],
            [
                'user_id'     => 2,
                'reporting_time'            => '2018-01-28',
                'title'                     => '日報テスト',
                'contents'                  => '日報のテストです',
            ]
        ]);
    }
}
