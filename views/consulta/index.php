<?php require 'views/header.php' ?>
    <div id="main">
        <h1 class="color-2">Esto es una consulta</h1>

        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellído</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include_once 'models/alumno.php';
                foreach($this->alumnos as $row){
                    $alumno = new Alumno();
                    $alumno = $row;
            ?>
                <tr>
                    <td><?php echo $alumno->matricula?></td>
                    <td><?php echo $alumno->nombre?></td>
                    <td><?php echo $alumno->apellido?></td>
                    <td><a href="#">Editar</a></td>
                    <td><a href="#">Eliminar</a></td>
                </tr>
        <?php   } ?>
            </tbody>
        </table>
    </div>
<?php require 'views/footer.php' ?>
