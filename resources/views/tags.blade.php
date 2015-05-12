@extends('template.master')
@section('title'){{'Contenido de etiqueta | Larablog'}}@endsection
@section('content')
	<div class="row-fluid" id="tag">
		<div class="blur">
			<div id="tagged" class="lora">
				Articulos etiquetados con {{$tag}}
			</div>
		</div>
	</div>
	<div class="row-fluid">
		@foreach($posts as $p)
			<div class="col-md-4 tgs" style="min-height: 40vh; background-image: url('{{$p->photo}}'); background-size:cover; background-position:center; border-bottom: 3px solid white;">
				<div class="blur">
					<div id="taggex" class="lora">
						<a href="../articulos/{{$p->slug}}" style="color: white;">{{$p->title}}</a>
					</div>			
				</div>
			</div>
		@endforeach
		<div class="col-md-4 tgs" id="bhome">
			<div class="blur">
				<div id="taggex" class="lora">
					<a href="{{route('home')}}" style="color: white;">Regresar a <br>127.0.0.1</a>
				</div>			
			</div>
		</div>
	</div>	
@endsection