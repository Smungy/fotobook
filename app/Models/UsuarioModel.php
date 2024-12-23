<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {
    
    protected $table = "clientes"; //nombre de la tabla
    protected $primaryKey = "id"; //primary key

    //columnas que quiero que se puedan editar
    protected $allowedFields = ["nombre", "correo", "password", "telefono", "usuario_id"];

    //llena los campos created_at y update_at
    protected $useTimestaps = true; 
}