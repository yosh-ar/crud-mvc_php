<?php


Class FormularioController {
    
    // guardar usuario
    static public function store (){
        
        if(isset($_POST["nombre"])){
            $tabla ="users";

            $datos = array("nombre" => $_POST['nombre'], 
                            "email" => $_POST['email'],
                            "password" => $_POST["password"]);

            $res = ModelFormulario::modelUsers($tabla, $datos);

            return $res;
        }
    }
    //traer los datos 
    static public function index(){
        $tabla = "users";

        $res = ModelFormulario::ListarUsuarios($tabla, null , null);

        return $res;
    }

    public function login(){
        $tabla = "users";
        $item = "email";
        if(isset ($_POST["correo"])){
            $valor = $_POST['correo'];
            $res = ModelFormulario::ListarUsuarios($tabla, $item , $valor);
            // print_r($res);
            if($res["email"]==$_POST["correo"] && $res["password"]== $_POST["password"]){
    
                $_SESSION["validar"] = "ok";
                echo '<script>
                if ( window.history.replaceState ) {
    
                    window.history.replaceState( null, null, window.location.href );
    
                }
                window.location = "index.php?pagina=inicio";
                </script>';
    
            }else{
                echo '<script>
    
                if ( window.history.replaceState ) {
    
                    window.history.replaceState( null, null, window.location.href );
    
                }
            </script>';
            echo '<div class="alert alert-danger">Datos incorrectos</div>';
            }
        }else{
            $valor = null;
        }
    }
}