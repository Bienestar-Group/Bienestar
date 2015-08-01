<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profesional as Profesional;

class ProfesionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profesionals = Area::all();
-		return \View::make('list',compact('profesionals'));	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make ('new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$profesional=new Profesional;
		$profesional->create ($request->all());
		return redirect('profesional');

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
		$profesional = Profesional::find($Id_Profesional);
-		return \View::make('update',compact('profesional'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profesional= Profesional::find($request->Id_Profesional);
		$profesional->Tipo_Documento=$request->Tipo_Documento;
		$profesional->Documento=$request->Documento;
		$profesional->Nombre=$request->Nombre;
		$profesional->Primer_Apellido=$request->Primer_Apellido;
		$profesional->Segundo_Apellido=$request->Segundo_Apellido;
		$profesional->Telefono=$request->Telefono;
		$profesional->Email=$request->Email;
		$profesional->Direccion=$request->Direccion
		$profesional->Fecha_Nacimiento=$request->Fecha_Nacimiento;
		$profesional->Estado=$request->Estado;
		$profesional->save();
		return redirect('profesional');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$profesional= Profesional::find($Id_Profesional);
		$profesional->delete();
		return redirect()->back();
	}

}
