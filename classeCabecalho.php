<?php

	include("classeUsuario.php");

	include("interfaceExibicao.php");

	class Cabecalho implements Exibicao{
	
		private $charset;
		private $title;
		private $links;
		private $scripts;
		
		public function __construct($parametros){
			
			$this->charset = $parametros["charset"];
			$this->title = $parametros["title"];
			if(isset($parametros["links"])){
				$this->links = $parametros["links"];
			}
			if(isset($parametros["scripts"])){
				$this->scripts = $parametros["scripts"];
			}
		}
		
		public function exibe(){
			session_start();

			

			echo "<!DOCTYPE html>
					<html>
					<head>
						 <meta name='viewport' content='width=device-width, initial-scale=1' />
						<meta charset='$this->charset' />
						 <title>$this->title</title>";
			if($this->links!=null){
					foreach($this->links as $i=>$l){
						echo "<link rel='stylesheet' href='$l' />";
					}
			}			 
			if($this->scripts!=null)
			{
					foreach($this->scripts as $i=>$s){
						echo "<script type='text/javascript' src='$s'></script>";



					}
			}
			echo "
					</head>	
						<body>";
		

		if(isset($_SESSION["usuario"]))
			{
				
			
				echo "
					<nav class='navbar navbar-light navbar-expand-md fixed-top' style='background-color:#9ACD32'>

						<!-- Logotipo -->

						<a href='index.php' class='navbar-brand logotipo'>

							<img src='img/logo.jpg' alt='Logotipo' />

						</a>

						<!-- Botão Menu -->
						   
						 <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#menu'>
						  
							 <span class='navbar-toggler-icon'></span>
							 
						</button>   
					";
			}
		}
	
		public function exibe_menu(){

			
			$nome = $_SESSION["usuario"]->get_nome();
			
					echo"   
						<!--Menu-->

						<div class='collapse navbar-collapse' id='menu'>

							<ul class='navbar-nav'>

								<li class = 'navbar-item'><a class = 'nav-link' href='listar_animal.php'>Animal</a></li>										
								<li class = 'navbar-item'><a class = 'nav-link' href='listar_funcionario.php'>Funcionário</a></li>
								<li class = 'navbar-item'><a class = 'nav-link' href='listar_adotante.php'>Adotante</a></li>
								<li class = 'navbar-item'><a class = 'nav-link' href='listar_adocao.php'>Adoção</a></li>
								<li class = 'navbar-item'><a class = 'nav-link' href='listar_vacinacao.php'>Vacinação</a></li>
								<li class = 'navbar-item'><a class = 'nav-link' href='form_contato.php'>Contato</a></li>
								<li class = 'navbar-item'></li>	
								
							</ul>

			
							<div class ='btn-group'>
                    
								<button type = 'button' class = 'btn btn-secondary dropdown-toggle' data-toggle = 'dropdown' aria-haspopup = 'true' aria-expanded = 'false' id = 'conta' style='background-color:#8B795E' style= 'border-color:#8B795E'>

									<i class='material-icons'>pets</i>
									 
									  
                   			 	</button>

								<div class = 'dropdown-menu dropdown-menu-top-right'>

									<button class = 'dropdown-item' type = 'button'>";
											echo $nome;

								echo "
									</button>
				
									<button class = 'dropdown-item' type = 'button'>
											
										Alterar Perfil
									
									</button>
				
									<button class = 'dropdown-item' type = button id = 'btnLogout'>
									<a class = 'nav-link' href='logout.php'>Sair</a>
										

									</button>
			
								</div>

                			</div>

						</div>
				
					
   					</nav>";
						
						
					if(isset($_SESSION["usuario"])){	
					
						
						echo "<a href='logout.php'>Sair</a>";
					}
					else{
						echo "<a href='form_login.php'>Login</a>";
					}
				 echo "
				 </div>
				 <hr />";
		}
	
	}

		
	
	$parametros["charset"]	="utf-8";
	$parametros["title"]	="Central Pet";
	$parametros["links"][] 	= "estiloTable.css";
	$parametros["links"][] 	= "css/bootstrap.min.css";
	$parametros["links"][] 	= "css/centralPet.css";
	$parametros["links"][] 	= "https://fonts.googleapis.com/icon?family=Material+Icons";
	$parametros["scripts"][] 	= "js/jquery-3.3.1.min.js";
	$parametros["scripts"][] 	= "js/bootstrap.bundle.min.js";

	
	
	$c = new Cabecalho($parametros);
	$c->exibe();	
	
?>


	