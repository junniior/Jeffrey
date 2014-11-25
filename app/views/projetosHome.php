<?php include('system/header.php'); ?>

<div style="margin-left:10px;">
<h2>Meus Projetos</h2>
<br />
<a href="projetos/novo">Adicionar um Projeto</a> <p></p>
<a href="projetos/edit">Editar um Projeto</a> <br>

<br><br>

	<div>
		<table class="table">
	      <thead>
	        <tr>
	          <th>Id do Projeto</th>
	          <th>Nome do Projeto</th>
	          <th>Data de Criação</th>
	        </tr>
	      </thead>
	      <tbody>
			<?php 
				$b = new Projetos ();
				$b->listaProjetos('todos');
			?>
	      </tbody>
	    </table>
    </div>

<br>

<p>Para voltar <a href="dashboard">clique aqui</a>.</p>    

</div>
