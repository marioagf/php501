<?php

foreach(new DirectoryIterator('/home') as $diretorio){
    echo "->".$diretorio."<br>";
    foreach(new DirectoryIterator('/'.$diretorio) as $diretorio2){
        echo "--->".$diretorio2."<br>";
    }
}