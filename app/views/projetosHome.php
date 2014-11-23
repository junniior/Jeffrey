<?php include('system/header.php');

	$b = new Projetos ();
	$b->listaCompleta();

?>

<div style="margin-left:10px;">
<h2>O que você deseja fazer?</h2>

<a href="projetos/novo">Adicionar um Projeto</a> <br>
<a href="projetos/edit">Editar um Projeto</a> <br>

<br>

<p>Para voltar <a href="dashboard">clique aqui</a>.</p>

<br><br>

<div style="width:33%; border:2px solid #c3c3c3;">

<table class="table">
      <thead>
        <tr>
          <th>Id do Projeto</th>
          <th>Nome do Projeto</th>
          <th>Data de Criação</th>
        </tr>
      </thead>
      <tbody>
        <tr class="active">
          <td><?php  ?></td>
          <td><?php  ?></td>
          <td><?php  ?></td>
        </tr>
      </tbody>
    </table>

    </div>
 </div>
