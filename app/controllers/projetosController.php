<?php 
	class Projetos extends Controller {
		public function home() {
			$this->view('projetosHome');
		}
		public function novo() {
			$this->view('projetosNovo');
		}
		public function edit() {
			$this->view('projetosEdit');
		}

		//Link que executa INSERT no db
		public function add() {

			$projetoNome = $_POST['pjt_new_1'];
			$projetoData = $_POST['pjt_new_2'];

			$db = new Projetos_Model();
			$db->insert('sis_pjt', array(
				"pjt_nme" => "$projetoNome",
				"pjt_data" => "$projetoData",
			));

			return header( "Location: ../projetos" );
		}

		public function listaProjetos() {
			$db = new Projetos_Model();
			$read = ($db->read('sis_pjt'));
			return $read;
		}
	}