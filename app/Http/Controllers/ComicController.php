<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo il modello
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // mostra tutte le risorse nel database
    public function index()
    {
        // creo una query che prende TUTTI (all) i dati del modello Comic e li salvo in $comics
        $comics = Comic::all();

        // restituisco la view relativa e la tabella compattata
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // restituisce una view con un form all'interno che servirà a CREARE una nuova risorsa
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // quando l'utente fa submit del form, SALVA tutti i dati che sono contenuti nel form in un nuovo elemento (riga) della tabella
    // qui riceviamo tutti i dati inseriti nel form
    public function store(Request $request)
    {
        // recupero i dati dal form
        $data = $request->all();

        // creo un oggetto Comic
        $newComic = new Comic();

        // compilo tutte le colonne/proprietà con i dati del form
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];

        // con il metodo fill() cambio tutto in una botta sola. Per poterlo usare devo abilitare il mass assignment nel model
        $newComic->fill($data);

        // inserisco il nuovo record a db
        $newComic->save();

        // reindirizzo alla view del comic appena creato
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // MOSTRA una specifica risorsa (in questo caso l'id)
    // se passo al metodo show l'oggetto $comic istanziato con la classe Comic, passa il record in automatico iniettando il ::find (dependancy injection)
    public function show(Comic $comic)
    {
        // $comics = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // attraverso la dependency injection gli passo il Comic
    public function edit(Comic $comic)
    {
        // restituisco la view /comics/edit e il comic formattato
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // attraverso la dependency injection gli passo il Comic
    public function update(Request $request, Comic $comic)
    {
        // salvo tutti i dati che mi arrivano dal form in $data
        $data = $request->all();

        // metodo update al singolo comic passandogli $data
        // per fare questo devo aver abilitato il mass assignment
        $comic->update($data);

        // reindirizzo alla rotta show del singolo comic (già aggiornato con le modifiche)
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // RIMUOVE una risorsa dalla tabella
    // passo il singolo comic
    public function destroy(Comic $comic)
    {
        // richiamo il metodo delete() che fa la cancellazione a db
        $comic->delete();

        // reindirizzo alla rotta index (aggiornata)
        return redirect()->route('comics.index');
    }
}
