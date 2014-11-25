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

		public function listaProjetos( $string ) {
			$db = new Projetos_Model();
			$read = ($db->read('sis_pjt'));
				
			switch ($string) {
				case 'todos':
					foreach ($read as $key) {
						echo 
						  '<tr>
							<td>'.$key['pjt_id'].'</td>
							<td>'.$key['pjt_nme'].'</td>
							<td>'.$key['pjt_data'].'</td>
						  </tr>'
						;
					}
					break;
				case 'finalizados':
					//echo '<td>'.$key['pjt_nme'].'</td>';
					break;
				case 'abertos':
					//echo '<td>'.$key['pjt_data'].'</td>';
					break;
				default:
					//echo '';
					break;
			}
		}
	}