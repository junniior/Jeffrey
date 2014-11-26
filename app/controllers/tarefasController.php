<?php
	class Tarefas extends Controller {
		public function home () {
			$this->view('tarefasHome');
		}
		public function pendentes () {
			$this->view('tarefasPendentes');
		}
		public function concluidas () {
			$this->view('tarefasConcluidas');
		}

		//Chama o formulário de cadastro de nova tarefa
		public function nova () {
			$this->view('tarefasNova');			
		}

		//Link que executa INSERT no db
		public function add () {

			$tarefaNome = $_POST['trf_new_1'];
			$tarefaDesc = $_POST['trf_new_2'];

			$db = new Tarefas_Model();
			$db->insert('sis_trf', array(
				"trf_nme" => "$tarefaNome",
				"trf_dsc" => "$tarefaDesc",
			));

			return header( "Location: ../tarefas" );
		}

		public function listaTarefas() {
			$db = new Tarefas_Model();
			$read = ($db->read('sis_trf'));
			return $read;
		}


	}