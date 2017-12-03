@extends('layouts.template')

@section('content')
<form class="form-horizontal form-label-left" method="POST" action="{{ url('/cadastraJustificativa') }}" enctype="multipart/form-data" novalidate>
  <input type="hidden" name="_token" value="{!! csrf_token() !!}" >
	<div class="form-group">

        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Textarea <span class="required">*</span>
        </label>
        <b>Data da falta: {{ date('d/m/Y', strtotime($ponto['dia'])) }} / Hora Entrada: @if($ponto['hora_ent'] == "") -- @else $ponto['hora_ent'] @endif / Hora Saida: @if($ponto['hora_saida'] == "") -- @else $ponto['hora_saida'] @endif</b>

        <input type="hidden" name="id_ponto" value="{{ $ponto['id'] }}" >
        <input type="hidden" name="id_usuario" value="{{ $ponto['id_user'] }}" >
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a type="submit" href="/home" class="btn btn-primary">Cancel</a>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
</form>
@stop