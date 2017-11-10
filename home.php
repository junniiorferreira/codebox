<?php include('header.php') ?>
	<div class="banner">
		<div class="banner-box">
			<div class="banner-form">
				<form class="login-form">
					<div class="form-group login-form-title">
						<label>O que está procurando?</label>
					</div>
					<div class="form-group">
						<input class="form-control" name="search" type="text" placeholder="" />						
					</div>											
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Pesquisar</button>
					</div>
				</form>
				<div class="banner-info">
					<p class="info-title">Bem-vindo a Rede de Pesquisa e Conhecimento Aplicado</p>
					<p class="info-content">Este site é uma ferramenta para descoberta de informações relacionadas às pesquisas realizadas na FGV.</p>
					<p class="info-content">Ele permite colaboração entre pesquisadores de diferentes disciplinas promovendo uma visão integrada dos centros, unidades, pesquisadores e suas áreas de interesse.</p>
				</div>		
			</div>
		</div>
		<img src="assets/images/banner-home-web.png" id="banner-bg-mobile" src="banner-home-mobile.png" alt="" data-focus-left="0.40" data-focus-top="0.01" data-focus-right="0.59" data-focus-bottom="0.99"/>
		<img src="assets/images/banner-home-web.png" id="banner-bg-web" alt="" data-focus-left="0.00" data-focus-top="1.00" data-focus-right="1.00" data-focus-bottom="0.01"/>
	</div> <!-- end .banner -->
	<div class="pesquisas">
		<div class="pesquisas-box">
			<p class="pesquisa-title">Pesquisas</p>
			<ul class="pesquisas-list">
				<li class="pesquisa">
					<p class="pesquisa-name">Testes e dissertações</p>
					<p class="pesquisa-value">7,4 mil</p>
				</li>
				<li class="pesquisa">
					<p class="pesquisa-name">Artigos</p>
					<p class="pesquisa-value">129</p>					
				</li>
				<li class="pesquisa">
					<p class="pesquisa-name">Artigos acadêmicos</p>
					<p class="pesquisa-value">586</p>					
				</li>
			</ul>
			<button type="submit" class="btn btn-primary">Ver mais</button>
		</div>
	</div> <!-- end .pesquisas -->
	<div class="docentes">
		<div class="docentes-box">
			<p class="docente-title">Corpo Docente</p>
			<ul class="docentes-list">
				<li class="docente">
					<img src="assets/images/docente-bruna.png">
					<span class="docente-name">Bruna Romano Pretzel</span>
				</li>
				<li class="docente">
					<img src="assets/images/docente-adriane.png">
					<span class="docente-name">Adriane Sanctis de Brito</span>
				</li>
				<li class="docente">
					<img src="assets/images/docente-fernando.png">
					<span class="docente-name">Fernando Lattman-Weltman</span>
				</li>
			</ul>
			<button type="submit" class="btn btn-primary">Ver mais</button>
		</div>
	</div> <!-- end .docentes -->
	<div class="nucleos">
		<div class="nucleos-box">
			<p class="nucleo-title">Centro de Pesquisa</p>
			<ul class="nucleos-list">
				<li class="nucleo">
					<a href="#"><span class="nucleo-name">Núcleo de direito, Economia e Governança</span></a>
				</li>
				<li class="nucleo">
					<a href="#"><span class="nucleo-name">Grupo de Estudos das Relações entre o Estado e Empresa Privada</span></a>
				</li>
				<li class="nucleo">
					<a href="#"><span class="nucleo-name">Núcleo de Direito Privado e Politicas Públicas</span></a>
				</li>
			</ul>
			<button type="submit" class="btn btn-primary">Ver mais</button>
		</div>
	</div> <!-- end .nucleos -->
	<div class="estatisticas">
		<div class="estatisticas-box">
			<p class="estatistica-title">Estatisticas</p>
			<ul class="estatisticas-list">
				<li class="estatistica">
					<img src="assets/images/ico-pessoas-mobile.png">
					<p class="estatistica-name">Pessoas</p>
					<p class="estatistica-value">872</p>
				</li>
				<li class="estatistica">
					<img src="assets/images/ico-org-mobile.png">
					<p class="estatistica-name">Organizações</p>
					<p class="estatistica-value">123</p>
				</li>
				<li class="estatistica">
					<img src="assets/images/ico-pesquisa-mobile.png">
					<p class="estatistica-name">Centros de Pesquisa</p>
					<p class="estatistica-value">88</p>
				</li>
				<li class="estatistica">
					<img src="assets/images/ico-blog-mobile.png">
					<p class="estatistica-name">Publicações</p>
					<p class="estatistica-value">60.327</p>
				</li>
				<li class="estatistica">
					<img src="assets/images/ico-evento-mobile.png">
					<p class="estatistica-name">Eventos</p>
					<p class="estatistica-value">6.210</p>
				</li>
				<li class="estatistica">
					<img src="assets/images/ico-projeto-mobile.png">
					<p class="estatistica-name">Projetos</p>
					<p class="estatistica-value">44</p>
				</li>				
			</ul>
		</div>
	</div> <!-- end .estatisticas -->			
</div> <!-- end .homepage -->
<?php include('footer.php') ?>