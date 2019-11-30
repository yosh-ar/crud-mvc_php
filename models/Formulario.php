<?php 


require_once "conexion.php";

Class ModelFormulario {

    // guardar usuarios
    static public function modelUsers ($tabla, $datos){
        $stmt = ConexionDB::conexion()->prepare("INSERT INTO $tabla (nombre, email, password) 
                                                VALUES (:nombre, :email, :password)");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(ConexionDB::conexion()->errorInfo());
        }

        $stmt->close();
        $stmt = null;
    }   
    //listar usuarios
    static public function ListarUsuarios($tabla, $item, $valor){

        if($valor == null && $item == null){
            $stmt = ConexionDB::conexion()->prepare("SELECT * FROM $tabla ORDER BY id DESC");
            $stmt->execute();
             return $stmt->fetchAll();
        }else{
            $stmt = ConexionDB::conexion()->prepare("SELECT * FROM $tabla where $item = :$item");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
             return $stmt->fetch();
        }

        // return $stmt;

        $stmt->close();
        $stmt = null;
    }

    static public function modelUsersUpdate ($tabla, $datos){
        $stmt = ConexionDB::conexion()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, password = :password
                                                WHERE id = :id");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(ConexionDB::conexion()->errorInfo());
        }

        $stmt->close();
        $stmt = null;
    } 

}