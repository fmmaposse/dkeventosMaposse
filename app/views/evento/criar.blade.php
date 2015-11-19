@extends('template')

@section('content')

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		

		{{ Form::open(array('url'=>'evento/registarevento')) }}
			<legend>Form title</legend>
		
			<div class="form-group">
				<input type="text" name="titulo" id="inputNomeEvento" class="form-control" value=""  title="" placeholder="Titulo">

				<input type="text" name="descricao" value="" placeholder="Descricao" class="form-control">

				<input type="text" name="local" id="inputNomeEvento" class="form-control" placeholder="Local do Evento">


				<input type="date" name="data" id="inputNomeEvento" class="form-control">

				<input type="text" name="horaInicio" id="inputNomeEvento" class="form-control"placeholder="Hora de Termino do Evento">

				<input type="text" name="horaFim" id="inputNomeEvento" class="form-control" placeholder="Hora de Inicio do Evento">

				<select name="tipoEvento" id="input" class="form-control">
					@foreach($tipoEventos as $tipo)
						<option value="{{ $tipo->idtipo }}"> {{ $tipo->nome }} </option>
					@endforeach
				</select>

			</div>
			
			<button type="submit" class="btn btn-primary">Criar Evento</button>
		</form>
	</div>
</div>

@stop