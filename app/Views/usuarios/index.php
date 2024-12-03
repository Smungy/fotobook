<?php $this->extend("plantilla"); //plantilla que usaremos ?>

<?php $this->section("titulo"); ?> 
Nuevo Cliente
<?php $this->endSection("content"); ?>

<?php $this->section("content"); //aqui empieza el contenido ?>
<!-- View/usuarios/create -->

<section class="row">
    <div class="col-12 card">

        <div class="card-header">
            <a href="<?= base_url(); ?>/usuarios/create" 
            class= "btn btn-dark btn sm" >
            <i class="bi bi-person-plus"> Agregar Cliente</i> 
        </a>
        </div>

        <div class="card-body">


        <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th style="width: 40px">Telefono</th>
                                                <th style="width: 10px">UsuarioID</th>
                                                <th> Acciones </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php foreach ($usuarios as $usuario): //inicia foeach?>
                                            
                                                <tr class="align-middle">
                                                <td> <?= $usuario["id"];?> </td>
                                                <td> <?= $usuario["nombre"];?> </td>
                                                <td> <?= $usuario["correo"];?> </td>
                                                <td> <?= $usuario["telefono"];?> </td>
                                                <td> <?= $usuario["usuario_id"];?> </td> <!-- columna usuario id -->

                                                <td> 

                                                <a href="<?= base_url("/usuarios/$usuario[id]");?>"   
                                                   class="btn btn-warning btn-sm">
                                                <i class="bi bi-eye"> </i> </a>
        
                                                 <a href="<?= base_url( "/usuarios/$usuario[id]/edit" ); ?>" 
                                                 class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                                 </a> 
                                             
                                                 
                                                 <button
                                                    onClick="eliminar(<?= $usuario["id"]; ?>)"
                                                    class="btn btn-danger btn-sm">
                                                        <i class="bi bi-trash"></i>

                                                 </button>
                                                    

                                                </td>
                                                  

                                                
                                                
                                            </tr>
                                            <?php endforeach;//fin foreach ?>
                                        </tbody>
                                    </table>

        </div>
    </div>  
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script> //JAVASCRIPT

    function eliminar(id){

        Swal.fire({
  title: "Estas seguro?",
  text: "El registro se eliminara permanentemente!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Si, eliminalo para siempre!"
}).then((result) => {

  if (result.isConfirmed) {
    location.href = "<?= base_url(); ?>/usuarios/"+id+"/delete";

    // JS concatenar location.href =`/usuarios/{id}/delete`;
  }

});
    }
</script>    

<?php $this->endSection(); //aqui termina el contenido ?>