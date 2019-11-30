<?php 

if(isset($_SESSION["validar"])){

    if($_SESSION["validar"]!="ok"){
        echo '<script>

        window.location = "index.php?pagina=registro";
    </script>';
        return;
    }

}else{
    echo '<script>

    window.location = "index.php?pagina=registro";
    </script>';
    return;
}

$usuarios = FormularioController::index();

// print_r($usuarios);

?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($usuarios as $users): ?>
        <tr>
        
                <td><?php  echo $users["nombre"]  ?></td>
                <td><?php  echo $users["email"]  ?></td>
                <td><?php  echo $users["fecha"]  ?></td>
              
                <td>
                <div class="btn-group">
                    <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </div>
            </td>
      
        </tr>
        <?php endforeach ?>
    </tbody>
</table>