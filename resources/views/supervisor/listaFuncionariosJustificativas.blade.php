@extends('layouts.template')

@section('content')
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Funcionarios</h2>
        <ul class="nav navbar-right panel_toolbox">
          
       
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Opção</th>

            </tr>
          </thead>
          <tbody>
            @foreach($usuarios as $u)
              @foreach($u['justificativa'] as $j)
              @if($j != null)
                <tr>
                  <th scope="row">{{ $u['id'] }}</th>
                  <td>{{ $u['name'] }}</td>
                  
                  <td><a type="button"  href="/justificativa_supervisor/{{ $j['id'] }}" class="btn btn-default btn-xs">Justificativa</a></td>

                  
                </tr>
              @endif
              @endforeach
            @endforeach
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
@stop
