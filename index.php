<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JRNET Comunicação</title>
	<link rel="icon" href="img/fav.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<a class="hide-on-large-only" href="https://api.whatsapp.com/send?l=pt&amp;phone=5511943972578"><img src="https://i.imgur.com/ryESuZ5.png" style="height:50px; position:fixed; bottom: 25px; right: 25px; z-index:99999;" data-selector="img"></a>
</head>
<body>

<div class="bar_top">
<div class="bar_topd">
	<ul class="menu_barrax">
		<li><a href="#cadastro" title="Cadastre-se">Cadastre-se</a></li>
		<li><a href="https://usuario.gerencianet.com.br/segunda-via" title="2° via Boleto"> 2° Via Boleto</a>
			<li><a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511943972578" title="contato">&nbsp&nbsp(11) 94397-2578</a></li>
		</li>
	</ul>
	<div class="transit">
		<a href="http://www.facebook.com.br" target="_blank"><img src="http://4.bp.blogspot.com/-4di8wyO8reU/T9ieCNjxkrI/AAAAAAAAD34/n9mdGQl36go/s1600/facebook.png" title="Facebook"/></a>
		<a href="http://www.twitter.com" target="_blank"><img src="http://1.bp.blogspot.com/-V6AUHhYK_tw/T9ieDhXQM3I/AAAAAAAAD4Y/2SX5sC04x2c/s1600/twitter.png" title="Twitter"/></a>
		<a href="http://www.youtube.com.br" target="_blank"><img src="http://3.bp.blogspot.com/-IKeAb8OgXfU/T9ieEKLi8JI/AAAAAAAAD4g/8FnePnFsnwk/s1600/youtube.png" title="YouTube"/></a>
	</div>
</div>
</div>

<header>
	
	<ul class="sidenav" id="mobile-nav">
				<li><a class="hide-menu sidenav-close" href="index.php">Home</a></li>
				<li><a class="hide-menu sidenav-close" href="empresa.php">Empresa</a></li>
				<li><a class="hide-menu sidenav-close" href="planos.php">Planos</a></li>
				<li><a class="hide-menu sidenav-close" href="contato.php">Contato</a></li>
				<li><a class="hide-menu sidenav-close" href="download.php">Downloads</a></li>
			</ul>

	<div class="">
	<nav class="navbar z-depth-0">
		<div class="nav-wrapper container ">
			<h1 class="logo_text">JRNET Comunicação</h1>
			<a href="index.php"><img class="logo_img" src="img/logo.png" alt="JRNET"></a>
			<a href="#" data-target="mobile-nav" class="sidenav-trigger right hide-on-large-only"><i class="material-icons">menu</i></a>

			<ul class="right hide-on-med-and-down">
				<li><a href="index.php">Home</a></li>
				<li><a href="empresa.php">Empresa</a></li>
				<li><a href="planos.php">Planos</a></li>
				<li><a href="contato.php">Contato</a></li>
				<li><a href="download.php">Downloads</a></li>
			</ul>

			
		</div>
	</nav>
	</div>

</header>
<section class="home bloco">
	<div class="row container banner">
		<div class="col s12 center">
		<h2 class="white-text light">A melhor internet funcional da região</h2>
		<p class="white-text light">Um novo conceito em internet para jogos e filmes online para quem busca qualidade de navegação, Venha fazer parte!!</p>
		<div class="row botoes">
			<a href="empresa.php" class="btn btn-large blu-logo">Sobre Nós </a>
			<a href="contato.php" class="btn btn-large white black-text"> Contato </a>

	</div>
	</div>
</div>
	
</section>
		
<section class="cadastro bloco scrollspy" id=cadastro>

		<div class="col s12 center">
			<h2 class="light"> <img src="img/cadastrar.png"> </h2>
		</div>

	<div class="row container">		
		<div class="col s12 m12 l12">
			<div class="formulario white center">
				<p> * Após preencher a ficha entre em contato para prosseguir com a instalação. </p>
				
				<form action="mail.php" method="post">

					<div class="input-field">
						<input type="text" name="name" id="name">
						<label for="name">Nome</label>
					</div>

					<div class="input-field">
						<input type="email" name="email" id="email">
						<label for="email">Email</label>
					</div>

					<div class="input-field">
						<input type="text" name="cpf" id="cpf">
						<label for="cpf">CPF</label>
					</div>

					<div class="input-field">
						<input type="text" name="rg" id="rg">
						<label for="rg">RG</label>
					</div>

					

					<div class="input-field">
						<input type="text" name="celular" id="celular">
						<label for="celular">Celular</label>
					</div>

					<div class="input-field">
						<input type="text" name="endereco" id="endereco">
						<label for="endereco">Endereço</label>
					</div>

					<div class="input-field">
						<input type="text" name="cep" id="cep">
						<label for="cep">CEP</label>
					</div>

					<div class="input-field">
    					<select type="text" name="plano" id="plano">
      							<option value="" disabled selected>Plano</option>
        						<option value="10 Megas por R$69,90">10 Megas por R$69,90</option>
        						<option value="15 Megas por R$79,90">15 Megas por R$79,90  </option>
        						<option value="20 Megas por R$89,90">20 Megas por R$89,90 </option>
        						<option value="30 Megas por R$99,90">30 Megas por R$99,90  </option>
        						<option value="Acima de 30MBS">Acima de 30MBS</option>	
    					</select>
  					</div>

  					<div class="input-field">
    					<select type="text" name="tipo" id="tipo">
      							<option value="" disabled selected>Tipo</option>
        						<option value="fibra">Fibra</option>
        							
    					</select>
  					</div>

					<div class="input-field">
						<textarea name="message" id="message" class="materialize-textarea"></textarea>
						<label for="message">Mensagem (Opcional)</label>
					</div>

					<button class="btn blue-logo" type="submit">Enviar</button>
					
				</form>
			</div>
		</div>

	</div>
</section>



<footer class="rodape white-text light grey darken-3">
		<div class="container">
			<div class="row">

				<div class="col s12 l4 center">
					<h5>Sobre Nós</h5>
					<ul>
						
						<li><a href="empresa.php" class="grey-text text-lighten-3">Área de Cobertura</a></li>
						<li><a href="empresa.php" class="grey-text text-lighten-3">Sobre Nós</a></li>
						<li><a href="#cadastro" class="grey-text text-lighten-3">Cadastre-se</a></li>
					</ul>
				</div>

				<div class="col s12 l4 center">
					<h5>Serviços</h5>
					<ul>
						<li><a href="https://www.speedtest.net/pt" class="grey-text text-lighten-3">Teste sua Velocidade</a></li>
						<li><a href="https://usuario.gerencianet.com.br/segunda-via" class="grey-text text-lighten-3">2° Via Boleto</a></li>
						<li><a href="download.php" class="grey-text text-lighten-3">Downloads</a></li>
						
						
					</ul>
				</div>

				<div class="col s12 l4 hide-on-med-and-down">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.027468158923!2d-46.69510768449482!3d-23.74639987433785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4f393fe12555%3A0xd30ad0a5fc8e2f7c!2sR.+Justiniano+da+Rocha%2C+187+-+Parque+Grajau%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1563991537861!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				
			</div>			
		</div>
</footer>

<footer class="rodape1 white-text light grey darken-4">
	
	<div class="copy grey darken-4">
					<div class="lop container center-align">
						<img src="img/log.png" class="logg">
						<br> JRNET Comunicação &copy; 2019 - Todos os Direitos Reservados
					</div>
			</div>
</footer>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

 <script> 

 	$(".modal").modal();
  
  	$(document).ready(function(){
    $('.materialboxed').materialbox();
 	}); 
 	$(document).ready(function(){
    $('.sidenav').sidenav();

    $(".scrollspy").scrollspy({
    	scrollOffset: 0
    });
  });
 	$(document).ready(function(){
    $('select').formSelect();
  });
 </script>

</body>
</html>