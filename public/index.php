<?php

require_once "../src/bootstrap.php";

### Factories
$factoryForm = new \Ribeiro\HTML\Factories\FormFactory();
$fsFacade = new Ribeiro\HTML\Facade\FieldSetFacade();

$fsName = $fsFacade->getFieldSet('input', ['name', 'Nome', 'text']);
$fsValor = $fsFacade->getFieldSet('input', ['valor', 'Valor', 'text']);
$fsDescription = $fsFacade->getFieldSet('textarea', ['txaDescription', 'Descricao', [30, 10]]);
$fsCategoria = $fsFacade->getFieldSet('select', ['categoria', 'Categoria', $di->get('db')]);

$button = new Ribeiro\HTML\Field\Button();
$button
    ->setName('cadastrar')
    ->setId('cadastrar')
    ->setType('submit')
    ->setTitle('Cadastrar')
;


$formProductComposite = $factoryForm->getForm();
$formProductComposite
    ->setName('productForm')
    ->setId('productForm')
    ->setMethod('POST')
    ->addField($fsName)
    ->addField($fsValor)
    ->addField($fsCategoria)
    ->addField($fsDescription)
    ->addField($button)

;

$arrayDataForm = [
    'name' => 'Valor do [name]',
    'valor' => 'Valor do [valor]',
    'categoria' => 'Notebook',
    'txaDescription' => 'Valor do [txaDescription]'
];

// form populate - edit mode
$populateForm = new \Ribeiro\HTML\Form\PopulateForm($formProductComposite);
$populateForm->populate($arrayDataForm);

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
            <?= $formProductComposite->render() ?>
        </div>
    </body>
</html>


