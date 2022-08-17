<h1>Editar Membros</h1>
<?php
    $sql = "SELECT * FROM Membros WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->Nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="CPF" value="<?php print $row->CPF; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->Data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->Email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" value="<?php print $row->Telefone; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Logradouro</label>
        <input type="text" name="logradouro" value="<?php print $row->Logradouro; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" value="<?php print $row->Cidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estado</label>
        <input type="text" name="estado" value="<?php print $row->Estado; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Igreja onde é membro</label>
        <input type="text" name="igreja" value="<?php print $row->Igreja; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>