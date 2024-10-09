<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        $urlAtual = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        echo $urlAtual;
        ?>
    </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            width: 100%;
        }
        header{
            width: 100%;
            height: 80px;
            background-color: #1f1204;
            color:#fafafa;
            display: flex;
            justify-content: center;
            align-items: center;   
        }
        main{
            width: 1280px;
            margin: 0 auto;
            padding: 16px;
        }
        footer{
            width: 100%;
            height: 60px;
            background-color: #1f1204;
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 0px;
            color: #fafafa;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lista de Produtos</h1>
    </header>
<main>