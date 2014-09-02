<?php

require_once "../src/autoload.php";

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

$labelInputEmail = new \Ribeiro\HTML\Field\Label();
$labelInputEmail
    ->setFor('name')
    ->setTitle('eMail')
;

$inputEmail = new \Ribeiro\HTML\Field\Input();
$inputEmail
    ->setName('email')
    ->setId('email')
    ->setType('text')
    ->setValue('Digite o eMail')
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

$optionSuggestion = new \Ribeiro\HTML\Field\Child\Option();
$optionSuggestion
    ->setValue(1)
    ->setTitle('Sugestao')
;

$optionPraise = new \Ribeiro\HTML\Field\Child\Option();
$optionPraise
    ->setValue(2)
    ->setTitle('Elogio')
;

$optionComplaint = new \Ribeiro\HTML\Field\Child\Option();
$optionComplaint
    ->setValue(3)
    ->setTitle('Reclamacao')
;


$labelSelectContactType = new \Ribeiro\HTML\Field\Label();
$labelSelectContactType
    ->setFor('contactType')
    ->setTitle('Tipo de Contato')
;

$selectContactType = new \Ribeiro\HTML\Field\Select();
$selectContactType
    ->setName('contactType')
    ->setId('contactType')
        ->setOption($optionSuggestion)
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

$contactForm = new \Ribeiro\HTML\Form\Form();
$contactForm
    ->setName('contactForm')
    ->setId('contactForm')
    ->setMethod('POST')
        ->setField($labelInputName)
        ->setField($inputName)
        ->setField($labelInputEmail)
        ->setField($inputEmail)
        ->setField($labelSelectContactType)
        ->setField($selectContactType)
        ->setField($labelTextAreaDescription)
        ->setField($textAreaDescription)
        ->setField($button)
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
            <h1>Formulario Dinamico</h1>
            <h3>Formulario Basico</h3>
            <?=$contactForm->render()?>
        </div>
    </body>
</html>