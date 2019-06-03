<?php

	class Tabela implements Exibicao{
		
		private $matriz;
		private $alterar;
		private $remover;
		private $tabela;
		
		public function __construct($matriz,$tabela,$remover, $alterar)
		{			
			$this->matriz 	= $matriz;
			$this->alterar 	= $alterar;
			$this->remover 	= $remover;
			$this->tabela 	= $tabela;
		}
		
		
		public function exibe()
		{
			
			echo " <div class='table-responsive'>
					<table class='dados-list table table-bordered table-striped table-hover'>";	
			
					try
					{
						foreach($this->matriz as $i=>$linha)
						{		
							
							if($i==0)
							{
								
								echo "
										<thead>
											<tr>";

								foreach($linha as $j=>$valor)
								{					
									if(!is_numeric($j))
									{
										echo "<th>$j</th>";
									}
								}
								
								if($this->remover!=null)
								{
									echo "<th>Ação</th>";
								}
								
								echo "</tr>
									</thead>
									<tbody id='tabela-list'>";
							}
						
							echo "<tr>";

							foreach($linha as $j=>$valor)
							{					
								if(!is_numeric($j))
								{
									echo "<td class='$j'>$valor</td>";

								
								}
							}
							if($this->remover!=null || $this->alterar!=null)
							{
								echo "<th>";
									if($this->alterar!=null)
									{
										echo "
												<div class = 'edit'>
													<i class='material-icons text-warning' data-toggle='tooltip' title='' data-original-title=
													'Editar'>create</i>
												</div>																	
										";										
									
										
										
								/*
										echo "<button class='alterar'>alterar</button>";*/
									}
									if($this->remover!=null)
									{
										echo "	
												
												<div class = 'remove'>
													<i class='material-icons text-danger' data-toggle='tooltip' title='' data-original-title='Excluir'><a href='remover.php?tabela=$this->tabela&id=$linha[0]'>delete</a></i>
												</div>
										
										
										
										";/*
										<i class="material-icons text-danger" data-toggle="tooltip" title="" data-original-title="Excluir">delete</i>
										echo " <a href='remover.php?tabela=$this->tabela&id=$linha[0]'>Remover</a>";*/
									}

								echo "</th>";	

								echo "</tr>";					
							}
							}
						}
						
						catch(Exception $e)
						{
							print_r($e);
						}
					
						echo "</tbody></table>";
			}
			
			
		}
		
		
	


?>