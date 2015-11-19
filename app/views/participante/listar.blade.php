@extends('template')

@section('content')

		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
		<table class="table table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>Nome</th>
					<th>Apelido</th>
					<th>Empresa</th>
					<th>Sexo</th>

					<th>
						Apagar
					</th>
					<th>
						Editar
					</th>
					<th>
						Participantes
					</th>
					

				</tr>
			</thead>
			<tbody>
				@foreach($participantes as $participante)
					<tr>
						<td>{{ $participante->id }}</td>
						<td>{{ $participante->nome }}</td>
						<td>{{ $participante->apelido }}</td>
						<td>{{ $participante->empresa }}</td>
						<td>{{ $participante->sexo }}</td>
						
						<td>
							{{Form::open(array('url'=>'participante/apagar'))}}
								<input type="hidden" name="idParticipante" value="{{ $participante->id }}">
								<button type="submit" class="btn btn-primary">Apagar</button>
							{{ Form::close() }}
						</td>
						<td>
							{{Form::open(array('url'=>'participante/editar'))}}
								<input type="hidden" name="idParticipante" value="{{ $participante->id }}">
								<button type="submit" class="btn btn-primary">Editar</button>
							{{ Form::close() }}
						</td>
						<td>
							{{ HTML::link('participante/index', 'Ver Participantes') }}
						</td>

					</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<br>

		{{ HTML::link('participante/criar', 'Adicionar Participante', array('class'=>'btn btn-primary')) }}
		</div>
	</div>

	bs3-

@stop
