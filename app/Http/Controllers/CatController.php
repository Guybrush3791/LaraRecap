<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CatRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\CatShip;

use App\Cat;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::all();
        return view('pages.catIndex', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function show($id)
    {
        $cat = Cat::findOrFail($id);
        return view('pages.catShow', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Cat::findOrFail($id);
        return view('pages.catEdit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatRequest $request, $id)
    {
        // dd($request->user());

        $validateData = $request -> validated();
        $cat = Cat::findOrFail($id);

        $file = $request -> file('imgPath');
        if ($file) {

          $targetPath = "img";
          $targetFileName = "cat-" . $id . "."
                      . $file -> getClientOriginalExtension();

          $file -> move($targetPath, $targetFileName);
          $validateData['imgPath'] = $targetFileName;
        }

        $cat -> update($validateData);

        // Mail::to($request -> user()) -> send(new CatShip($cat));

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
