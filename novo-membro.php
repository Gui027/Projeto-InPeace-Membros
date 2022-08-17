<h1>Novo Membro</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="CPF" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>Logradouro</label>
        <input type="text" name="logradouro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estado</label>
        <input type="text" name="estado" class="form-control">
    </div>
    <div class="mb-3">
        <label>Igreja onde é membro</label>
        <input type="text" name="igreja" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>