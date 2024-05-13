## Desafio técnico LogComex
Sistema BI desenvolvido em PHP 8.3, Laravel 11, MySQL, Vue.JS 3 e Docker (Sail)

## Instalação e configuração do sistema
* Clone o repositório para o seu computador:
```https://github.com/lucascreis/desafio-logcomex```

* Acesse o diretório do projeto em seu computador:
```cd NOME-DE-REPOSITÓRIO```

* Instale as dependências do Composer:
```composer install```

* Configure o arquivo de ambiente e de conexão com o banco de dados:
Faça uma cópia do arquivo ```.env.example```, salvando com o nome ```.env```. Configure os dados de conexão com o banco de dados (Ex: <br/> <b>DB_CONNECTION=mysql</b><br/>
<b>DB_HOST=mysql</b><br/>
<b>DB_PORT=3306</b><br/>
<b>DB_DATABASE=laravel</b><br/>
<b>DB_USERNAME=sail</b><br/>
<b>DB_PASSWORD=password</b><br/>).

* Suba o ambiente docker:
```./vendor/bin/sail up -d```

* Gere a chave de aplicação:
```./vendor/bin/sail artisan key:generate```

* Executar as migrações do banco de dados:
```./vendor/bin/sail artisan migrate```

* Iniciar o servidor de desenvolvimento:
```./vendor/bin/sail artisan serve```

* Após realizar todos os passos anteriores, você poderá acessar o sistema através <a href="http://localhost">desse link</a>.

* Execute o Seeder para a criação dos registros no banco de dados (criará 2000 registros fictícios):
```./vendor/bin/sail artisan db:seed```

## Endpoints da API:
* Consulta os registros da tabela PESSOA:
```GET: http://localhost/api/pessoa```

* Consulta os registros da tabela PESSOA filtrando pelos campos (é possível filtrar por qualquer um dos campos ou por todos os campos):
```GET: http://localhost/api/pessoa?name=NOME-COM-LIKE&age=IDADE&sex=SIGLA-SEXO(M, F ou N)&description=DESCRIÇÃO-COM-LIKE```

* Consulta os dados de uma PESSOA em específico:
```GET: http://localhost/api/pessoa/{ID}```

## Testes unitários
* Para executar os testes unitários, utilize o seguinte comando:
```./vendor/bin/sail artisan test```