<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>FGV DRP</title>
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/search.css">
	<link rel="stylesheet" type="text/css" href="assets/css/pessoas.css">
	<link rel="stylesheet" type="text/css" href="assets/css/pessoas-info.css">
	<link rel="stylesheet" type="text/css" href="assets/css/eventos.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/organizacoes.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/remodal.css">
	<link rel="stylesheet" type="text/css" href="assets/css/remodal-default-theme.css">	
	<script src="assets/js/jquery-1.12.4.js"></script>
</head>
<body>
<div class="mobile-menu">
	<div class="btn-back">
		<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
	</div>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="&#xF002; Pesquisar por..." />
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Pesquisar</button>
      </span>
    </div><!-- /input-group -->	
	<ul class="menu-list">
		<li>Início<p>Bem-vindo a Rede</p></li>
		<li>Pessoas<p>Saiba mais sobre os membros</p></li>
		<li>Organizações<p>Conheça as organizações participantes</p></li>
		<li>Pesquisas e Projetos<p>Projetos bem sucedidos</p></li>
		<li>Eventos<p>O que acontece na FGV</p></li>
	</ul>
</div>
<div class="remodal-bg">
	<div class="remodal" data-remodal-id="login">
		<!-- <button data-remodal-action="close" class="remodal-close"></button> -->
		<div class="form-box">
			<form class="login-form">
				<div class="form-group login-form-title">
					<label>Entre com o Login</label>
				</div>
				<div class="form-group">
					<img src="assets/images/ico-login-user.png"><input class="form-control" name="email" type="email" placeholder="e-mail"  required/>						
				</div>
				<div class="form-group">
					<img src="assets/images/ico-login-pass.png"><input class="form-control" name="senha" type="password" id="senha" placeholder="senha" />
				</div>
				<div class="form-check">
					<label><input type="checkbox" class="form-check-input">Manter conectado</label>
					<a href="#">Esqueceu a senha?</a>
				</div>													
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Entrar</button>
				</div>
				<div class="form-group">
					<p>Não tem login? <a href="#">Cadastre-se</a></p>
				</div>
			</form>
		</div>	
	</div>
</div>
<div class="login-box">
	<div class="btn-login">
		<a data-remodal-target="login" href="#login"><img src="assets/images/btn-login.png"></a>
	</div>
	<div class="btn-search">
		<img src="assets/images/btn-search.png">
	</div>	
</div>
<div class="homepage">
	<div class="header">
		<div class="btn-menu">
			<img src="assets/images/ico-menu.png">
		</div>
		<div class="menu-logo">
			<img class="logo-mobile" src="assets/images/logo-mobile.png">
			<img class="logo-web" src="assets/images/logo-web.png">
		</div>
		<div class="btn-login">
			<a data-remodal-target="login" href="#login"><img src="assets/images/ico-user.png"></a>
		</div>
		<div class="menu-principal">
			<ul class="menu-list">
				<li>Início<p>Bem-vindo a Rede</p></li>
				<li>Pessoas<p>Saiba mais sobre os membros</p></li>
				<li>Organizações<p>Conheça as organizações participantes</p></li>
				<li>Pesquisas e Projetos<p>Projetos bem sucedidos</p></li>
				<li>Eventos<p>O que acontece na FGV</p></li>
			</ul>		
		</div>	
	</div>