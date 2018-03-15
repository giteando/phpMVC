	<?php 
 //file: view/busqueda/busquedaDni.php
 
 require_once(__DIR__."/../../core/ViewManager.php");
 $view = ViewManager::getInstance();
 $view->setVariable("title", "Siga");
 $errors = $view->getVariable("errors");
?>

<h1>Búsqueda de incidencias por DNI cliente</h1>
<?= isset($errors["general"])?$errors["general"]:"" ?>

<form action="index.php?controller=busqueda&amp;action=busquedaDni" method="POST">
DNI<input type="text" name="dni">
<input type="submit" value="BUSCA">
</form>
