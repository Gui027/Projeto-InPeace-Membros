<h1>Listar Membros</h1>
<?php
    $sql = "SELECT * FROM Membros";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>CPF</th>";
            print "<th>Data Nascimento</th>";
            print "<th>Email</th>";
            print "<th>Telefone</th>";
            print "<th>Logradouro</th>";
            print "<th>Cidade</th>";
            print "<th>Estado</th>";
            print "<th>Igreja onde é membro</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->Nome."</td>";
            print "<td>".$row->CPF."</td>";
            print "<td>".$row->Data_nasc."</td>";
            print "<td>".$row->Email."</td>";
            print "<td>".$row->Telefone."</td>";
            print "<td>".$row->Logradouro."</td>";
            print "<td>".$row->Cidade."</td>";
            print "<td>".$row->Estado."</td>";
            print "<td>".$row->Igreja."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>