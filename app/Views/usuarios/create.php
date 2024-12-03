<?php $this->extend("plantilla"); //plantilla que usaremos ?>

<?php $this->section("titulo"); ?> 
Nuevo Cliente
<?php $this->endSection("content"); ?>

<?php $this->section("content"); //aqui empieza el contenido ?>
<!-- View/usuarios/create -->

<section class="row">
    <div class="col-12 card">
        
        <div class="card-header">
            <h3 class="card-title">Ingrese sus Datos</h3>
        </div>
        
        <div class="card-body">
         
        <form action="/usuarios/store" method="POST" name="usuarioForm";>
        
        
        
    <div class ="mb-3">
        <label class="form-label" for="nombre">Nombre</label>
        <input class="form-control" type="text" name="nombre" required>           
    </div>

    <div class ="mb-3">
        <label class="form-label" for="telefono">Telefono</label>
        <input class="form-control" type="text" name="telefono" required>           
    </div>

    <div class ="mb-3">
        <label class="form-label" for="correo">Correo</label>
        <input class="form-control" type="email" name="correo" required>           
    </div>

    <div class ="mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="password" required>           
    </div>

    <!-- label para el usuario id -->
    <div class ="mb-3">
        <label class="form-label" for="usuario_id">Usuario ID</label>
        <input class="form-control" type="number" name="usuario_id" required>           
    </div>

    

    <button class="btn btn-success" type="submit"> Crear Usuario </button>
    </form>

        </div>
        </div>  
        </section>
<?php $this->endSection(); //aqui termina el contenido ?>