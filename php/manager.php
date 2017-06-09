<?php
  include_once('connectdb.php');
  function chargerClasse($classe){
		require 'classes/'.lcfirst($classe).'.class.php';
	}
	spl_autoload_register('chargerClasse');

  switch (htmlspecialchars($_POST['option'])) {
    case 'value':
      # code...
      break;

    default:
      # code...
      break;
  }
?>
