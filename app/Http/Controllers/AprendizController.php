<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Aprendiz as Aprendiz;

class AprendizController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$aprendices = Aprendiz::all();
		return \View::make('list_aprendiz',compact('aprendices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('new_aprendiz');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$aprendiz = new Aprendiz;
		$aprendiz->tipo_documento = $request->tipo_documento;
		$aprendiz->documento = $request->documento;
		$aprendiz->nombre = $request->nombre;
		$aprendiz->primer_apellido = $request->primer_apellido;
		$aprendiz->segundo_apellido = $request->segundo_apellido;
		$aprendiz->telefono = $request->telefono;
		$aprendiz->email= $request->email;
		$aprendiz->direccion = $request->direccion;
		$aprendiz->genero = $request->genero;
		$aprendiz->fecha_nacimiento = $request->fecha_nacimiento;
		$aprendiz->estado = $request->estado;
		$aprendiz->ficha_caracterizacion = $request->ficha_caracterizacion;
		$aprendiz->save();
		return redirect('aprendiz');
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
		$aprendiz = Aprendiz::find($id);
		return \View::make('update_aprendiz',compact('aprendiz'));
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
		$aprendiz=Aprendiz::find($request->id);
		$aprendiz->tipo_documento = $request->tipo_documento;
		$aprendiz->documento = $request->documento;
		$aprendiz->nombre = $request->nombre;
		$aprendiz->primer_apellido = $request->primer_apellido;
		$aprendiz->segundo_apellido = $request->segundo_apellido;
		$aprendiz->telefono = $request->telefono;
		$aprendiz->email= $request->email;
		$aprendiz->direccion = $request->direccion;
		$aprendiz->genero = $request->genero;
		$aprendiz->fecha_nacimiento = $request->fecha_nacimiento;
		$aprendiz->estado = $request->estado;
		$aprendiz->ficha_caracterizacion = $request->ficha_caracterizacion;
		$aprendiz->save();
		return redirect('aprendiz');
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
		$aprendiz=Aprendiz::find($id);
		$aprendiz->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$aprendiz=Aprendiz::where('nombre','like','%'.$request->nombre.'%')->get();
		return \View::make('list_aprendiz',compact('aprendices'));

	}

}
