# Seguem instruções:
Imagine que um dos nossos clientes precisa de uma tela de cadastro de permissões para seu sistema. Atualmente esse cliente imaginário precisa pedir para o DBA cadastrar manualmente os usuários no banco de dados. Por isso, você irá criar um "subsistema" de permissionamento que será adicionado ao sistema atual na “rota” /admin do sistema dele. Esse projeto será composto por duas telas.
1) Uma tela deve listar os usuários e ter botões para criação, edição e deleção desses usuários.
2) Uma segunda tela de criação ou edição, onde se deve cadastrar usuários e definir o nível de permissão que esse usuário terá: usuário interno, cliente ou administrador. Peça dados do usuário como: login, senha e nível de acesso.
Desenvolva uma aplicação SPA típica, tendo uma frontend (em Angular, ou VueJS, ou React) e uma API REST simples implementando um CRUD. A implementação da API pode ser na linguagem que lhe for mais familiar, mas a frontend precisa ser usando um dos frameworks listados acima. Para salvar os dados você pode usar tanto apenas uma variável em memória, como um banco de dados relacional, quanto não-relacional (NoSQL). No desenvolvimento, procure evidenciar o conceito de orientação a objeto (se lhe for familiar) e os design patterns S.O.L.I.D, DRY (Don't Repeat Yourself) e/ou K.I.S.S (se já os conhecer). Implemente testes unitários, se possível, principalmente na API.
 
# Detalhes:
1) O projeto não precisa de autenticação, assuma que você está autenticado como Administrador e está criando os usuários tendo esse perfil.
2) Não precisa se preocupar com CSS ou layout da página, foque na funcionalidade, mas CSS será um diferencial se conseguir fazer no tempo adequado.
3) Os dados não precisam ser salvos em banco de dados, o importante é que eles sejam persistentes enquanto a aplicação está rodando, banco de dados também é um diferencial.
