<?php require 'views/header.php' ?>
    <div id="main">
        <h1 class="color-2">Seccion de Consulta</h1>
        <div id="respuesta" class="center"></div>
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellído</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <!-- <th>Eliminar</th> -->
                </tr>
            </thead>
            <tbody id="tbody-alumnos">
            <?php 
                include_once 'models/alumno.php';
                foreach($this->alumnos as $row){
                    $alumno = new Alumno();
                    $alumno = $row;
            ?>
                <tr id="fila-<?php echo $alumno->matricula?>" >
                    <td><?php echo $alumno->matricula?></td>
                    <td><?php echo $alumno->nombre?></td>
                    <td><?php echo $alumno->apellido?></td>
                    <td><a href="<?php echo constant('URL'). 'consulta/verAlumno/'. $alumno->matricula; ?>">Editar</a></td>
                    <td><button class="bEliminar" data-matricula="<?php echo $alumno->matricula ?>" >eliminar</button></td>
                    <!-- <td><a href="<?php echo constant('URL'). 'consulta/eliminarAlumno/'. $alumno->matricula; ?>">Eliminar</a></td> -->
                </tr>
        <?php   } ?>
            </tbody>
        </table>
    </div>
<?php require 'views/footer.php' ?>

<script src="<?php echo constant('URL') ?>public/js/main.js"></script>

