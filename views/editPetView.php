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
                <h3 class="muted">Slot Mascotas</h3>
            </div>
            <div class="jumbotron">                
                <a class="btn btn-large btn-success" href="/slot">&lt;&lt; Volver atrás</a>
            </div>
            <hr/>
            <h3>Actualizar Mascota</h3>
            <form role="form" method="post" action="/slot/index.php?action=update">                                 
                <?php include 'views/formPetView.php'; ?>
                <button type="submit" class="btn btn-default">Guardar cambios</button>
            </form>
            <hr/>
            <?php include 'views/footer.php'; ?>
        </div> <!-- /container -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>