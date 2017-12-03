@extends('layouts.template')

@section('content')	
	<div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>{{ $usuario['name'] }} <small>Salario bruto: R$:{{ $usuario['salario'] }}</small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Descrição</th>
                  <th>Desconto</th>
                  <th>Proventos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Salario</th>
                  <td></td>
                  <td>{{ $usuario['salario'] }}</td>
                </tr>
                <tr>
                  <th scope="row">Desconto</th>
                  <td>{{ $desconto }}</td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">Hora Extra</th>
                  <td></td>
                  <td>{{ $horaExtra }}</td>
                </tr>

                <tr>
                  <th >Total a receber</th>
                  
                  <td></td>
                  <td>R$ {{ $liquido }}</td>
                </tr>

              </tbody>
            </table>

          </div>
        </div>
      </div>
@stop