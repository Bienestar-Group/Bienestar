<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Regional as Regional;

class RegionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$regionales = Regional::all();
		return \View::make('list_regional',compact('regionales'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('new_regional');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$regional = new Regional;
		$regional->nombre = $request->nombre;
		$regional->direccion = $request->direccion;
		$regional->telefono = $request->telefono;
		$regional->pbx = $request->pbx;
		$regional->director = $request->director;
		$regional->telefono_director = $request->telefono_director;
		$regional->estado = $request->estado;
		$regional->save();
		return redirect('regional');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_regional)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$regional = Regional::find($id);
		return \View::make('update_regional',compact('regional'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$regional=Regional::find($request->id);
		$regional->nombre = $request->nombre;
		$regional->direccion = $request->direccion;
		$regional->telefono = $request->telefono;
		$regional->pbx = $request->pbx;
		$regional->director = $request->director;
		$regional->telefono_director = $request->telefono_director;
		$regional->estado = $request->estado;
		$regional->save();
		return redirect('regional');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$regional=Regional::find($id);
		$regional->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$regional=Regional::where('nombre','like','%'.$request->nombre.'%')->get();
		return \View::make('list_regional',compact('regionales'));

	}

}
