<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

<h1>Lista de Usuários</h1>

<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered table-striped'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th colspan='2'>Ações</th>";
        print "</tr>";
        
        while ($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->nome."</td>";
            echo "<td>".$row->email."</td>";
            echo "<td>".$row->data_nasc."</td>";
            echo "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\"
                class='bi bi-pencil btn btn-success'> Editar</button>

                
                <button onclick=\"if(confirm('Deseja Excluir thefato?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"
                 
                class='bi bi-trash3-fill btn btn-danger'> Excluir</button>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        print "<p class='alert alert-danger'>Sem Lista de Usuários</p>";
    }


?>