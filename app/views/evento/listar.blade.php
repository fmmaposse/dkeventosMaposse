@extends('template')

@section('content')

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
		<table class="table table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>Titulo</th>
					<th>Descricao</th>
					<th>Local</th>
					<th>Data</th>
					<th>Hora de inicio</th>
					<th>Hora de Termino</th>
					<th>Tipo de Evento</th>
					

					<th>
						Apagar
					</th>
					<th>
						Editar
					</th>
					<th>
						Participantes
					</th>
					<th>
						Participante
					</th>
					<th>
						Alterar Estado
					</th>


				</tr>
			</thead>
			<tbody>
				@foreach($eventos as $evento)
					<tr>
						<td>{{ $evento->id }}</td>
						<td>{{ $evento->titulo }}</td>
						<td>{{ $evento->descricao }}</td>
						<td>{{ $evento->local }}</td>
						<td>{{ $evento->data }}</td>
						<td>{{ $evento->horaInicio }}</td>
						<td>{{ $evento->horaFim }}</td>
						<td>{{ $evento->idTipoEvento }}</td>
						
						<td>
							{{Form::open(array('url'=>'evento/apagar'))}}
								<input type="hidden" name="idEvento" value="{{ $evento->id }}">
								<button type="submit" class="btn btn-danger">Apagar</button>
							{{ Form::close() }}
						</td>
						<td>
							{{Form::open(array('url'=>'evento/editar'))}}
								<input type="hidden" name="idEvento" value="{{ $evento->id }}">
								<button type="submit" class="btn btn-primary">Editar</button>
							{{ Form::close() }}
						</td>
						<td>
							{{ HTML::link('participante/index', 'Ver Participantes') }}
						</td>

						<td>
							{{Form::open(array('url'=>'participante/criar'))}}
								<input type="hidden" name="idEvento" value="{{ $evento->id }}">
								<button type="submit" class="btn btn-primary">Adicionar</button>
							{{ Form::close() }}
						</td>

						<td>
						{{ Form::open(array('url'=>'participante/alterarestado')) }}
							<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Estado</a>
							<div class="modal fade" id="modal-id">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Alterar Estadoa</h4>
										</div>
										<div class="modal-body">
											<input type="radio" name="estado" value="Publicado" placeholder=""> Publicado
											<br>
											<br>

											<input type="radio" name="estado" value="Cancelado" placeholder=""> Cancelado
											<br>
											<br>

											<input type="hidden" name="idEvento" value="{{ $evento->id }}">
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
											<button type="submit" class="btn btn-primary">Alterar</button>
										</div>
									</div>
								</div>
							</div>
						</td>
						{{ Form::close() }}
					</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<br>

		{{ HTML::link('evento/criar', 'Novo Envento', array('class'=>'btn btn-success')) }}

		</div>
	</div>

	<br>
	<br>


{{ Form::open(array('url'=>'#')) }}
	<div class="panel panel-default">
		<div class="panel-body">
		   FILTRAR
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="panel panel-default">
				<div class="panel-body">
					
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						
							<input type="radio" name="estadoevento" value="Activo" placeholder=""> Activo
							 <br>
							 <br>
							
							<input type="radio" name="estadoevento" value="Remarcado" placeholder=""> Remarcado
							 <br>
							 <br>

							<input type="radio" name="estadoevento" value="Cancelado" placeholder=""> Cancelado
							 <br>
							 <br>

							 <input type="submit" name="" value="Resultado" class="btn btn-default">
						
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						@foreach($tipo as $tip)
							<input type="radio" name="tipoevento" value="{{ $tip->nome }}" placeholder="">{{ $tip->nome }}
							 <br>
							 <br>
						@endforeach
					</div>		
				</div>

				</div>
			</div>
		</div>	
	</div>
{{ Form::close() }}

@stop