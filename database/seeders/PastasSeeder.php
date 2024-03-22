<?php

namespace Database\Seeders;

use App\Models\Pasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pastas = config('pasta');

        foreach( $pastas as $element ){
            $newPasta = new Pasta();

            $newPasta->id = $element['id'];
            $newPasta->title = $element['titolo'];
            $newPasta->description = $element['descrizione'];
            $newPasta->type  = $element['tipo'];
            $newPasta->image = $element['src'];
            $newPasta->cooking_time = $element['cottura'];
            $newPasta->weight = $element['peso'];

            $newPasta->save();
        }
    }
}
