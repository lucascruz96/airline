# Airline

Projeto airline.

## Especificações

### Requisitos

- [PHP >= 7.0](https://www.php.net/releases/7_0_0.php) ou superior.
- [Composer](https://getcomposer.org/).

### Dependências

 - [PHPUnit 6](https://phpunit.de/getting-started/phpunit-6.html) (para execução dos testes).

### Execução

1. Faça o clone do projeto com `git clone https://github.com/lucascruz96/airline.git`.
2. Acesse a pasta do projeto e execute o comando `composer install` para instalar as dependências.

### Testes

Para execução dos testes, acesse a raiz do projeto e execute um dos comandos:

- Modo simplificado: `./vendor/bin/phpunit tests `
- Modo detalhado: `./vendor/bin/phpunit tests --color --stop-on-failure --debug -v`

## Modulos

### Checkout

Realiza o checkout dos vôos.

#### public function generateExtract()

Gera um objeto contendo o resumo das passagens.

#### public function generateDetailedExtract()

Gera um objeto contendo o resumo detalhado das passagens.