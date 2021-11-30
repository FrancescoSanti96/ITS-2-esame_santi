<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use App\Models\Location;
use Illuminate\Http\Request;

class AlimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliments = Aliment::latest()->paginate(8);
        // $location = Aliment::find(1);

        // return view('aliments.index',compact('aliments , locations'))
        return view('aliments.index',compact('aliments'))
            // ->with('i');
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aliments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'numero'=>'required',
            'brand' => 'required',
            'location' => 'required',
        ]);

        Aliment::create($request->all());

        return redirect()->route('aliments.index')
                        ->with('success','Aliment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aliment $aliment)
    {
        return view('aliments.show',compact('aliment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aliment $aliment)
    {
        return view('aliments.edit',compact('aliment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aliment $aliment)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'numero' => 'required',
            'brand' => 'required',
            'location' => 'required',
        ]);

        $aliment->update($request->all());

        return redirect()->route('aliments.index')
                        ->with('success','Aliment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aliment $aliment)
    {
        $aliment->delete();

        return redirect()->route('aliments.index')
                        ->with('success','Aliment deleted successfully');
    }

    public function frigorifero()
    {
        // solo gli alimenti con location = frigorifero saranno passati alla view
        $aliments = Aliment::where('location','=', 'frigorifero')->paginate(8);
        return view('locations.frigorifero',compact('aliments'));
    }

    public function spesa()
    {
        $aliments = Aliment::where('location','=', 'lista spesa')->paginate(8);
        return view('locations.spesa',compact('aliments'));
    }

    public function magazzino()
    {
        $aliments = Aliment::where('location','=', 'magazzino')->paginate(8);
        return view('locations.magazzino',compact('aliments'));
    }
}
