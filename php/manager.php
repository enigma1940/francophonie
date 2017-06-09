<?php
  include_once('connectdb.php');
  function chargerClasse($classe){
		require 'classes/'.$classe.'.class.php';
	}
	spl_autoload_register('chargerClasse') ;
  switch (variable) {
    case 'value':
      # code...
      break;

    default:
      # code...
      break;
  }
?>
