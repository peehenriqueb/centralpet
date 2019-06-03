<?php

	class I implements Exibicao
	{
		
		private $class;
		private $text;
				
   	
		public function get_class(){
			return($this->class);
		}

		public function get_value()
		{
			return($this->text);
		}

		public function __construct($parametros)
		{
			$this->class = $parametros["class"];
			$this->text = $parametros["text"];
		}	

		public function exibe()
		{
			echo "<div class='input-group-addon'>
					<i";
								
			if($this->class!=null){
				echo " class='$this->class' ";
			}
				echo">$this->text</i>
				
				";
		}
	}

?>