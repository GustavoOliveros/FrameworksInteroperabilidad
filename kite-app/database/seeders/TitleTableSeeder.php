<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = base_path('database/seeders/data/titles.json');
        $json = File::get($jsonPath);

        $data = json_decode($json, true);

        foreach($data['results'] as $title){
            Title::create([
                "id" => $title['id'],
                "type" => 'movie',
                "original_title" => $title['original_title'],
                "title" => $title['title'],
                "year" =>  substr($title['release_date'], 0, 4),
                "poster_path" => $title['poster_path'],
                "backdrop_path" => $title['backdrop_path'],
                "status" => 1,
                "availability_status" => 1,
                "overview" => $title['overview']
            ]);
        }
    }
}