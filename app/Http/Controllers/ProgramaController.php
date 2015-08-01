<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Programa_Formacion as Programa_Formacion; 

class ProgramaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$programa = Programa_Formacion::all();
		return \View::make('list_programa',compact('programa'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('new_programa');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$programa= new Programa_Formacion;
		$programa->nombre = $request->nombre;
		$programa->duracion = $request->duracion;
		$programa->nivel = $request->nivel;
		$programa->modalidad=$request->modalidad;
		$programa->descripcion = $request->descripcion;
		$programa->estado = $request->estado;
		$programa->save();
		return redirect('programa');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
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
		//
		$programa = Programa_Formacion::find($id);
		return \View::make('update_programa',compact('programa'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
		$programa=Programa_Formacion::find($request->id);
		$programa->nombre = $request->nombre;
		$programa->duracion = $request->duracion;
		$programa->nivel = $request->nivel;
		$programa->modalidad=$request->modalidad;
		$programa->descripcion = $request->descripcion;
		$programa->estado = $request->estado;
		$programa->save();
		return redirect('programa');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$programa=Programa_Formacion::find($id);
		$programa->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$programa=Programa_Formacion::where('nombre','like','%'.$request->nombre.'%')->get();
		return \View::make('list_programa',compact('programa'));

	}

}

