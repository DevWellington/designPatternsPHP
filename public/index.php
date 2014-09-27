<?php

require_once "../vendor/autoload.php";

### Factory Method
$factoryForm = new \Ribeiro\HTML\Form\FormFactory();

/**
 * Todo:
 *  Organizar as criações, dependencias, etc.
 *  Utilizar os Patterns Criacionais e Estruturais.
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

$contactForm = $factoryForm->getForm();

$contactForm
    ->setName('contactForm')
    ->setId('contactForm')
    ->setMethod('POST')
        ->addField($labelInputName)
        ->addField($inputName)
        ->addField($labelInputEmail)
        ->addField($inputEmail)
        ->addField($labelSelectContactType)
        ->addField($selectContactType)
        ->addField($labelTextAreaDescription)
        ->addField($textAreaDescription)
        ->addField($button)
;

// Second Form (LoginForm)
$labelInputLogin = new \Ribeiro\HTML\Field\Label();
$labelInputLogin
    ->setFor('login')
    ->setTitle('Login')
;

$inputLogin = new \Ribeiro\HTML\Field\Input();
$inputLogin
    ->setName('login')
    ->setId('login')
    ->setType('text')
    ->setValue('Digite o Login: ')
;

$labelInputSenha = new \Ribeiro\HTML\Field\Label();
$labelInputSenha
    ->setFor('password')
    ->setTitle('Senha')
;

$inputSenha = new \Ribeiro\HTML\Field\Input();
$inputSenha
    ->setName('password')
    ->setId('password')
    ->setType('password')
;

$buttonLogin = new Ribeiro\HTML\Field\Button();
$buttonLogin
    ->setName('logar')
    ->setId('logar')
    ->setType('submit')
    ->setTitle('Logar')
;

$loginForm = $factoryForm->getForm();

$loginForm
    ->setName('loginForm')
    ->setId('loginForm')
    ->setMethod('POST')
        ->addField($labelInputLogin)
        ->addField($inputLogin)
        ->addField($labelInputSenha)
        ->addField($inputSenha)
        ->addField($buttonLogin)
;


// Third Form (UploadForm)
$labelInputFile = new \Ribeiro\HTML\Field\Label();
$labelInputFile
    ->setFor('uploadFile')
    ->setTitle('Upload File: ')
;

$inputFile = new \Ribeiro\HTML\Field\Input();
$inputFile
    ->setName('uploadFile')
    ->setId('uploadFile')
    ->setType('text')
    ->setValue('Digite Caminho do Arquivo: ')
;

$uploadForm = $factoryForm->getForm();

$buttonUpload = new Ribeiro\HTML\Field\Button();
$buttonUpload
    ->setName('upload')
    ->setId('upload')
    ->setType('submit')
    ->setTitle('Upload')
;    

$uploadForm
    ->setName('uploadForm')
    ->setId('uploadForm')
    ->setMethod('POST')
        ->addField($labelInputFile)
        ->addField($inputFile)
        ->addField($buttonUpload)
;


// Fourth Form (SearchForm)
$labelInputSearch = new \Ribeiro\HTML\Field\Label();
$labelInputSearch
    ->setFor('search')
    ->setTitle('Search: ')
;

$inputSearch = new \Ribeiro\HTML\Field\Input();
$inputSearch
    ->setName('search')
    ->setId('search')
    ->setType('text')
    ->setValue('Digite a pesquisa: ')
;

$buttonSearch = new Ribeiro\HTML\Field\Button();
$buttonSearch
    ->setName('bSearch')
    ->setId('bSearch')
    ->setType('submit')
    ->setTitle('Search')
;

// Example with FieldSet
$fieldSetTest = new \Ribeiro\HTML\FieldSets\FieldSets();
$fieldSetTest
    ->addField($labelInputSearch)
    ->addField($inputSearch)
    ->addField($buttonSearch)
;

$searchForm = $factoryForm->getForm();
$searchForm
    ->setName('searchForm')
    ->setId('searchForm')
    ->setMethod('POST')
        ->addField($fieldSetTest)
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

            <h3>Formulario de Contato</h3>
            <?=$contactForm->render()?>

            <h3>Formulario de Login</h3>
            <?=$loginForm->render()?>

            <h3>Formulario de Upload</h3>
            <?=$uploadForm->render()?>
            
            <h3>Formulario de Search</h3>
            <?=$searchForm->render()?>            
        </div>
    </body>
</html>