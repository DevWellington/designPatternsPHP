# Features

###0.1.x

- Formulario basico


    Nessa fase, voce devera criar uma classe(s) que seja responsavel por gerar um formulario HTML de forma totalmente dinamica.

    Uma vez que voce criar o objeto de seu formulario, voce podera chamar metodos para adicionar um novo campo, especificando seu tipo, entre outros;

    Essa classe devera possuir um metodo chamado **render**, esse metodo tera o objetivo de gerar o codigo HTML do formulario, baseado nos campos adicionados anteriormente.

    Nao deixe de tentar utilizar os conceitos de patterns e design aprendidos até o momento, para que o projeto possa evoluir de forma mais estruturada.


###0.2.x

- Funcionalidades


    Agora que você criou um formulário que é montado dinâmicamente, vamos adicionar mais funcionalidades nele:

	Para cada campo adicionado ao formulário, deve ser possível renderiza-lo separadamente. Você deve criar um método “createField()” e este deve receber parâmetros para a criação do campo (poderemos ter vários tipos de campos).

	Todos os nossos forms agora deverão depender de uma classe chamada “Validator”, que será responsável pela validação dos dados do formulário. Esta classe dependerá de outra classe chamada de “Request”, que representará uma requisição do usuário.

	Crie 4 instancias deste form com os campos que você quiser e renderize. Implementaremos as classes “Validator” e “Request” em exemplos posteriores.

	**Restrições & dicas**
		- Toda a implementação deve ser feita usando OO (sem uso de funções)
		- Não é permitido usar métodos e atributos estáticos
		- Não é permitido usar os patterns Singleton e/ou Registry
		- Procure fazer classes pequenas.
		- Classes com +300 linhas não serão permitidas
		- Procure fazer métodos pequenos. Métodos com +100 linhas não serão permitidos
		- Use muitas interfaces para confiar na comuniçação/contrato dos seus objetos.
		- Separe as classes em namespaces.

###0.3.x

- Fieldsets

    Agora que seu form possui elementos que são renderizados separadamente, vamos fazer o mesmo para um elemento em especial: o fieldset.

    Você deve ser capaz de criar um formulário onde chamando o método "createField()" da fase anterior, seja possível você criar fieldsets e popular esses fieldsets com campos, usando mesmo método.

###0.4.x

- Populate

	Nessa fase você deve criar um formulário de cadastro de produto contendo os seguintes campos:

		Nome: Texto
		Valor: Texto
		Descrição: Texto
		Categoria: Select, com as opções vindo dinâmicamente de um banco de dados sqlite.

	Você deverá ser capaz de popular esse formulário com dados vindo de um array, no momento da exibição do formulário.

	Algo como: $form->popular($dados);

	Ao popular o formulário você deve exibir mensagens de erro para as seguintes situações:

	- Caso o nome do produto não esteja no array ou esteja vazio;
	- Caso o valor do produto não seja numérico
	- Caso a descrição contenha +200 caracteres.

	No seu formulário também deve ser permitido exibir os erros ao topo do formulário em forma de lista (ul) OU cada erro anexado ao campo que ele se refere OU mostrar os erros em forma de lista ao rodapé do formulário.

	Estas mensagens de erro devem ser exibidas assim que o formulário é populado.

	Recomendacoes:

	- Procure usar todos os patterns que foram ensinados até agora para que seu código fique mais organizado
	- Faça métodos e classes pequenos	
	