<?php

use Illuminate\Database\Seeder;
use App\Domain\Models\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //News::truncate();

        News::create([
            'title' => 'Pemilu 2018',
            'body' => 'Pemilu 2018 akan diadakan di Indonesia pada akhir tahun',
            'status' => 'publish',
        ]);
        News::create([
            'title' => 'Jokowi Menghadiri Pertemuan KTT',
            'body' => 'Presiden Joko Widodo menghadiri pertemuan Konferensi Tingkat Tinggi.',
            'status' => 'draft',
        ]);
        News::create([
            'title' => 'DPR Melakukan Rapat Paripurna Minggu ini',
            'body' => 'Segenap DPR dan MPR akan melaksanakan kegiatan tahunan mereka, yaitu rapat paripurna, minggu ini.',
            'status' => 'deleted',
        ]);
    }
}
