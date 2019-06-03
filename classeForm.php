<?php
		
	include("classeInputOpcoes.php");
	include("classeSelect.php");
	include("classeButton.php");
	include("classeI.php");
	include("classeTextArea.php");

	class Form implements Exibicao{
		
		private $action;
		private $method;
		private $enctype;		
		public $entradas;
		
		public function __construct($parametros){
			
			$this->action = $parametros["action"];
			$this->method = $parametros["method"];
			if(isset($parametros["enctype"])){
				$this->enctype = $parametros["enctype"];
			}
		}

		public function add_button($parametros){
			$this->entradas[] = new Button($parametros);
		}
		
		public function add_input($parametros){
			$this->entradas[] = new Input($parametros);
		}
		
		public function add_i($parametros)
		{
			$this->entradas[] = new I($parametros);
		}

		public function add_TextArea($parametros)
		{
			$this->entradas[] = new TextArea($parametros);
		}

		public function add_inputOpcoes($parametros){
			$this->entradas[] = new InputOpcoes($parametros);
		}		
		
		public function add_select($name,$options,$valor){
			$this->entradas[] = new Select($name,$options,$valor);
		}
		
		
		public function exibe(){
			
			echo "<form method='$this->method' action='$this->action' ";
			
			if($this->enctype!=null)
			{
				echo"enctype = '$this->enctype'>";
			}
			else{
					">";
				
			}		
			
			foreach($this->entradas as $i=>$e){				
				echo "<div class='form-group'>";
				$e->exibe();
				echo "</div>";
			}
				
			echo "<footer>
					<div class='float-right'>
						<button type='submit'
						class='btn btn-primary'>Entrar</button>
					</div>
				</footer>
				</form>";
		}
		
		
	}
	/*echo	"
			<button class='btn btn-default'>
			Buscar <span class='glyphicon glyphicon-search'></span>
			</button> ";*/
?>