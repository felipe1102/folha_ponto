@extends('layouts.template')

@section('content')	
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Cadastro de usuario</h2>
					
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" method="POST" action="{{ url('/cadastrarUsuario') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}" >
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"  for="name">Nome<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="first-name" required="required" name='name' class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"  >Email <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="last-name"  required="required" name='email' class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Senha<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="middle-name" class="form-control col-md-7 col-xs-12" type="password"  required="required" name="senha">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="salario"  >Salario 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="last-name"  required="required" name='salario' class="form-control col-md-7 col-xs-12">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="uf"  >UF
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="last-name"  required="required" name='uf' class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cidade"  >Cidade
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="last-name"  required="required" name='cidade' class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
							<div class="col-md-6 col-sm-6 col-xs-12">

				          <p>
				            Colaborador:<input type="radio" class="flat" name="tipoUsuario" id="genderM" value="1" checked="" required /> 
				            Supervisor: <input type="radio" class="flat" name="tipoUsuario" id="genderF" value="2" />
				            RH: <input type="radio" class="flat" name="tipoUsuario" id="genderF" value="3" />
				          </p>
								
							</div>
						</div>
						<div class="form-group">
			              <label class="control-label col-md-3 col-sm-3 col-xs-12">Supervisor</label>
			              <div class="col-md-6 col-sm-6 col-xs-12">
			                <select class="form-control" name="supervisor">
			                  <option value=""></option>
			                  @foreach ($super as $s)
			                  <option value="{{ $s['id'] }}">{{ $s['name'] }}</option>
			                  @endforeach
			                  
			                </select>
			              </div>
			            </div>

						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="submit" class="btn btn-success">Confirmar</button>
								<a class="btn btn-primary" atype="button">Voltar</a>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
@stop
