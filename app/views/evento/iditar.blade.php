@extends('template')

@section('content')

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		

		{{ Form::open(array('url'=>'evento/saveeditar')) }}
			<legend>Form title</legend>
		
			<div class="form-group">
				<input value="{{ $esteEvento->titulo }}" type="text" name="titulo" id="inputNomeEvento" class="form-control" title="" placeholder="Titulo">

				<input value="{{ $esteEvento->descricao }}"  type="text" name="descricao" placeholder="Descricao" class="form-control">

				<input  value="{{ $esteEvento->local }}"  type="text" name="local" id="inputNomeEvento" class="form-control" placeholder="Local do Evento">


				<input  value="{{ $esteEvento->data }}"  type="date" name="data" id="inputNomeEvento" class="form-control">

				<input  value="{{ $esteEvento->horaInicio }}"  type="text" name="horaInicio" id="inputNomeEvento" class="form-control"placeholder="Hora de Termino do Evento">

				<input  value="{{ $esteEvento->horaFim }}"  type="text" name="horaFim" id="inputNomeEvento" class="form-control" placeholder="Hora de Inicio do Evento">

				<select name="tipoEvento" id="input" class="form-control">
					@foreach($tipoEventos as $tipo)
						<option value="{{ $tipo->idtipo }}"> {{ $tipo->nome }} </option>
					@endforeach
				</select>

				<input type="hidden" name="id" value="{{ $esteEvento->id }}">

			</div>
			
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>
	</div>
</div>

@stop