<?php

	class Modal implements Exibicao{
		
        private $idModal;
		private $dataTarget;
		private $nomeBotao;
		private $idDiv;
		private $titleModal;
		
		
        public function __construct($idModal, $dataTarget, $nomeBotao, $idDiv, $titleModal)
		{
			$this->idModal = $idModal;
			$this->dataTarget = $dataTarget;
			$this->nomeBotao= $nomeBotao;
			$this->idDiv = $idDiv;
			$this->titleModal = $titleModal;
		}
    
        
    public function exibe()
		{	
            
			echo  '
	
					
					<div class="col-sm-6" id = "'.$this->idModal.'">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$this->dataTarget.'">'.$this->nomeBotao.'</button>
				   </div>
                <div class="modal" tabindex="-1" role="dialog" id="'.$this->idDiv.'">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">'.$this->titleModal.'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';


        
	}
	
	public function fecha_modal()
	{

		echo'</div>
		</div>
		</div>';
	}

    }
?>