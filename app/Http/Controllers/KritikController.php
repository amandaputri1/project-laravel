<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Kritik;
use App\Models\User;

class KritikController extends Controller
{
    //
    public function create( User $user, Film $film)
    {
        $film = Film::select('id', 'judul')->get();
        return view('kritik.create', compact('film', 'user'));
    }

    public function store( Request $request, Kritik $kritik, Film $film, User $user)
    {
        $request->validate([
            'content' => 'required',
            'point' => 'required',
        ]);

        $kritik = new Kritik;
        $kritik->film_id = $film->id;
        $kritik->user_id = $request->user_id;
        $kritik->content = $request->content;
        $kritik->point = $request->point;
        $kritik->save();

        return redirect()->route('film.show', $film->id);
    }
}