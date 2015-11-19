<?php


class EventoController extends BaseController
{
	
	public function getIndex(){
		$tipo = DB::table('tipoevento')->get();
		$eventos = Evento::all();

		//return View::make('evento.listar', compact('eventos', 'estado', 'tipo'))->with('eventos', $eventos);
		return View::make('evento.listar', compact('eventos', 'tipo'));
	}


	public function postEditar(){
		$tipoEventos = DB::table('tipoevento')->get();
		$id = Input::get('idEvento');
		$esteEvento = Evento::find($id);

		
		return View::make('evento.iditar', compact('esteEvento', 'tipoEventos'));
	}

	public function getCriar(){

		$tipoEvento = DB::table('tipoevento')->get();

		return View::make('evento.criar')->with('tipoEventos', $tipoEvento);
	}

	public function postSaveeditar(){

		$evento = Evento::find(Input::get('id'));

		$evento->titulo = Input::get('titulo');
		$evento->descricao = Input::get('descricao');
		$evento->local = Input::get('local');
		$evento->data = Input::get('data');
		$evento->horaInicio = Input::get('horaInicio');
		$evento->horaFim = Input::get('horaFim');
		$evento->idTipoEvento = Input::get('tipoEvento');

		$evento->update();


		return Redirect::to('evento/index');
	}


	public function postRegistarevento(){
		$evento = new Evento;

		$evento->titulo = Input::get('titulo');
		$evento->descricao = Input::get('descricao');
		$evento->local = Input::get('local');
		$evento->data = Input::get('data');
		$evento->horaInicio = Input::get('horaInicio');
		$evento->horaFim = Input::get('horaFim');
		$evento->idTipoEvento = Input::get('tipoEvento');

		$evento->save();

		$mensagem = 'Criado um novo Evento';
		return Redirect::to('evento/index');
	}

	public function postApagar(){

		$evento = Evento::find(Input::get('idEvento'));
		$evento->delete();
		return Redirect::to('evento/index');
	}

}