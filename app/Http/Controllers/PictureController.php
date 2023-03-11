<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pictures=Picture::with('user')->get();
//dd($pictures);

        return view("pictures.index",[
            'pictures'=>$pictures

        ]);

    }

    public function myList()
    {
        $id=Auth::user()->id;
//        dd($id);
        $pictures=Picture::with('user')->where('user_id','Like',"$id")->get();
//        $pictures=Picture::with('user')->get();

//        dd($pictures);

        return view("pictures.myList",[
            'pictures'=>$pictures

        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        dd(Auth::user());

        return view("pictures.create",[
            'users'=>User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Picture::create($request->all());
        return redirect()->route("pictures.myList");
    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Picture $picture)
    {
        return view("pictures.edit",[
            'picture'=>$picture
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Picture $picture)
    {
        $picture->fill($request->all());
        $picture->save();
        return redirect()->route("pictures.myList");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();
        return redirect()->route("pictures.myList");
    }
}
