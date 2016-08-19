<?php
 $usuario  = isset($_POST['txt-usuario']) ? $_POST['txt-usuario'] : null;
 $senha = isset($_POST['txt-senha']) ? $_POST['txt-senha'] : null;

if($usuario == "guilherme" && $senha == "guilherme"){
    echo "success";
}else{
    echo "erro";
}
?>