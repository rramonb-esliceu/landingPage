<?php
    include 'header.php';
    if(isset($_GET['status'])){
        $status=$_GET['status'];
        $msg=$_GET['msg'];
        ?>

        <div class="contenido <?php echo $status; ?> mensaje">
            <p><?php echo $msg ?></p>
        </div>

        <?php
    }
?>

<main>
    <section>
        <h2>Contacto</h2>
        <form class="formulario" action="create_contact.php" method="POST">
            <fieldset>
                <legend>Contáctame enviando tus datos</legend>
                <div class="contenedor-campos">
                    <div class="campo">
                        <div>
                            <label for="">Nombre:</label>
                            <input class="input-text" type="text" name="nombre" placeholder="Tu Nombre" id="">
                        </div>
                        </div>
                    <div class="campo">
                        <div>
                            <label for="">Teléfono</label>
                            <input class="input-text" type="tel" name="telefono" id="" placeholder="Tú Teléfono">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Correo</label>
                            <input class="input-text" type="email" name="correo" id="" placeholder="Tu Correo">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Mensaje</label>
                            <textarea class="input-text" name="mensaje" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div>
                        <input class="boton" type="submit" value="Enviar">
                    </div>
                </div>
            </fieldset>        
        </form>
    </section>
</main>
<?php
    include 'footer.php';
?>