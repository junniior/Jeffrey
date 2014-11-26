<?php 
	include('system/header.php');
	$b = new Projetos();
?>

<div style="margin-left:10px;">
<h2>Meus Projetos</h2>
<br />
<a href="projetos/novo">Adicionar um Projeto</a> <p></p>
<a href="projetos/edit">Editar um Projeto</a> <br>

<br><br>

<div style="display:inline-flex">
	<table class="table">
		<thead>
			<tr>
				<th>Id do Projeto</th>
				<th>Nome do Projeto</th>
				<th>Data de Criação</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($b->listaProjetos() as $key) { ?>
			<tr class="active">
				<td><?php print $key['pjt_id'] ?></td>
				<td><?php print $key['pjt_nme'] ?></td>
				<td><?php print $key['pjt_data'] ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

<br>

<p>Para voltar <a href="dashboard">clique aqui</a>.</p>    

</div>
