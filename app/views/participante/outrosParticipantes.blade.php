@extends('template')

@section('content')
		
	{{ Form::open(array('url'=>'participante2/filtrados')) }}
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>SEXO</th>
				<th>IDADE</th>
				<th>GRAU ACADEMICO</th>
				<th>FILTAR</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<select name="sexo" id="input" class="form-control">
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
				</td>
				<td>
					<input type="number" name="idade" value="" placeholder="Idade" class="form-control">
				</td>
				<td>
					<input type="text" name="grauacademico" value="" placeholder="Grau academico" class="form-control">
				</td>
				<td>
					<input type="submit" name="" value="Ok" class="btn btn-success">
				</td>
			</tr>
		</tbody>
	</table>

	<br>
	<br>
	<br>


		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>SEXO</th>
					<th>DATANASCIMENTO</th>
					<th>GRAUACADEMICO</th>
					<th>TELEFONE</th>
					<th>ID EVENTO</th>
				</tr>
			</thead>
			<tbody>
				@foreach($participante2 as $part)
					<tr>
						<td>{{ $part->id }}</td>
						<td>{{ $part->nome }}</td>
						<td>{{ $part->sexo }}</td>
						<td>{{ $part->datanascimento }}</td>
						<td>{{ $part->grauacademico }}</td>
						<td>{{ $part->telefone }}</td>
						<td>{{ $part->idEvento }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	

@stop