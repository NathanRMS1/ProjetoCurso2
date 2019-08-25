# Como usar
## Versões utilizadas
- PHP Versão 7.3.5
- MySQL Versão 5.7.26
- Bootstrap Versão 4.3.1
- jQuery Versão 3.4.1
## Passo a passo para funcionamento correto
- Importar o arquivo database/geral.sql diretamente ao phpMyAdmin (os comandos de criação da tabela necessária para o funcionamento do sistema estão no arquivo).
- Ao colocar no servidor local, modificar em cnf/conexao.php os dados do banco de dados.
- Para que os produtos sejam mostrados, é necessário fazer o upload individual. Se quiser os produtos já existentes na pasta de produtos, importar database/produtos.sql à tabela do sistema.
- Usuário dafinido administrador definido previamente, o email é: ari@osvaldo.com e a senha é: 4r105v4ld0 (o nome definido é apenas para propósitos de comédia).
## Informações específicas
- O sistema de comentários permite apenas 1 comentário por pessoa, administrador consegue publicar vários comentários.
- Sistema de mensagens apenas armazena. A ideia é que as mensagens aparecam para qualquer administrador.

# Versões
## Versão 0.7.4
>24/08/19
### novo:
- Mensagens podem ser visualizadas e removidas pelo administrador
### modificado
- Quebra de linha nos comentários em funcionamento
- Botões de "Disponível no iFood e Uber Eats adicionados"

## Versão 0.7.3
>03/08/19 mais tarde
### novo:
- Interface de usuario finalizado
- Adicionado "como usar no readme"
- Remoção de alguns arquivos aleatórios do sistema

## Versão 0.7.3alpha
>03/08/19
- Readme não atualizado por falta de tempo
### novo:
- Interface de usuario em desenvolvimento
- Page scroll bonito
### problemas:
- Interface de usuario em desenvolvimento
- Page scroll funcionando bem até demais (em tags que não deveria)
### modificado:
- required adicionada às tags

## Versão 0.7.2b
>28/07/19
### novo:
- Bancos de dados para importação atualizados (tinha esquecido :P)
- required adicionado as tags de login/cadastro
### problemas:
- Criar interface de usuario

## Versão 0.7.2a
>28/07/19
- Readme atualizado (esqueci :P)

## Versão 0.7.2
>28/07/19
### resolvido:
- Sistema de Comentários adicionado (falta edição)
### novo:
- Remover comentário adicionado
>ambos funcionais

## Versão 0.7.1
>28/07/19 00:00
### problemas:
- Sistema de comentários (não entendo nada, vou dormir)

## Versão 0.7.0b
>27/07/19
### novo:
- Sistema de mensagens funcionando (apenas para envios, sem visualizações ou modificações)
### resolvido:
- Adicionar produto finalizado
### problemas:
- Terminar o sistema de mensagens
- Criar reserva de mesa
- Criar agendamento de festa
- Criar sistema de entrega de produto
- Adicionar comentários aos produtos

## Versão 0.7.0
>27/07/19
### novo:
- Sistema de login funcional
- Nível de pessoa adicionado
### modificado:
- Produtos na base(css)
### problemas:
- Criando adicionar produto

## Versão 0.6.4
>29/06/19
- Responsivo
- Mais bonito
- Produtos fazem parte do banco de dados

## Versão 0.6.1
>01/06/19
- Maior parte compatível com Bootstrap v4.3.1
- Apenas sistema de login e cadastro """em funcionamento""" (ainda inútil)
- Site ainda sem um bom design
