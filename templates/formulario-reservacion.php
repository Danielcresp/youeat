<form class="reserva-contacto" method="post">
        <h2>Realiza tu reservación</h2>
            <div class="campo">
                        <input type="text" name="nombre" placeholder="nombre" require>
                    </div>
                    <div class="campo">
                        <input type="datetime-local" name="fecha" placeholder="fecha" require>
                    </div>
                    <div class="campo">
                        <input type="correo" name="correo" placeholder="correo" require>
                    </div>
                    <div class="campo">
                        <input type="tel" name="telefono" placeholder="telefono" require>
                    </div>
                    <div class="campo">
                        <textarea name="mensaje" placeholder="mensaje" require></textarea>
                    </div>
                    <input type="submit" value="Enviar" name="Enviar" class="button rojo">
                    <input type="hidden" value="1" name="oculto">
</form>