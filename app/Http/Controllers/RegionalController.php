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
<<<<<<< HEAD
		$regional->nombre_regional = $request->nombre;
		$regional->direccion_regional = $request->direccion;
		$regional->telefono_regional = $request->telefono;
		$regional->pbx_regional = $request->pbx;
		$regional->director_regional = $request->director;
		$regional->telefono_director = $request->telefono_director;
		$regional->estado_regional = $request->estado;
=======
		$regional->nombre = $request->nombre;
		$regional->direccion = $request->direccion;
		$regional->telefono = $request->telefono;
		$regional->pbx = $request->pbx;
		$regional->director = $request->director;
		$regional->telefono_director = $request->telefono_director;
		$regional->estado = $request->estado;
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
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
<<<<<<< HEAD
		$regional->nombre_regional = $request->nombre_regional;
		$regional->direccion_regional = $request->direccion_regional;
		$regional->telefono_regional = $request->telefono_regional;
		$regional->pbx_regional = $request->pbx_regional;
		$regional->director_regional = $request->director_regional;
		$regional->telefono_director = $request->telefono_director;
		$regional->estado_regional = $request->estado_regional;
=======
		$regional->nombre = $request->nombre;
		$regional->direccion = $request->direccion;
		$regional->telefono = $request->telefono;
		$regional->pbx = $request->pbx;
		$regional->director = $request->director;
		$regional->telefono_director = $request->telefono_director;
		$regional->estado = $request->estado;
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
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
<<<<<<< HEAD
		$regionales=Regional::where('nombre_regional','like','%'.$request->nombre.'%')->get();
=======
		$regional=Regional::where('nombre','like','%'.$request->nombre.'%')->get();
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
		return \View::make('list_regional',compact('regionales'));

	}

}
