<?php 

class Participante2Controller extends BaseController
{
	
	public function getIndex(){

		$eventos = Evento::all();

		return View::make('participante2')->with('eventos', $eventos);
	}

	public function getListarparticipantes(){

		$part2 = Particioante2::all();
		return View::make('participante.outrosParticipantes')->with('participante2', $part2);
	}

	public function postInscricao(){
		$idEvento = Input::get('idEvento');

		return View::make('inscricao')->with('idEvento', $idEvento);
	}

	public function postRegisto(){

		$part2 = new Particioante2;

		$part2->nome = Input::get('nome');
		$part2->sexo = Input::get('sexo');
		$part2->datanascimento = Input::get('datanascimento');
		$part2->grauacademico = Input::get('grauAcademico');
		$part2->telefone = Input::get('telefone');
		$part2->idEvento = Input::get('idEvento');

		$part2->save();

		return Redirect::to('participante2/index');
	}

	public function postFiltrados(){
		$sexo = Input::get('sexo');
		$idade1 = Input::get('idade');

		$idade2 = 2015 - $idade1;

		$grauAcademico = Input::get('grauacademico');

		$participante2 = DB::table('participante2')
						->where('sexo', $sexo)
						->where('datanascimento', 'LIKE', $idade2.'%')
						->where('grauacademico', $grauAcademico)
						->get();


		return View::make('participante.outrosParticipantes')->with('participante2', $participante2);
	}

}