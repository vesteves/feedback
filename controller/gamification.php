<?php

include($_SERVER['DOCUMENT_ROOT'] . "/feedback/controller/validar.php");
include($_SERVER['DOCUMENT_ROOT'] . "/feedback/model/ado.php");
include($_SERVER['DOCUMENT_ROOT'] . "/feedback/controller/functions.php");

$nota = $pergunta = $julgado = 0;
$julgador = $_SESSION["usuario_id"];


if (isset($_REQUEST["Rian1"])) {
    $pergunta = 1;
    $julgado = 5;
    $nota = $_REQUEST["Rian1"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Rian2"])) {
    $pergunta = 2;
    $julgado = 5;
    $nota = $_REQUEST["Rian2"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Rian3"])) {
    $pergunta = 3;
    $julgado = 5;
    $nota = $_REQUEST["Rian3"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Rian4"])) {
    $pergunta = 4;
    $julgado = 5;
    $nota = $_REQUEST["Rian4"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Deividi1"])) {
    $pergunta = 1;
    $julgado = 4;
    $nota = $_REQUEST["Deividi1"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Deividi2"])) {
    $pergunta = 2;
    $julgado = 4;
    $nota = $_REQUEST["Deividi2"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Deividi3"])) {
    $pergunta = 3;
    $julgado = 4;
    $nota = $_REQUEST["Deividi3"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Deividi4"])) {
    $pergunta = 4;
    $julgado = 4;
    $nota = $_REQUEST["Deividi4"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Thiago1"])) {
    $pergunta = 1;
    $julgado = 3;
    $nota = $_REQUEST["Thiago1"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Thiago2"])) {
    $pergunta = 2;
    $julgado = 3;
    $nota = $_REQUEST["Thiago2"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Thiago3"])) {
    $pergunta = 3;
    $julgado = 3;
    $nota = $_REQUEST["Thiago3"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Thiago4"])) {
    $pergunta = 4;
    $julgado = 3;
    $nota = $_REQUEST["Thiago4"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Pedro1"])) {
    $pergunta = 1;
    $julgado = 2;
    $nota = $_REQUEST["Pedro1"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Pedro2"])) {
    $pergunta = 2;
    $julgado = 2;
    $nota = $_REQUEST["Pedro2"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Pedro3"])) {
    $pergunta = 3;
    $julgado = 2;
    $nota = $_REQUEST["Pedro3"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Pedro4"])) {
    $pergunta = 4;
    $julgado = 2;
    $nota = $_REQUEST["Pedro4"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Vitor1"])) {
    $pergunta = 1;
    $julgado = 1;
    $nota = $_REQUEST["Vitor1"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Vitor2"])) {
    $pergunta = 2;
    $julgado = 1;
    $nota = $_REQUEST["Vitor2"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Vitor3"])) {
    $pergunta = 3;
    $julgado = 1;
    $nota = $_REQUEST["Vitor3"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}
if (isset($_REQUEST["Vitor4"])) {
    $pergunta = 4;
    $julgado = 1;
    $nota = $_REQUEST["Vitor4"];
    $sql = "insert into gamification values(null, {$pergunta}, {$julgador}, {$julgado}, {$nota}, now())";
    $db = $PDO->prepare($sql);
    $insert = $db->execute();
}

$msg = base64_encode("Obrigado pela contribuição.");
header("location:../acao.php?m=" . $msg);
