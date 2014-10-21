<?php

require_once "../vendor/autoload.php";

### Factory Method
$factoryForm = new \Ribeiro\HTML\Form\FormFactory();

/**
 * Todo:
 *  Organizar as criações, dependencias, etc.
 *  Utilizar os Patterns Criacionais e Estruturais.

    Nome: Texto
    Valor: Texto
    Descrição: Texto
    Categoria: Select, com as opções vindo dinâmicamente de um banco de dados sqlite.
 */


// First Form (ContactForm)
$labelInputName = new \Ribeiro\HTML\Field\Label();
$labelInputName
    ->setFor('name')
    ->setTitle('Name')
;

$inputName = new \Ribeiro\HTML\Field\Input();
$inputName
    ->setName('name')
    ->setId('name')
    ->setType('text')
    ->setValue('Digite o Nome')
;

$labelInputValor = new \Ribeiro\HTML\Field\Label();
$labelInputValor
    ->setFor('valor')
    ->setTitle('Valor')
;

$inputValor = new \Ribeiro\HTML\Field\Input();
$inputValor
    ->setName('valor')
    ->setId('valor')
    ->setType('text')
    ->setValue('Digite o Valor')
;

$labelTextAreaDescription = new \Ribeiro\HTML\Field\Label();
$labelTextAreaDescription
    ->setFor('txaDescription')
    ->setTitle('Descricao')
;


$textAreaDescription = new \Ribeiro\HTML\Field\TextArea();
$textAreaDescription
    ->setName('txaDescription')
    ->setCols(30)
    ->setRows(10)
    ->setText('Digite seu texto')
;


$optionPraise = new \Ribeiro\HTML\Field\Child\Option();
$optionPraise
    ->setValue(1)
    ->setTitle('Elogio')
;

$optionComplaint = new \Ribeiro\HTML\Field\Child\Option();
$optionComplaint
    ->setValue(2)
    ->setTitle('Reclamacao')
;


$labelSelectCategoria = new \Ribeiro\HTML\Field\Label();
$labelSelectCategoria
    ->setFor('categoria')
    ->setTitle('Categoria')
;

$selectCategoria = new \Ribeiro\HTML\Field\Select();
$selectCategoria
    ->setName('categoria')
    ->setId('categoria')
        ->setOption($optionPraise)
        ->setOption($optionComplaint)
;

$button = new Ribeiro\HTML\Field\Button();
$button
    ->setName('enviar')
    ->setId('enviar')
    ->setType('submit')
    ->setTitle('Enviar')
;

$productRegister = $factoryForm->getForm();

$productRegister
    ->setName('contactForm')
    ->setId('contactForm')
    ->setMethod('POST')
        ->addField($labelInputName)
        ->addField($inputName)
        ->addField($labelInputValor)
        ->addField($inputValor)
        ->addField($labelSelectCategoria)
        ->addField($selectCategoria)
        ->addField($labelTextAreaDescription)
        ->addField($textAreaDescription)
        ->addField($button)
;


?>
<!DOCTYPE html>
    <head>
        <title>Design Patterns com PHP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Cadastro de Produtos</h1>
            <?= $productRegister->render() ?>
        </div>
    </body>
</html>