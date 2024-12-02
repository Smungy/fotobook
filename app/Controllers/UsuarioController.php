<?php

namespace App\Controllers;

    use App\Models\UsuarioModel;

    class UsuarioController extends BaseController{
    
        protected $usuarioModel;
        
        function __construct(){
            $this->usuarioModel = new UsuarioModel();
        }

    //lista usuarios (VIEW)
    public function index(){
        //crear, buscar, editar, eliminar usuarios
        
        $usuarios = $this->usuarioModel->findAll();
        
        $data= array(
            "usuarios" => $usuarios
        );
        return view("usuarios/index",$data);
        
    }

    //informacion de un usuario (VIEW)    
    public function show($id){
        $usuario = $this->usuarioModel->find($id);
        
        $data = array("usuario" => $usuario);

        return view ("usuarios/show", $data);
    }

    //formulario para crear usuario (VIEW)
    public function create(){

        return view("usuarios/create");
    }
    
    //codigo para gurdar usuario en la DB (redirect -> index)
    public function store(){
 
        $data = array(
            "nombre" => $this->request->getPost("nombre"),
            "telefono" => $this->request->getPost("telefono"),
            "correo" => $this->request->getPost("correo"),
            "password" => $this->request->getPost("password"),
        );
            
        $this->usuarioModel->save($data);
            
        return redirect()->to("/usuarios");
    }
    
    //formulario para editar usuario (VIEW)
    public function edit($id){
        //buscamos el usuario a editar      
        $usuario = $this->usuarioModel->find($id);
        
        //creamos el data que se le psasara al view
        $data = array(
            "usuario" =>$usuario
        );   

        //retornamos la vista edit que esta dentro de la carpeta usuarios
        return view("usuarios/edit", $data);

    }

    //codigo para actualizar usuario (redirect -> view)
    public function update($id){
        
        $data = array(
            "nombre" => $this->request->getPost("nombre"),
            "telefono" => $this->request->getPost("telefono"),
            "correo" => $this->request->getPost("correo"),
            "password" => $this->request->getPost("password"),
        );
                
        $this->usuarioModel->update($id,$data); 
        
        return redirect()->to("/usuarios/$id");
    }

    //codigo para eliminar un usuario de la base de DB (redirect -> index)
    public function delete($id){
        
        $this->usuarioModel->delete($id);
        return redirect()->to("/usuarios");

    }

    public function login(){
        return view ("usuarios/login");
    }
    public function validarLogin(){

        $correo = $this->request->getPOST("correo");
        $password = $this->request->getPOST("password");

        $usuario = $this->usuarioModel
        ->where("correo",$correo)
        ->where("password",$password)
        ->first();

        if(!$usuario){
            
            return redirect()->to(base_url()."/login");

        }else{

            session()->set($usuario);

        }

        return redirect()->to(base_url()."/usuarios");

    }


    public function logout(){}


}