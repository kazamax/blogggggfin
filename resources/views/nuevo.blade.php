@extends('template.master')
@section('title'){{ 'Nueva publicación |' . \Auth::user()->username }}@endsection
@section('content')
	@include('template.partials.logbar')
	<section id="editar">
	<div class="row-fluid">
		<div class="container">
			<div class="jumbotron">
				<h1 class="lora" style="text-align:center">
					Crear una nueva publicación
				</h1>
			</div>
		</div>
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8">

				@include('template.partials.messages-error')

				{!! Form::open(['url' => 'admin/posts/new', 'autocomplete' => 'off']) !!}
					<fieldset>
						<input type="text" name="title" placeholder="Título -> ( De la noticia a publicar)" class="form-control">
						<br>
						<textarea name="content" id="editor" cols="30" rows ="15" class="form-control">
						</textarea>
						<br>
						<input type="text" name="tags" class="form-control" placeholder="Etiquetas -> ( Separadas por una coma )">
						<input type="text" name="photo" placeholder="Imagen del post -> ( Link de internet )" class="form-control">
						<br>
						<input style="color:black;float:right;border-radius:5px;font-size:1.2em;font-weight:bold"class="btn btn-success lora" type="submit" value="Crear publicación" >
						
					</fieldset>
				{!! Form::close() !!}
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<br><br>
</section>
	@include('template.partials.footer')
@endsection
@section('js')
	<script>
		$('#editor').trumbowyg();
	</script>
@stop