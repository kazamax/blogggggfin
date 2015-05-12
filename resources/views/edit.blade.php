@extends('template.master')
@section('title'){{ 'Edición de Post |' . $post->title}}@endsection
@section('content')
	@include('template.partials.logbar')
	<section id="editar">
	<div class="row-fluid">
		<div class="container">
				<h3 class="lora" style="text-align:center; color:black;">
					<img src="{{$post->photo}}" title="{{$post->title}}" class="img-responsive img-thumbnail"><br><br><hr>
					Editar publicación : <hr>
				</h3>
		</div>
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8">

				@include('template.partials.messages-error')


				{!! Form::open(['url' => 'admin/posts/'.$post->id.'/refresh', 'autocomplete' => 'off']) !!}
					<fieldset>
						<input type="text" name="title" value="{{$post->title}}" class="form-control">
						<br>
						<textarea name="content" id="editor" cols="30" rows ="15" class="form-control">{{$post->content}}	
						</textarea>
						<br>
						<input type="text" name="tags" value="{{$post->tags}}" class="form-control">
						<input type="text" name="photo" value="{{$post->photo}}" class="form-control">
						<br>
						<input type="submit" value="Actualizar" class="btn btn-block btn-primary">
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