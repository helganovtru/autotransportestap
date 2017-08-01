@extends('master')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
             <a class="navbar-brand" href="{{url('/admin')}}">TAP
             </a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrarCliente')}}">Clientes</a></li>
            <li><a href="{{url('/registrarAdministrador')}}">Administrador</a></li>
            <li><a href="{{url('/registrarPromocion')}}">Promoción</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/consultarClientes')}}">Clientes</a></li>
            <li><a href="{{url('/consultaAdministradores')}}">Administradores</a></li>
            <li><a href="{{url('/consultarPromo')}}">Promociones</a></li>
          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

@section('contenido')
<h1>Envío de promoción a clientes TAP </h1>
<form action="{{url('mail.store')}}/{{$promo->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
  
  <div class="form-group">
    <h2>Previsualización</h2>
    <br><label>Imagen:<img width="100px" src="{{$promo->nombreimg}}"> </label>
    <br><label>Descripción: {{$promo->descripcion}}</label>
    <br><label>Fecha de inicio: {{$promo->fecha_inicio}}</label>
    <br><label>Fecha de finalización: {{$promo->fecha_fin}}</label>
  </div>

   <div class="form-group">
    <h2>Filtros</h2>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>
          <div class="form-group">
          <label class="col-lg-2 control-label">OCUPACIÓN</label>
          <div class="col-lg-10">
              <div class="checkbox">
                <br><input name="estudiante" type="checkbox" />ESTUDIANTE
                <br><input name="docente" type="checkbox" />DOCENTE
                <br><input name="empleado" type="checkbox" />EMPLEADO
                <br><input name="empresario" type="checkbox" />EMPRESARIO
                <br><input name="amadecasa" type="checkbox" />AMA DE CASA
                <br><input name="pensionadojubilado" type="checkbox" />PENSIONADO/JUBILADO
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">SEXO</label>
            <div class="col-lg-10">
              <div class="checkbox">
                  <input name="femenino" type="checkbox" />FEMENINO
                  <br><input name="masculino" type="checkbox" />MASCULINO
              </div>
            </div>
          </div>

          <div class="form-group">
          <label class="col-lg-2 control-label">HIJOS</label>
          <div class="col-lg-10">
            <div class="checkbox">
                <input name="hijossi" type="checkbox" />SI
                <br><input name="hijosno" type="checkbox" />NO
            </div>
        </th>

        <th>LOCALIZACIÓN
          <div class="form-group">
            <label class="col-lg-2 control-label">País:</label>
            <div class="col-lg-10">
            <div class="checkbox">
              <br><input name="mexico" type="checkbox" />MÉXICO
                <br><input name="estadosunidos" type="checkbox" />ESTADOS UNIDOS
            </div>
            </div>
        </div>

            <div class="form-group">
              <label class="col-lg-2 control-label">Estado:</label>
             <div class="col-lg-10">
              <div class="checkbox">
                <br><input name="bajacalifornia" type="checkbox" />BAJA CALIFORNIA
                <br><input name="sonora" type="checkbox" />SONORA
                <br><input name="sonora" type="checkbox" />SINALOA
                <br><input name="nayarit" type="checkbox" />NAYARIT
                <br><input name="jalisco" type="checkbox" />JALISCO
                <br><input name="michoacan" type="checkbox" />MICHOACÁN
                <br><input name="edomexico" type="checkbox" />ESTADO DE MÉXICO
                <br><input name="arizona" type="checkbox" />ARIZONA
                <br><input name="california" type="checkbox" />CALIFORNIA

              </div>
            </div>
          </div>
        </th>
      </tr>
    </thead>
  </table>
  </div>


  <div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="{{url('/admin')}}" class="btn btn-danger">Cancelar</a>
  </div>
</form>
@stop