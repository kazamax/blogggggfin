@extends('template.master')
@section('title'){{$post->title .' | Larablog'}}@endsection
@section('content')
@include('template.partials.navbar')
	<div class="row-fluid" style="background-image: url('{{$post->photo}}'); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed; margin-top:-23px;">
		<div class="blur">
			<div id="artitle" class="lora">
				{{$post->title}}
			</div>
		</div>
	</div>
<section id="posts">
	<div class="row-fluid"> 
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8" align="center">
				<h4>Bienvenido/a</h4>
				<h5 style="font-family: 'Shadows Into Light', bold;padding-right:15px;color:black; font-size:1.6em;font-style: italic;font-weight: bold;">Temas relacionados a este articulo de noticias :<i class="fa fa-futbol-o fa-lg"></i></h5>
				
				<?php 
					$tags = explode(',', $post->tags);
				 ?>
			@foreach($tags as $t)
				<a href="../tag/{{$t}}"><label class="btn btn-info btn-xs">{{$t}}</label>
			@endforeach
				<hr>
				<a href="{{route('home')}}" class="btn btn-info "><i class="fa fa-chevron-left"></i> Inicio </a><br>
				<hr>
				<p class="justify">
					{!! $post->content !!}
				</p>
						<hr>
				<div class="fb-comments" data-href="blog.com/articulos/{{$post->slug}}" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
				<br>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
<br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@include('template.partials.footer')
@stop