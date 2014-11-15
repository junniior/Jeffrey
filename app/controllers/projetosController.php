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
	}