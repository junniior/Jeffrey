<?php 
	include('system/header.php');
	$b = new Tarefas();
?>

<h2>O que você deseja fazer?</h2>

<a href="tarefas/nova">Adicionar uma tarefa</a> <br>
<a href="tarefas/pendentes">Visualizar tarefas pendentes</a> <br>
<a href="tarefas/concluidas">Visualizar tarefas concluídas</a> <br>


<br>

<div style="display:inline-flex">
	<table class="table">
		<thead>
			<tr>
				<th>Id da Tarefa</th>
				<th>Nome da Tarefa</th>
				<th>Descrição da Tarefa</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($b->listaTarefas() as $key) { ?>
			<tr class="active">
				<td><?php print $key['trf_id'] ?></td>
				<td><?php print $key['trf_nme'] ?></td>
				<td><?php print $key['trf_dsc'] ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

<br>


<p>Para voltar <a href="dashboard">clique aqui</a>.</p>