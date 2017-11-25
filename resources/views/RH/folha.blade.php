@extends('layouts.template')

@section('content')	
	<div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Nome Funcionario <small>Salario bruto: R$:1000</small></h2>

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
                  <td>1000</td>
                </tr>
                <tr>
                  <th scope="row">Desconto</th>
                  <td>200</td>
                  <td></td>
                </tr>

                <tr>
                  <th >Total a receber</th>
                  
                  <td></td>
                  <td>$R 100</td>
                </tr>

              </tbody>
            </table>

          </div>
        </div>
      </div>
@stop