@extends('layouts.template')

@section('content')
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ponto dos Funcionarios do mes</h2>
        <ul class="nav navbar-right panel_toolbox">
          
       
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" method="POST" action="{{ url('/fecharDia') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" >
            <button type="submit" class="btn btn-success">Fechar dia</button>
        </form>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Data</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($user as $u)
                <tr>
                  <th scope="row">{{ $u->id_user }}</th>
                  <td>{{ $u->name }}</td>
                  <td>{{ date('d-m-Y', strtotime($u->dia)) }}</td>
                  
                </tr> 
            @endforeach
            
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
@stop