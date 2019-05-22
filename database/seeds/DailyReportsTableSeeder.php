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
                'user_id'     => 4,
                'title'                     => 'テスト',
                'contents'                  => 'テスト',
                'reporting_time'            => Carbon::create(2019, 3, 6),
            ],
            [
                'user_id'     => 4,
                'title'                     => '長文テスト',
                'contents'                  => '今日もとっても頑張りました',
                'reporting_time'            => Carbon::create(2019, 2, 9),
            ],
            [
                'user_id'     => 4,
                'title'                     => 'Carbonのテスト',
                'contents'                  => 'テストテスト',
                'reporting_time'            => Carbon::create(2019, 1, 29),
            ],
            [
                'user_id'     => 4,
                'title'                     => '日報テスト',
                'contents'                  => '日報のテストです',
                'reporting_time'            => Carbon::create(2019, 1, 28),
            ]
        ]);
    }
}
