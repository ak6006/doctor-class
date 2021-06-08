<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use App\Models\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BranchController extends Controller
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
        $branch = Branch::all();
        return view('branchs.index', compact('branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branchs.create');
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
			'code' => 'max:255',
            'address' => 'max:255',
            'phone' => 'max:255',
            'response_person' => 'max:255',
			'co_id' =>  'max:255',
			'city' =>  'max:255',

        ]);
        $branch = Branch::create($storeData);

        return redirect('/students')->with('completed', 'Branch has been saved!');
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
        $branch = Branch::findOrFail($id);
        return view('branchs/edit', compact('branch'));
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
			'code' => 'max:255',
            'address' => 'max:255',
            'phone' => 'max:255',
            'response_person' => 'max:255',
			'city' => 'max:255',
			
        ]);
        Branch::whereId($id)->update($updateData);
        return redirect('/students')->with('completed', 'Branch has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::findOrFail($id);
        $branch->delete();

        return redirect('/students')->with('completed', 'Branch has been deleted');
    }
}