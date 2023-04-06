<h1>Novo Usuário!</h1>
<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id;?>">


    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control">
    </div>

    
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" value="<?php echo $row->email; ?>"  name="email" class="form-control">
    </div>

    
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control" required >
    </div>

    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" value="<?php echo $row->data_nasc; ?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>