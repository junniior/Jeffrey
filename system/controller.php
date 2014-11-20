<?php
	class Controller {
		protected function view ( $nome ) {
			require_once('app/views/'.$nome.'.php');
			exit();
		}
	}