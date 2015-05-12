@extends('template.master')
@section('title'){{ 'Admin | ' . Auth::user()->username }}@endsection
@section('content')
	@include('template.partials.logbar')
	
			<br><br><br><div align="center" ><p class="lora "style="border-radius:5px;background:#9809A5;color:white;width:260px;padding:5px;font-size:1.2em;font-weight:bold;text-align:center;border: 3px solid black;">Bienvenido ADMIN : {{ Auth::user()->name }}</p></div><div class="row-fluid">
		<div class="container" id="admin">
			<table class="table table-striped table-hover table-bordered"><br>
				<thead>
						@if(\Session::has('alert'))
				 			 <div style="color:black;text-align:center;font-size:1.4em;height:60px;"class="alert alert-success lora">
				 				 <button type="button" class="close" data-dismiss="alert">×</button>
				  				 <strong>{{Session::get('alert')}}</strong>
							</div>
						@endif
					<th style="text-align:center"class="success">Titulo de la publicación</th>
					<th style="text-align:center"class="success">Post Nro:</th>
					<th style="text-align:center"class="success">Fecha de creación</th>
					<th style="text-align:center"class="danger">Acciones</th>
				</thead>
				<tbody>

					@foreach($posts as $x)
						<tr>
							<td class="active">{{$x->title}}</td>
							<td class="active">{{$x->id}}</td>
							<td class="active">{{$x->created_at}}</td>
							<td>
								<div class="btn-group-center">
									<a href="admin/posts/{{$x->id}}/edit" class="btn btn-success btn-lg"><i class="fa fa-edit"></i></a>
									<a href="admin/posts/{{$x->id}}/delete" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-danger btn-lg	"><i class="fa fa-trash"></i></a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="container" align="center">
				<?php echo $posts->render() ?>
			</div>
		</div>
	</div>
@include('template.partials.footer')
@stop