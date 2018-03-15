<?php 
require_once(__DIR__."/../../core/ViewManager.php");
 $view = ViewManager::getInstance();
?><!DOCTYPE html>
<html>
  <head>
    <title><?= $view->getVariable("title", "no title") ?></title>
    <link rel="stylesheet" type="text/css" href="/abp/css/style.css"  />
    <meta charset="utf-8">
  </head>
  <body> 
    <header>
      <h1>PRUEBA SIGA</h1>
    </header>
     <main>
      <div id="flash">
	    <?= $view->popFlash() ?>
      </div>      
      <?= $view->getFragment(ViewManager::DEFAULT_FRAGMENT) ?>
      <nav> <a href="index.php">volver</a></nav>
    </main>
    <footer>
      Cristóbal Vázquez 15/03/2018
    </footer>
  </body>
</html>