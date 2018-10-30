@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Añadir película
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
                <form action="{{ url('catalog/create') }}" method="POST">
				{{-- TODO: Abrir el formulario e indicar el método POST --}}
                    {{ csrf_field() }}
					{{-- TODO: Protección contra CSRF --}}
    
    				<div class="form-group">
    					<label for="title">Título</label>
    					<input type="text" name="title" id="title" class="form-control">
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el año --}}
                        <label for="year">Año</label>
                        <input type="number" name="year" id="year" class="form-control">
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el director --}}
                        <label for="director">Director</label>
                        <input type="text" name="director" id="director" class="form-control">
					</div>

					<div class="form-group">
                        <label for="poster">Url Imagen Poster</label>
                        <input type="text" name="poster" id="poster" class="form-control">
						{{-- TODO: Completa el input para el poster --}}
					</div>

					<div class="form-group">
						<label for="synopsis">Resumen</label>
    					<textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Añadir película
						</button>
					</div>

				{{-- TODO: Cerrar formulario --}}
                </form>
			</div>
		</div>
	</div>
</div>

@stop