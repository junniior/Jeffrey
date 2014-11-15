<?php
	class Controller {
		protected function view ( $nome ) {
			return require_once('app/views/'.$nome.'.php');
		}
	}