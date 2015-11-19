<?php


class ParticipanteController extends BaseController {
	
	private $idAlgo;

	public function getIndex(){
		$listaPartic = Paticipante::all();

		return View::make('participante.listar')->with('participantes', $listaPartic);
	}

	

	public function postAlterarestado(){
		DB::table('estadoevento')->insert(
		    array('nome' => Input::get('estado'), 'idEvento' => Input::get('idEvento'))
		);

		return Redirect::to('evento/index');
	}

	public function postCriar(){
		$evento = Input::get('idEvento');
		return View::make('participante.criar')->with('evento', $evento);
	}


	public function postEditar(){
		$id = Input::get('idParticipante');

		$partcic = Paticipante::find($id);

		return View::make('participante.edit')->with('partcic', $partcic);
	}


	public function postRegistar(){
		$partic = new Paticipante;

		$evento = Input::get('idevento');

		$partic->nome = Input::get('nome');
		$partic->apelido = Input::get('apelido') ;
		$partic->grauAcademico = Input::get('grauAcademico') ;
		$partic->empresa = Input::get('empresa') ;
		$partic->dataNascimento = Input::get('dataNascimento') ;
		$partic->sexo = Input::get('sexo') ;
		$partic->telefone = Input::get('telefone') ;
		$partic->email = Input::get('email') ;
		$partic->idEvento = $evento;

		$partic->save();

		$idAlgo = $evento;

		return Redirect::to('evento/index');
	}

	public function postApagar(){

		$evento = Paticipante::find(Input::get('idParticipante'));
		$evento->delete();

		return Redirect::to('evento/index');
	}

}