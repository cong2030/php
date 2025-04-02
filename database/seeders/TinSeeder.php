<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinSeeder extends Seeder
{
    public function run()
    {
        DB::table('tin')->insert([
            [
                'tieuDe' => 'Bài viết 1',
                'tomTat' => 'Tóm tắt bài viết 1',
                'urlHinh' => 'https://example.com/image1.jpg',
                'idLT' => 1
            ],
            [
                'tieuDe' => 'Bài viết 2',
                'tomTat' => 'Tóm tắt bài viết 2',
                'urlHinh' => 'https://example.com/image2.jpg',
                'idLT' => 1
            ]
        ]);
    }
}
?>