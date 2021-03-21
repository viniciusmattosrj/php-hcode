# Instalação

Faça um git clone do projeto php-hcode:

```
git clone git@github.com:viniciusmattosrj/php-hcode.git
```

## Encoding

Todos os arquivos estão em **UTF-8**.

#### Importante para que o git não considere alterações de permissão como modificações a serem rastreadas

```
git config core.fileMode false
```

#### Arquivos de Configuração

```
cp -v phpunit.xml.example phpunit.xml

cp -v docker-compose.yml.example docker-compose.yml

cp -v .env.example .env
```

&nbsp;

#### Configurações do .env:

|     Valor     | O que é?                              |   Exemplos de Parâmetros    |
| :-----------: | ------------------------------------- | :-------------------------: |
| DB_CONNECTION | Nome adapter da base de dados         |         ex: 'mysql'         |
|    DB_HOST    | Ip ou nome contaienr da base de dados | ex: '10.11.0.11' ou 'mysql' |
|    DB_PORT    | Port de conexão com base de dados     |         ex: '3306'          |
|  DB_DATABASE  | Nome da base dados                    |       ex: 'php_hcode'       |
|  DB_USERNAME  | Usuário de conexão com base de dados  |         ex: 'root'          |
|  DB_PASSWORD  | Senha de conexão com base de dados    |       ex: '123Mudar'        |

&nbsp;

#### Subir o container

Executar o seguinte comando no diretório do **php-hcode**:

```
docker-compose up -d
```

Ele fará com que os container específico do php-hcode sejam iniciado.

Execução fora container:

```
docker-compose exec php Makefile"
```

Execução dentro container:

```
docker-compose exec php bash -c "php -S 10.11.0.11:8008 -t public"
```

#### Instalando as dependências via composer

No projeto **php-hcode** execute o comando abaixo:

```
docker run --rm -v $(pwd):/app -v ~/.ssh:/root/.ssh composer install -vvv
```

#### Somente em ambiente de dev deve ser concedido a permissão nas pastas:

```
sudo chmod 777 -R keys vendor
```

#### Database e Migrations

MySQL:

```
docker exec -it mysql bash
mysql -u root -c "CREATE DATABASE php_hcode;";
```

Postgres:

```
docker exec -it postgres bash
psql -U webadm -c "CREATE DATABASE php_hcode";
```

Realizando a importação dump sql para a base criada:

MySQL: `mysql -u root -p php_hcode < /var/lib/mysql57/php_hcode.sql`

Postgres: `psql -U webadm php_hcode < /var/lib/postgresql/php_hcode.sql`

Execute os comandos abaixo:

```
Dentro do container: php vendor/bin/phinx migrate -e development
Fora do container: docker-compose exec php bash -c "php vendor/bin/phinx migrate -e development"
```

#### Criando os bancos de dados

Se conecte ao container do **postgres** com `docker exec -it postgres bash`

Realize o login com `mysql -u root` ou `psql -U webadm`

Em seguida crie as databases com os comandos:

```
CREATE DATABASE php-hcode;
CREATE DATABASE php-hcode_test;
```

#### Usando o php-hcode

Adicionar o ip do php-hcode no arquivo **/etc/hosts**:

```
10.11.0.11  php-hcode
```

O IP está definido no **docker-compose.yml** do php-hcode.

Se conectar, pelo navegador a:

```
http://php-hcode
```

#### Executar os testes

Se conecte ao container **php-hcode** e execute o seguinte comando:

```
./vendor/bin/phpunit
```

Para rodar o teste em classes/métodos específicos:

```
./vendor/bin/phpunit --filter testNomeDaClasse
```

#### Usando a aplicação

Utilizando Altair, Insomnia, Postman ou qualquer outro client gráfico do GraphQL, gere um novo token através da mutation createToken on Tradetools

Adicione token as Header, e.g.:
key: Authorization
value: Bearer my_token
Verifique a instalação na URL e use o endpoint (e.g.) http://10.11.0.11/graphql

Leia as docs do GraphQL conforme a API.
