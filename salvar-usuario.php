<?php 
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            //podendo usar a função md5 na senha que protege do usuario de visualizar: md5()
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];
            
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) 
            VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn -> query($sql);
            if ($res==true){
                echo "<script>alert('Cadastrado com sucesso')</script>";
                echo "<script> location.href='?page=listar';</script>";
                //Alerta de cadastro e redirecinamento para pagina listar
            }

            else{
                echo "<script>alert('Não foi possivel cadastrar')</script>";
                echo "<script> location.href='?page=listar';</script>";
            }
            
            break;
            
            case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET
            nome='{$nome}',
            email='{$email}',
            senha='{$senha}',
            data_nasc='{$data_nasc}'
            WHERE 
                id=".$_REQUEST["id"];

            $res = $conn -> query($sql);
            if ($res==true){
                echo "<script>alert('Editado com sucesso')</script>";
                echo "<script> location.href='?page=listar';</script>";
                //Alerta de cadastro e redirecinamento para pagina listar
            }

            else{
                echo "<script>alert('Não foi possivel Editar')</script>";
                echo "<script> location.href='?page=listar';</script>";
            } 
            
            break;
            
            case 'excluir';

            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn -> query($sql);
            if ($res==true){
                echo "<script>alert('Excluido com sucesso')</script>";
                echo "<script> location.href='?page=listar';</script>";
                //Alerta de cadastro e redirecinamento para pagina listar
            }

            else{
                echo "<script>alert('Não foi possivel Excluir')</script>";
                echo "<script> location.href='?page=listar';</script>";
            } 
            break;
    }
?>