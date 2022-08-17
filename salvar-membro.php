<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $data_nasc = $_POST["data_nasc"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $logradouro = $_POST["logradouro"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $igreja = $_POST["igreja"];

            $sql = "INSERT INTO Membros (Nome, CPF, Data_nasc, Email, Telefone, Logradouro, Cidade, Estado, Igreja) VALUES ('{$nome}', '{$cpf}','{$data_nasc}','{$email}', '{$telefone}', '{$logradouro}', '{$cidade}', '{$estado}', '{$igreja}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;

        case 'editar':
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $data_nasc = $_POST["data_nasc"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $logradouro = $_POST["logradouro"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $igreja = $_POST["igreja"];

            $sql = "UPDATE Membros SET Nome='{$nome}', CPF='{$cpf}', Data_nasc='{$data_nasc}', Email='{$email}', Telefone='{$telefone}', Logradouro='{$logradouro}', Cidade='{$cidade}', Estado='{$estado}', Igreja='{$igreja}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM Membros WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;
    }