<!---views/usuario/create-->

<?php $this->extend("plantilla");?>
<?php $this->section("titulo");?>
Informacion Usuario
<?php $this->endSection("content");?>


<?php $this->section("content");?>


<section class="row">
<div class="col-12 card"></div>
<div class=" card-header">
    <h3 class="card-title"> <?= $usuario["nombre"]; ?></h3>
</div>

<div class="card-body">

<ul>

<li> <b> Nombre: </b>  <?= $usuario["nombre"]; ?></li>
<li> <b> Telefono: </b>  <?= $usuario["telefono"]; ?></li>
<li> <b> Correo: </b>  <?= $usuario["correo"]; ?></li>

</ul> 
       
    </div>

 </section>

<?php 
$this->endSection("");
?>