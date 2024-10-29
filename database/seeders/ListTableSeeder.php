<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'list')->insert([
            [
                'recruitment year' => 2020,
                'application start date' => '2020-08-07',
                'application deadline' => '2023-12-31',
                'project name' => '2021-2023臺美GEMT雙邊協議合作研究計畫',
                'country' => '美國',
                'agreement agency' => '美國國家科學基金會(NSF)',
            ],
            [
                'recruitment year' => 2021,
                'application start date' => '2021-01-01',
                'application deadline' => '2027-12-31',
                'project name' => '2021-2027徵求成功參與歐盟跨國團隊科研暨創新計畫',
                'country' => '歐盟',
                'agreement agency' => '歐盟',
            ],
            //...依此類推，為每組資料新增陣列
        ]);
    }
}
