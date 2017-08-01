<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Promocion;
use App\Administradores;
use Laracasts\Flash\Flash;
use DB;
use Storage;
use Mail;

use App\Http\Requests;

class proyectosController extends Controller
{
    public function registrarCli()
    {
        $clientes=Administradores::all();
        return view('registrarCliente', compact('clientes'));
    }

    public function registrarCliente()
    {
        $clientes=Administradores::all();
        return view('registrame', compact('clientes'));
    }

    public function registrarAdmin()
    {
        $admin=Administradores::all();
        return view('registrarAdministrador');
    }

    public function registrarPromo()
    {
        $promo=Promocion::all();
        return view('registrarPromocion');
    }

    public function guardarCli(Request $datos)
    {
    	$cliente = new Cliente();
        $cliente->nombres=$datos->input('nombres');
        $cliente->apellidos=$datos->input('apellidos');
        $cliente->edad=$datos->input('edad');
        $cliente->sexo=$datos->input('sexo');
        $cliente->hijos=$datos->input('hijos');
        $cliente->ocupacion=$datos->input('ocupacion');
        $cliente->pais=$datos->input('pais');
        $cliente->estado=$datos->input('estado');
        $cliente->municipio=$datos->input('municipio');
        $cliente->telefono=$datos->input('telefono');
        $cliente->correo=$datos->input('correo');
        $cliente->domicilio=$datos->input('domicilio');
    	$cliente->save();
        flash('Ha finalizado el registro exitosamente!')->success();

         Mail::send('mailTemplate', ['cliente' => $cliente], function ($m) use ($cliente) {
            $m->from('helganovelo@gmail.com', 'Transportes y Autobuses del Pacífico.');
            $m->to($cliente->correo, $cliente->nombres)->subject('Bienvenido a TAP!');
        });
        return redirect('/consultarClientes');
    }

    public function guardarCliente(Request $datos)
    {
        $cliente = new Cliente();
        $cliente->nombres=$datos->input('nombres');
        $cliente->apellidos=$datos->input('apellidos');
        $cliente->edad=$datos->input('edad');
        $cliente->sexo=$datos->input('sexo');
        $cliente->hijos=$datos->input('hijos');
        $cliente->ocupacion=$datos->input('ocupacion');
        $cliente->pais=$datos->input('pais');
        $cliente->estado=$datos->input('estado');
        $cliente->municipio=$datos->input('municipio');
        $cliente->telefono=$datos->input('telefono');
        $cliente->correo=$datos->input('correo');
        $cliente->domicilio=$datos->input('domicilio');
        $cliente->save();
        flash('Ha finalizado el registro exitosamente!')->success();

        return redirect('/');
    }

    public function guardarAdmin(Request $datos)
    {
        $admin = new Administradores();
        $admin->nombre=$datos->input('nombre');
        $admin->usuario=$datos->input('usuario');
        $admin->contraseña=$datos->input('contraseña');
        $admin->save();
        flash('Administrador guardado exitosamente!')->success();

        return redirect('/consultaAdministradores');
    }  

    public function guardarPromo(Request $datos)
    {
        $promo = new Promocion();
        $promo->nombreimg=$datos->input('nombreimg');
        $promo->descripcion=$datos->input('descripcion');
        $promo->fecha_inicio=$datos->input('fecha_inicio');
        $promo->fecha_fin=$datos->input('fecha_fin');


        $promo->save();
        flash('Promoción guardado exitosamente!')->success();

        return redirect('/consultarPromo');
    } 

    public function consultarCli()
    {
        $clientes=DB::table('cliente')
            ->select('cliente.*')
            ->get();

        return view('consultarClientes', compact('clientes'));
    }

    public function consultarAdmin()
    {
        $admin=Administradores::all();
        return view('consultaAdministradores', compact('admin'));
    }

    public function consultarPromo()
    {
        $promo=Promocion::all();
        return view('consultarPromo', compact('promo'));
    }

    public function eliminarCli($id)
    {
    	$clientes=Cliente::find($id);
    	$clientes->delete();
        flash('Cliente eliminado exitosamente!')->success();

    	return redirect('/consultarClientes');
    }

    public function eliminarPromo($id)
    {
        $promo=Promocion::find($id);
        $promo->delete();
        flash('Promoción eliminado exitosamente!')->success();

        return redirect('/consultarPromo');
    }

    public function eliminarAdmin($id_admin)
    {
        $admin=Administradores::find($id_admin);
        $admin->delete();
        flash('Administrador eliminado exitosamente!')->success();

        return redirect('/consultaAdministradores');
    }

    public function editarCli($id)
    {
        $cliente=Cliente::find($id);
        return view('editarCli',compact('cliente'));
    }

    public function editarPromo($id)
    {
        $promo=Promocion::find($id);
        return view('editarPromo',compact('promo'));
    }

    public function editarAdmin($id_admin)
    {
        $admin=Administradores::find($id_admin);
        return view('editarAdmin',compact('admin'));
    }

    public function enviarpromo($id)
    {
        $promo=Promocion::find($id);
        return view('enviarpromo',compact('promo'));
    }

    public function actualizarCli($id, Request $datos)
    {
        $cliente=Cliente::find($id);
        $cliente->nombres=$datos->input('nombres');
        $cliente->apellidos=$datos->input('apellidos');
        $cliente->edad=$datos->input('edad');
        $cliente->sexo=$datos->input('sexo');
        $cliente->ocupacion=$datos->input('ocupacion');
        $cliente->hijos=$datos->input('hijos');
        $cliente->pais=$datos->input('pais');
        $cliente->estado=$datos->input('estado');
        $cliente->municipio=$datos->input('municipio');
        $cliente->domicilio=$datos->input('domicilio');
        $cliente->telefono=$datos->input('telefono');
        $cliente->correo=$datos->input('correo');
        $cliente->save();
        flash('Cliente modificado exitosamente!')->success();

        return redirect('/consultarClientes');  
    }

    public function actualizarPromo($id, Request $datos)
    {
        $promo=Promocion::find($id);
        $promo->nombreimg=$datos->input('nombreimg');
        $promo->descripcion=$datos->input('descripcion');
        $promo->fecha_inicio=$datos->input('fecha_inicio');
        $promo->fecha_fin=$datos->input('fecha_fin');
        $promo->save();
        flash('Promoción modificado exitosamente!')->success();

        return redirect('/consultarPromo');  
    }

    public function actualizarAdmin($id, Request $datos)
    {
        $admin = Administradores::find($id);
        $admin->nombre=$datos->input('nombre');
        $admin->usuario=$datos->input('usuario');
        $admin->contraseña=$datos->input('contraseña');
        $admin->save();
        flash('Administrador modificado exitosamente!')->success();

        return redirect('/consultaAdministradores');
    }

    public function pdfCli(){
        $cliente=Cliente::all();
        $vista =view('/clientesPDF',compact('cliente'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        $pdf->setPaper('letter');
        return $pdf->stream('ListadoClientes.pdf');
    }

    public function pdfAdmin(){
        $admin=Administradores::all();
        $vista =view('/administradoresPDF',compact('admin'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        $pdf->setPaper('letter');
        return $pdf->stream('ListadoAdministradores.pdf');
    }
}

    