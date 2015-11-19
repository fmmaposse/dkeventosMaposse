@extends('template2')

@section('content')

	{{ Form::open(array('url'=>'participante2/registo')) }}
		<legend>Form title</legend>
	
		<div class="form-group">
			
			<input type="text" name="nome" id="inputNomeEvento" class="form-control" value=""  title="" placeholder="Nome">
				<br>
				<input type="text" name="sexo" value="" placeholder="Sexo" class="form-control">
				<br>
				<input type="text" name="grauAcademico" id="inputNomeEvento" class="form-control" placeholder="Grau Academico">
				<br>
				<input type="date" name="datanascimento" id="inputDatanascimento" class="form-control" >
				<br>
				<input type="number" name="telefone" id="inputNomeEvento" class="form-control" placeholder="Telefone">
				<br>
				<input type="hidden" name="idEvento" value="{{ $idEvento }}">

		</div>
	
		<button type="submit" class="btn btn-primary">Gravar</button>
	{{ Form::close() }}

@stop