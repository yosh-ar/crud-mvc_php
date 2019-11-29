<?php 
Class FormularioController {
    
    // guardar usuario
    static public function store (){
        
        if(isset($_POST["nombre"])){
            return "ok";
        }
    }
}