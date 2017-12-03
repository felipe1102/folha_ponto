@extends('layouts.template')

@section('content')
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Seu Ponto</h2>
        <ul class="nav navbar-right panel_toolbox">
          
       
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table table-striped">
          <thead>
            <tr>
             
              <th>Data</th>
              <th>Inicio</th>
              <th>Fim</th>
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            @foreach($folha as $f)
              @if($f->hora_ent != "")
                
                  <td>{{  date('d/m/Y', strtotime($f->dia)) }}</td>
                  <td>{{ $f->hora_ent }}</td>
                  <td>{{ $f->hora_saida }}</td>
                  <td><a type="button" disabled="disabled"  class="btn btn-default btn-xs">validar</a></td>
                </tr>
              @else
                
                  <td>{{ date('d/m/Y', strtotime($f->dia)) }}</td>
                  <td>{{ $f->hora_ent }}</td>
                  <td>{{ $f->hora_saida }}</td>
                  <td><a type="button" href="/justificativa/{{ $f->id }}"  class="btn btn-default btn-xs">validar</a></td>
                </tr>
              @endif
              @endforeach
            

            
          </tbody>
        </table>

      </div>
    </div>
  </div>
@stop
