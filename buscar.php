<?php
require_once('conexao.php');
//verificando se o valor passado é diferente de vazio
if (isset($_POST['nome'])) {

    $output = "";
    $nome = $_POST['nome'];
    $query = "SELECT * FROM clientes WHERE nome LIKE '%$nome%' ORDER BY nome ASC LIMIT 5";
    $result = $con->query($query);

    $output = '<ul id="autocomplete" class="list-unstyled">';		

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $output .= '<li id="auto">'.ucwords($row['nome']).'</li>';
        }
    }
  else{
          $output .= '<li id="auto"> Cliente não encontrado</li>';
    }

    $output .= '</ul>';
echo $output; 
}