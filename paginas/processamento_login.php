<?php
 include "processamento_banco.php";
 $usuario  = isset($_POST['txt-usuario']) ? $_POST['txt-usuario'] : null;
 $senha = isset($_POST['txt-senha']) ? $_POST['txt-senha'] : null;

 $sql_login = "SELECT PESSOA_USUARIO FROM PESSOA WHERE PESSOA_USUARIO = '".escape_bd($usuario)."' AND PESSOA_SENHA = '".md5(escape_bd($senha))."'";

 $result = mysqli_query(conecta_bd(), $sql_login);
 
 while($tupla = mysqli_fetch_row($result)){
     if($tupla[0] == $usuario){
         echo "success";
     }else{
         echo "erro";
     }
 }
 
 //Veirifica se existem resultados
 /*if(mysqli_num_rows($result) > 0){
     echo "success";
 }else{
     echo "error";
 }*/
/*if($usuario == "guilherme" && $senha == "guilherme"){
    echo "success";
}else{
    echo "erro";
}*/
?>