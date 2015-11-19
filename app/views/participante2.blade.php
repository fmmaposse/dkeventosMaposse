@extends('template2')

@section('content')

	

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>Titulo</th>
					<th>Local</th>
					<th>Data</th>
					<th>Hora Inicio</th>
					<th>ora Fim</th>
					<th>Me Increver</th>
				</tr>
			</thead>
			<tbody>
				@foreach($eventos as $evento)
					<tr>
						<td>{{ $evento->id }}</td>
						<td>{{ $evento->titulo }}</td>
						<td>{{ $evento->local }}</td>
						<td>{{ $evento->data }}</td>
						<td>{{ $evento->horaInicio }}</td>
						<td>{{ $evento->horaFim }}</td>
						<td>

							{{ Form::open(array('url'=>'participante2/inscricao')) }}
							
								<input type="hidden" name="" value="{{ $evento->id  }}">
								<input type="submit" class="btn btn-info" name="" value="Inscricao">
								</form>
							{{ Form::close() }}
							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	

@stop