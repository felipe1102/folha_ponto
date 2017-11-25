@extends('layouts.template')

@section('content')
<form class="form-horizontal form-label-left" novalidate>
	<div class="form-group">

        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Textarea <span class="required">*</span>
        </label>
        <b>Data / horainicial / hora final</b>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12" disabled="disabled"></textarea>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button id="send" type="submit" class="btn btn-success">Aprovar</button>
          <button id="send" type="submit" class="btn btn-danger">Regeitar</button>
          <a href="/supervisor"  class="btn btn-primary">Voltar</a>
        </div>
      </div>
</form>
@stop