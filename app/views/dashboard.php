<?php 
	include('system/header.php');
?>

<!--Menu no topo-->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="dashboard">Junniior Ferreira</a>
	  </div>
	  <div class="navbar-collapse collapse">
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="tarefas">Tarefas</a></li>
	      <li><a href="projetos">Projetos</a></li>
	      <li><a href="historico">Hist&oacute;rico</a></li>
	      <li><a href="ranking">Ranking</a></li>
	    </ul>
	    <form class="navbar-form navbar-right">
	      <input type="text" class="form-control" placeholder="Pesquisar...">
	    </form>
	  </div>
	</div>
</div>


<div class="container">

	<div class="col-xs-12 col-sm-9">

		<!-- Box de destaque(boas vindas) -->
		<?php
		//Verifica o usuário que está conectado.
		$usuario = 'Carlos';
		//Verifica a hora que o usuário se conectou.
		$hora = date('H:i:s');
			if($hora > '00:00:00' && $hora < '11:59:59'){
				$boasVindas = 'Bom dia';
			}else if($hora > '12:00:00' && $hora < '17:59:59'){
				$boasVindas = 'Boa tarde';
			}else{
				$boasVindas = 'Boa noite';
			}
		?>
		<div class="jumbotron">
		    <h1>Oi <?php echo $usuario; ?>, <?php echo $boasVindas; ?>.</h1>
		    <p>Hoje estamos produzindo muito bem.<!--Soma das tarefas-->50 chamados foram adicionados a sua fila, <!--Soma das tarefas encerradas-->10 chamados foram finalizados e <!--Soma das tarefas pendentes-->40 ainda est&atilde;o em aberto.</p>
		</div>

		<!-- Útilmas tarefas adicionadas -->
		<div class="row">
			<h2>Tarefas Adicionadas Recentemente:</h2>
		    <div class="col-6 col-sm-6 col-lg-4 box-green">
		      <h2>
				<?php 
					$title = 'Futura';
					$filtro = substr($title,0,15);
					if(strlen($title) >= 15){
						echo $filtro;
						echo "...";
					}else{
						echo $filtro;
					}
				?>      	
		      </h2>
		      <p>
				<?php 
					$content = 'Editar posicionamento do bloco de formulários "Login e Registrar-se" nos formulários de cadastro com resoluções abaixo de 1500px de largura. Depois comitar para qa e executar um deploy em local.';
					$filtro = substr($content,0,150);
					if(strlen($content) >= 150){
						echo $filtro;
						echo "...";
					}else{
						echo $filtro;
					}
				?>
			  </p>
		      <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
		    </div><!--/span-->
		</div>

		<!-- Útilmas tarefas encerradas -->
		<div class="row">
			<h2>Tarefas Conclu&iacute;das Recentemente:</h2>
		    <div class="col-6 col-sm-6 col-lg-4 box-red">
		      <h2>
				<?php 
					$title = 'OpenMed';
					$filtro = substr($title,0,15);
					if(strlen($title) >= 15){
						echo $filtro;
						echo "...";
					}else{
						echo $filtro;
					}
				?> 
		      </h2>
		      <p>
				<?php 
					$content = 'Editar posicionamento do bloco de formulários "Login e Registrar-se" nos formulários de cadastro com resoluções abaixo de 1500px de largura. Depois comitar para qa e executar um deploy em local.';
					$filtro = substr($content,0,150);
					if(strlen($content) >= 150){
						echo $filtro;
						echo "...";
					}else{
						echo $filtro;
					}
				?>      	
		      </p>
		      <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
		    </div><!--/span-->

		    <div class="col-6 col-sm-6 col-lg-4 box-red">
		      <h2>
				<?php 
					$title = 'Praticar';
					$filtro = substr($title,0,15);
					if(strlen($title) >= 15){
						echo $filtro;
						echo "...";
					}else{
						echo $filtro;
					}
				?> 
		      </h2>
		      <p>
				<?php 
					$content = 'Editar posicionamento do bloco de formulários "Login e Registrar-se" nos formulários de cadastro com resoluções abaixo de 1500px de largura. Depois comitar para qa e executar um deploy em local.';
					$filtro = substr($content,0,150);
					if(strlen($content) >= 150){
						echo $filtro;
						echo "...";
					}else{
						echo $filtro;
					}
				?>      	
		      </p>
		      <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
		    </div><!--/span-->

		</div>

	</div>

	<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
		<div class="list-group">
			<a class="list-group-item active">Menu Principal:</a>
			<a href="tarefas" class="list-group-item">Gerenciar tar&eacute;fas</a>
			<a href="projetos" class="list-group-item">Gerenciar projetos</a>
		</div>
	</div>

</div>