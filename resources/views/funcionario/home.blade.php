@extends('layouts.template')

@section('content')
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Seu ponto </h2>
        <ul class="nav navbar-right panel_toolbox">
          
       
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>Data</th>
              <th>Inicio</th>
              <th>Fim</th>
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach($folha as $f)
              <th scope="row">{{ $f['id'] }}</th>
              <td>{{ $f['dia'] }}</td>
              <td>{{ $f['hora_ent'] }}</td>
              <td>{{ $f['hora_saida'] }}</td>
              <td><button type="button" class="btn btn-default btn-xs">validar</button></td>
              @endforeach
            </tr>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
@stop