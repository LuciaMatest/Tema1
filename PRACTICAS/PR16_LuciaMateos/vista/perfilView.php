<?
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<div class="pt-1">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-9 col-sm-10">
                <h1 class="text-center fw-bold pb-3">Mi perfil</h1>
                <div class="card">
                    <div class="card-body pt-4">
                        <form action="./index.php" method="post">
                            <!-- Usuario -->
                            <div class="mb-4 px-2">
                                <label for="idUser" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="user" id="idUser" value="<? echo $usuario->usuario ?>" readonly>
                            </div>
                            <? if ($_SESSION['accion'] == 'editar') { ?>
                                <!-- Contraseña -->
                                <div class="mb-4 px-2">
                                    <label for="idContraseña" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="contraseña" id="idContraseña" value="<? echo $usuario->clave ?>">
                                </div>
                            <?
                            }
                            ?>
                            <!-- Nombre -->
                            <div class="mb-4 px-2">
                                <label for="idNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="idNombre" value="<? echo $usuario->nombre ?>">
                            </div>
                            <!-- Email -->
                            <div class="mb-4 px-2">
                                <label for="idEmail" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="idEmail" value="<? echo $usuario->correo ?>">
                            </div>
                            <!-- Rol -->
                            <div class="mb-4 px-2">
                                <label for="idOpcion" class="form-label">Rol</label>
                                <select name="rol" id="idOpcion" class="w-100 d-inline-block bg-white" value="<? echo $usuario->rol ?>">
                                    <option value="0">Seleccione una opción</option>
                                    <option value="ADM01">Administrador</option>
                                    <option value="M0001">Moderador</option>
                                    <option value="U0001">Usuario normal</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <? if ($_SESSION['accion'] == 'editar') { ?>
                                    <input type="submit" class="botonG" value="Guardar" name="guardar">
                                    <?
                                }
                                    ?><?
                                        if ($_SESSION['accion'] == 'ver') { ?>

                                    <input type="submit" class="botonG" value="Editar" name="editar">
                                <?
                                        }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>