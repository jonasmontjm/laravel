@extends('master')
@section('title','contact')
@section('content')
   <div class="containter col-md-8 col-md-offset-2">
   	<div class="well well bs-component">
   		<form class="form-horizontal" method="post">
   			@foreach ($errors->all() as $error)
   			   <p class="alert alert-danger"> {{$error}}</p>
   			@endforeach

   			@if (session('status'))
   			    <div class = "alert alert-success">
   			    	{{session('status')}}
   			    </div>
   			@endif


   			<input type="hidden" name="_token" value="{{csrf_token()}}">
   			<fieldset>
   				<legend> Enviar un nuevo ticket</legend>
   				<div class="form-group">
   					<label for="title" class="col-lg-2 control-label" >Título</label>
   					<div class="col-lg-10">
   						<input type="text" class="form-control" id="title" placeholder="Title" name="title">
   					</div>
   				</div>
   				<div class="form-group">
   					<label for="title" class="col-lg-2 control-label">Contenido</label>
   					<div class="col-lg-10">
   						<textarea class="form-control" rows="3" id="content" placeholder="content"  name = "content"></textarea>
   						<span class="help-block"> Envia un ticket para dudas y consultas.</span>
   					</div>
   				</div>
   				<div class="form-group">
   					<div class="col-lg-10 col-md-offset-2">
   						<button class="btn btn-default">Cancelar</button>
   						<button type="sumit" class="btn bnt-primary">Enviar</button>
   					</div>
   				</div>
   			</fieldset>
   		</form>
   	</div>
   	
   </div>
@endsection