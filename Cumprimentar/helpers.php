<?php
 function saudacao(): string
 {
    echo $hora = date('H');

    if ($hora >= 0 AND $hora <= 5) {
        $saudacao = 'Boa Madrugada';
    }
    elseif ($hora >= 6 AND $hora <= 12) {
      $saudacao = 'Bom Dia';
    }
    elseif ($hora >= 13 AND $hora <=18) {
      $saudacao = 'Boa Tarde';
    }
    else {
        $saudacao = 'Boa Noite';
    }
      return $saudacao;
 }
 ?>

