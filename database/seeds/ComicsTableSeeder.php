<?php

use Illuminate\Database\Seeder;

// importo il model relativo
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // prendo i dati dalla cartella config e li salvo in $comics
        $comics = config('comics');

        // ciclo l'array di array associativi $comics in modo da creare tanti oggetti quanti sono gli elementi dell'array
        foreach ($comics as $comic) {

            // creo un'istanza del model per creare un nuovo elemento Comic e la salvo in $newComic
            $newComic = new Comic();

            // creo tante proprietà di questo oggetto quante sono le colonne impostate nella migration; il valore lo prenderò dall'array
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];

            // alla fine salvo fisicamente l'elemento nel db (faccio persistenza del dato)
            $newComic->save();
        }
    }
}
