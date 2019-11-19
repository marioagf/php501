<?php

class TexteException
{
    public function mensagem(string $msg){
        if (empty($msg)){
            throw new Exception("Mensagem Obrigatoria", 500);            
        }
        return $msg;
    }
}

$obj = new TexteException;
try{
    echo $obj->mensagem();
}
catch(Exception $e){
    echo "<p>Deu erro:</p>";
}
catch(ArgumentCountError $e){
    //echo "<pre>";
    //var_dump($e);
    //echo "</pre>";
    echo "<p>Deu erro de argumentos</p>";
}
finally{
    echo "<p>Fim da execucao</p>";
}
// Fatal error: Uncaught Exception: Mensagem Obrigatoria in /var/www/html/501/aula05/excecoes.php:7 
// Stack trace: #0 /var/www/html/501/aula05/excecoes.php(14): TexteException->mensagem('') #1 {main} 
// thrown in /var/www/html/501/aula05/excecoes.php on line 7