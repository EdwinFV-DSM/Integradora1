<?php
class Consultas_DB {
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';
   
   
    function aMemberFunc() {
        echo 'Hola';
    }
}
$Consultas_DB = new Consultas_DB;
?>