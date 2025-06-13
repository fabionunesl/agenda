<?php

session_start();

include_once("connection.php");
include_once("url.php");

// Exibe erros (só para desenvolvimento!)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$data = $_POST;

// MODIFICAÇÕES NO BANCO DE DADOS 
if (!empty($data)) {

    //Criar contato 
    // Verifica se o formulário enviado é de criação
    if ($data["type"] === "create") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        // Prepara a query de inserção
        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        } catch (PDOException $e) {
            //erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

    // Redirect Home
    header("Location: http://localhost/agenda/index.php ");


    // SELEÇÃO DE DADOS
} else {

    $id;

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    // Retorna os dados de um contato
    if (!empty($id)) {

        $query = "SELECT * FROM contacts WHERE id=:id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();
    } else {
        // Retorna todos os contatos
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}

// FECHAR CONEXÃO
$conn = null;
