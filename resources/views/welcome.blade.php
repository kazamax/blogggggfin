@extends('template.master')
@section('title'){{'Vinotinto, Venezuela, Articulos'}}@endsection
@section('content')
	@include('template.partials.main-nav')
	@if(isset($_GET['page']))
		<div class="row-fluid">
			<div class="jumbotron">
				<h1 class="lora" style="text-align:center;font-size:4em;">Todo Deportes!<br>
				<small>Noticias Vinotinto.!<br></small><i class="fa fa-futbol-o"></i></h1>
			</div>
		</div>
	@else
	<header>
		<div class="blur">
				<div class="lora" id="title">
					<p style="color:yellow;">Todo Deportes Venezuela</p>
				</div>
				<div id="subtitle" class="lora">
					<p>¡VinotintoPaTodoElMundo!</p><i class="fa fa-users"></i>
				</div>
				<div align="center">
					<br><br>
					<a onclick="$('#posts').animatescroll({scrollSpeed:2400,easing:'easeOutElastic'});"class="btn btn-web btn-lg">Leer Publicación... <i class="fa fa-hand-o-up"></i></a>
				</div>
		</div>
	</header>
	@endif
	<section id="posts">
		<div class="row-fluid">
			<div class="container">
				<div class="col-md-2"></div>
					<div class="col-md-8">
						@foreach($posts as $p)
							<h4 class="text-center">{{$p->title}}</h4>
							<div align="center">
								<img src="{{$p->photo}}" title="{{$p->title}}" class="img-responsive img-thumbnail">
							</div>
							<br><br>
							<div align="center">
								<a href='articulos/{{$p->slug}}' class="btn btn-info "><i class="fa fa-hand-o-right fa-2x"></i> Leer el articulo completo <i class="fa fa-hand-o-left fa-2x"></i></a><br><br>
							</div>	<div align="center">
								<h5 style="font-family: 'Shadows Into Light', bold;padding-right:15px;color:black; font-size:1.5em;font-style: italic;font-weight: bold;">Temas relacionados a este articulo de noticias :<i class="fa fa-futbol-o fa-lg"></i></h5>
								<?php
									$tags = explode(',', $p->tags);
								?><br>
								@foreach($tags as $t)
									<a href="tag/{{$t}}"><label class="btn btn-info btn-xs">#{{$t}}</label>
								@endforeach
							</div><br><br>
							<div align="center">
							<a style="color:black;"onclick="$('#posts').animatescroll({scrollSpeed:2400,easing:'easeOutElastic'});"class="btn btn-web">Volver  <i class="fa fa-angle-up fa-2x"></i></a>
							</div><br>
							<div align="center"><i class="fa fa-camera fa-2x"></i></div>
							<hr>
						 @endforeach
					</div>
				<div class="col-md-2"></div>
			</div>
			<div class="container" align="center">
				<?php echo $posts->render() ?>
			</div>
		</div>
</section>
@include('template.partials.footer')
@stop