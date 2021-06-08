<?php

namespace App\Http\Controllers;
use App\Models\Bouquet;
use App\Models\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BouquetsController extends Controller
{
	
	    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
    public function index()
    {
        $bouquet = Bouquet::all();
        return view('bouquets.index', compact('bouquet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bouquets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
					 
        $storeData = $request->validate([
            'name' => 'max:255',
            'price' => 'max:255',
            'currancy_symbol' => 'max:255',


        ]);
        $bouquet = Bouquet::create($storeData);

        return redirect('/bouquets')->with('completed', 'Bouquets has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bouquet = Bouquet::findOrFail($id);
        return view('bouquets.edit', compact('bouquet'));
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
        $updateData = $request->validate([
            'name' => 'max:255',
            'price' => 'max:255',
            'currancy_symbol' => 'max:255',
			'daysperweek' => 'max:255',
			'workperday' => 'max:255',
			'dayspersubscription' => 'max:255',
			'minutespertask' => 'max:255',

        ]);
        Bouquet::whereId($id)->update($updateData);
        return redirect('/bouquets')->with('completed', 'Bouquet has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bouquet = Bouquet::findOrFail($id);
        $bouquet->delete();

        return redirect('/bouquets')->with('completed', 'Bouquet has been deleted');
    }
}