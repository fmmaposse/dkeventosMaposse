@extends('template')

@section('content')



{{Form::open(array('url'=>'participante/saveeditar'))}}
			<legend>Form title</legend>
		
			<div class="form-group">
				<input type="text" name="nome" id="inputNomeEvento" class="form-control" value=""  title="" placeholder="Nome">

				<input type="text" name="apelido" value="" placeholder="Apelido" class="form-control">

				<input type="text" name="grauAcademico" id="inputNomeEvento" class="form-control" placeholder="Grau Academico">


				<input type="text" name="empresa" id="inputNomeEvento" class="form-control" placeholder="Empresa">

				<input type="data" name="dataNascimento" id="inputNomeEvento" class="form-control"placeholder="Data nascimento">

				<input type="number" name="telefone" id="inputNomeEvento" class="form-control" placeholder="Telefone">

				<input type="text" name="email" id="inputNomeEvento" class="form-control" placeholder="Sexo">

				<input type="email" name="sexo" id="inputNomeEvento" class="form-control" placeholder="Email">

				<input type="hidden" name="idevento" id="inputNomeEvento" class="form-control" placeholder="" value="{{ $evento }}" >

				

			</div>
			
			<button type="submit" class="btn btn-primary">Adicionar Participante</button>
		</form>

@stop