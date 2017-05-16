﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      Tabuada gerada!
    </title>
    <link rel='stylesheet'
          type='text/css'
          href='estiloSaida.css'>
    <?php    
      //Obtendo valores do formulário dinamicamente
      foreach ($_POST as $chave => $valor)
        $$chave = $valor;    
    ?>
  </head>
  <body>
    <?php    
    
      for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<div class='tabuada'>" .
             "<table border='1'>".
             "  <caption>Tabuada do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Operandos</th>" .
             "    <th>Soma</th>" .
             "    <th>Subtração</th>" .
             "    <th>Multiplicação</th>" .
             "    <th>Divisão</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
      
          echo  
               "<tr>" . 
               "  <td>" . $i . " e " . $j . "</td>" .
               "  <td>" . ($i + $j) . "</td>" .
               "  <td>" . ($i - $j) . "</td>" .
               "  <td>" . ($i * $j) . "</td>" ;
               
            if ($j <= 0) {
             echo "  <td>" . "N/A" . "</td>" ;
              
            } else {
              echo "  <td>" . number_format(($number = $i / $j), 2, ',', ''). "</td>";
            }   

            echo
               "</tr>";          
        }
      }  
    ?>
  </body>
</html>