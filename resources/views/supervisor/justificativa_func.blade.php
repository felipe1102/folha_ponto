@extends('layouts.template')

@section('content')
<form class="form-horizontal form-label-left" novalidate role="form" method="POST" action="{{ url('/aceitarJustificativa') }}" enctype="multipart/form-data">
	<div class="form-group">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" >
        <input type="hidden" name="id_user" value="{{ $justificativa['id_usuario'] }}" >
        <input type="hidden" name="id_folha" value="{{ $justificativa['id_folha'] }}" >
        <input type="hidden" name="id_justificativa" value="{{ $justificativa['id'] }}" >


        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Textarea <span class="required">*</span>
        </label>
        <b>Data da falta: {{ date('d/m/Y', strtotime($ponto['dia'])) }} / Hora Entrada: @if($ponto['hora_ent'] == "") -- @else $ponto['hora_ent'] @endif / Hora Saida: @if($ponto['hora_saida'] == "") -- @else $ponto['hora_saida'] @endif</b>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12" disabled="disabled">{{ $justificativa['descricao'] }}</textarea>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button id="send" type="submit" class="btn btn-success">Aprovar</button>
          
          <a href="/home"  class="btn btn-primary">Voltar</a>
        </div>
      </div>
</form>
@stop