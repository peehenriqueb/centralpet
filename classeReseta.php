<?php

	class Reseta implements Exibicao{
		
		private $logo;
		private $form;		
		
		public function __construct($parametros, Form $f){			
			$this->logo = $parametros["logo"];
			$this->form = $f;
		}

		
		public function exibe(){
			
			echo "<div class='login-form col-xs-10 offset-xs-1 
					col-sm-6 offset-sm-3 
					col-md-4 offset-md-4'>
					<header>
						<h1><img class='img-fluid' src='img/logo.jpg' /></h1>
					</header>";
						
			$this->form->exibe();
		
			
		}
		
		
	}


?>