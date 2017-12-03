@extends('layouts.template')

@section('content')
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Lista Funcionario para folha</h2>
        <ul class="nav navbar-right panel_toolbox">
          
       
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-12">
              @if ($erros != "")
                
                  <span class="help-block">
                      <strong style="color: red">{{$erros}}</strong>
                  </span>
                
              @endif
            </div>
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
                <tr>
                  <th scope="row">{{ $u['id'] }}</th>
                  <td>{{ $u['name'] }}</td>
                  <td><a type="button"  href="/folha/{{ $u['id'] }}" class="btn btn-default btn-xs">Folha do mes</a></td>
                  
                </tr> 
            @endforeach
            
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
@stop