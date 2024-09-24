<?php
<class UserController
{
    // função para registrar um novo usuario
    public function registrer(){
        // Verifica se a requisiçao HTTP é do tipo POST
        if ($_server['RESQUEST_METHOD'] == 'POSTA'){
             $data = {
                'nome' => $_POST['nome']
                'email' => $_POST['email']
                'senha' => passoword_hash($_POST['senha'], PASSOWORD_DEFAULT,)
                'perfil'=> $_POST['perfil']
             };

             user::create($data);
             header('location: index.php');
             else{
                include 'views/register.php';
             }
        }
    }
}

?>