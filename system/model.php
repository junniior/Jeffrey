<?php
	class Model {
		protected $db;//Variavel protegida. Protected você usa em classes extendidas, Private só na própria classe
		public function __construct() {
			$this->db = new PDO('mysql:host=localhost;dbname=sistema','root','');
		}

		//Inicio do CRUD:

		public function insert ( $tabela, Array $dados ) { //Método Insert

			//O foreach vai receber o array $dados e vai dividí-lo em duas variáveis: $indice e $value
			foreach ($dados as $indice => $value) {
				$campos[] = $indice; //O array $campos[] vai receber os dados da variável $indice
				$valores[] = $value; //O array $valores[] vai receber os dados da variável $value
			}

			//Tratando as informações para inserir na variável $sql.
			$campos = implode(", ", $campos);
			$valores = "'".implode("','", $valores)."'";

			//E finalmente a persistência...
			$this->db->query("INSERT INTO `{$tabela}` ({$campos}) VALUES ({$valores}); ");
			
		}

		public function read ( $tabela ) {
			$q = $this->db->query("SELECT * FROM `{$tabela}`");
			$q->setFetchMode(PDO::FETCH_ASSOC);
			return $q->fetchAll();
		}

		public function update () {}
         
        // Deleta um Arquivo da Tabela
		public function delete ( $id, $table ) {
			$delete = $this->db->prepare("delete from `{$table}` where id = ?");
			return $delete->execute(array($id));
		}

	}

