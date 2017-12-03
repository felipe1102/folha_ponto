@extends('layouts.template')

@section('content')
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Seu Ponto Supervisor</h2>
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
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach($folha as $f)
              <th scope="row"></th>
              <td>Mark</td>
              <td>@mdo</td>
              @endforeach
            </tr>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
@stop