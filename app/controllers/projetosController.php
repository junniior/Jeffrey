<?php 
	class Projetos extends Controller {
		public function home () {
			$this->view('projetosHome');
		}
		public function novo () {
			$this->view('projetosNovo');
		}
		public function edit () {
			$this->view('projetosEdit');
		}

		//Link que executa INSERT no db
		public function add () {

			$projetoNome = $_POST['pjt_new_1'];
			$projetoData = $_POST['pjt_new_2'];

			$db = new Projetos_Model ();
			$db->insert('sis_pjt', array(
				"pjt_nme" => "$projetoNome",
				"pjt_data" => "$projetoData",
			));

			return header( "Location: ../projetos" );
		}

		public function listaCompleta () {
			$db = new Projetos_Model ();
			$a = ($db->read('sis_pjt'));
			foreach ($a as $key) {
				$a1 = $key['pjt_id'];
				$a2 = $key['pjt_nme'];
				$a3 = $key['pjt_data'];
			}

		}

	}