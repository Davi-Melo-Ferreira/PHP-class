<?php
    include ("verificar.php");
    
    if (isset($_POST['number']) && !empty($_POST['number'])) {
        $number = (float) $_POST['number'];
        $verificacao = verificar($number);
        
        if ($verificacao == 1){
            echo "<h1>Números Primos Antecessores de $number:</h1>";
            for ($i = 0; $i < $number + 1; $i++) {
                $iteracao = verificar($i);
            }
        } else{
            echo "O Número Não é Primo";
        }  
}
?>