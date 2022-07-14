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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // quando l'utente fa submit del form, SALVA tutti i dati che sono contenuti nel form in un nuovo elemento (riga) della tabella
    public function store(Request $request)
    {
        //
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // RIMUOVE una risorsa dalla tabella
    public function destroy($id)
    {
        //
    }
}
