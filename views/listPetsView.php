<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include 'views/head.php'; ?>
    <body>
        <div class="container-narrow">
            <div class="masthead">
                <h3 class="muted">Slots Pets</h3>
            </div>
            <div class="jumbotron">                
                <a class="btn btn-large btn-success" href="/slot/index.php?action=add">Añadir Mascota</a>
                <?php
                if (!$pets) {
                ?>
                    <h4>El Listado de mascota esta vacio</h4>
                <?php
                } else {
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Especie</th>
                                <th>sex</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Edad</th>
                                <th>Fecha de Muerte</th>
                                <th>Fecha de Alta</th>
                                <th>Observación</th>                         
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pets as $pet){
                            ?>
                            <tr <?php
                                     if ($pet->getDeadhDate()) {
                                            echo "style=background-color:#DD0000";
                                    }
                                ?>
                                >
                                    <td><?php echo $pet->getName(); ?></td>
                                    <td><?php echo $pet->getNameSpecie(); ?></td>
                                    <td><?php echo $pet->getSexName(); ?></td>
                                    <td><?php echo $pet->getBirthDate(); ?></td>
                                    <td><?php echo $pet->getAge(); ?></td>
                                    <td><?php echo $pet->getDeadhDate(); ?> </td>
                                    <td><?php echo $pet->getCreationDate(); ?></td>
                                    <td><?php echo $pet->getObservation(); ?></td>
                                    <td>
                                        <a href="/slot/index.php?action=edit&id_pet=<?php echo urlencode($pet->getId()); ?>" class="btn">Editar</a>
                                    </td>       
                                </tr>
                                <?php }
                            ?>
                        </tbody>
                    </table>
                    <?php
                }
                ?>
            </div>
            <hr>
            <?php include 'views/footer.php'; ?>
        </div> <!-- /container -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
