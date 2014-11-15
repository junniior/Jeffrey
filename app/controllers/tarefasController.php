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
		public function nova () {
			$this->view('tarefasNova');
		}
	}