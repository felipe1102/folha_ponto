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
            </tr>
          </thead>
          <tbody>
            @foreach($funcionarios as $f)
            <tr>
              <th scope="row">{{ $f['id'] }}</th>
              <td>{{ $f['name'] }}</td>
              
            </tr>
            @endforeach
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
@stop
