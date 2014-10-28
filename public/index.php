<?php

require_once "../src/bootstrap.php";

### Factory Method
$factoryForm = new \Ribeiro\HTML\Factories\FormFactory();

/**
 * Todo:
 *  Organizar as criações, dependencias, etc.
 *  Utilizar os Patterns Criacionais e Estruturais.
 *
 * Utilizar Patterns para ajustar o codigo abaixo, Estruturais e Criacionais
 *
 * Instalar aura-di e utiliza-lo de alguma forma
 *
 * Utilizar Factory para criar o:
 *  FieldSet com o Label, Input junto
 *
 * Utilizar o Facade para chamar o Objeto criado, passando os parametros
 *
 * Utilizar o Composite para adicionar os Elementos no FieldSet e no Formulario
 *
 */


$fieldSetName = new \Ribeiro\HTML\Factories\FieldSetInputFactory(
    'name', 'Nome', 'text', 'Teste'
);

$fieldSetValor = new \Ribeiro\HTML\Factories\FieldSetInputFactory(
    'valor', 'Valor', 'text', 'Valor'
);

$fieldSetDescription = new \Ribeiro\HTML\Factories\FieldSetTextAreaFactory(
    'txaDescription', 'Descricao', [30, 10], 'Teste'
);



$rs = $di->get('db')->query('SELECT id, description FROM category');
$data = $rs->fetchAll(PDO::FETCH_ASSOC);



$optFactory = new \Ribeiro\HTML\Factories\OptionPrototypeFactory(
    new \Ribeiro\HTML\Field\Child\OptionPrototype(),
    $data
);
$ops = $optFactory->getData();

$labelSelectCategoria = new \Ribeiro\HTML\Field\Label();
$labelSelectCategoria
    ->setFor('categoria')
    ->setTitle('Categoria')
;
$selectCategoria = new \Ribeiro\HTML\Field\Select();
$selectCategoria
    ->setName('categoria')
    ->setId('categoria')
    ->setOptions($ops)
;

$fieldSet = new \Ribeiro\HTML\FieldSets\FieldSets();
$fieldSet
    ->addField($labelSelectCategoria)
    ->addField($selectCategoria)
;



$button = new Ribeiro\HTML\Field\Button();
$button
    ->setName('cadastrar')
    ->setId('cadastrar')
    ->setType('submit')
    ->setTitle('Cadastrar')
;




$productComposite = $factoryForm->getForm();

$productComposite
    ->setName('contactForm')
    ->setId('contactForm')
    ->setMethod('POST')
    ->addField($fieldSetName)
    ->addField($fieldSetValor)
    ->addField($fieldSet)
    ->addField($fieldSetDescription)
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
            <?= $productComposite->render() ?>
        </div>
    </body>
</html>