<?php $this->extend("plantilla"); //plantilla que usaremos ?>

<?php $this->section("titulo"); ?> 
Editar Cliente
<?php $this->endSection("content"); ?>

<?php $this->section("content"); //aqui empieza el contenido ?>
<!-- View/usuarios/create -->

<section class="row">
    <div class="col-12 card">

        <div class="card-header">
            <h3 class="card-title">Datos usuario</h3>
        </div>

        <div class="card-body">
        

<form action="/usuarios/<?= $usuario["id"]; ?>/update" method="POST" name="usuarioForm";>

    <div class ="mb-3">
        <label class="form-label" for="nombre">Nombre</label>
        <input class="form-control" type="text" name="nombre" value="<?= $usuario["nombre"]; ?>" required>           
    </div>

    <div class ="mb-3">
        <label class="form-label" for="telefono">Telefono</label>
        <input class="form-control" type="text" name="telefono" value="<?= $usuario["telefono"]; ?>" required>           
    </div>

    <div class ="mb-3">
        <label class="form-label" for="correo">Correo</label>
        <input class="form-control" type="email" name="correo" value="<?= $usuario["correo"]; ?>" readonly>           
    </div>

    <div class ="mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="password" value="<?= $usuario["password"]; ?>" required>           
    </div>

    <button class="btn btn-success" type="submit"> Editar </button>

</form>
      </div>
    </div>  
</section>



<?php $this->endSection(); //aqui termina el contenido ?>
