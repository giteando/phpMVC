<?php
require_once(__DIR__."/../core/ViewManager.php");
require_once(__DIR__."/../controller/BaseController.php");

class BusquedaController extends BaseController {
	protected $cliente;		
  public function __construct() {    
    parent::__construct();
    $this->view->setLayout("siga"); 
    $this->clienteMapper = new ClienteMapper();
	
  }
 public function busquedaDni() {
	 if (isset($_POST["dni"])){		 		 
			if ($this->ClienteMapper->isValidClient($_POST["dni"])) {	/**/	
			echo "no llego aqui";
			$this->view->redirect("incidencias", "listado");	
			}else{
					$errors = array();
					$errors["general"] = "Dni no corresponde con ningún cliente titular";
					$this->view->setVariable("errors", $errors);
		}	
		
	} 
	 $this->view->render("busqueda", "busquedaDni");
 }
}
