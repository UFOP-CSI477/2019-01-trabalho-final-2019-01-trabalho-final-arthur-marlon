# **CSI477-2019-01 - Proposta de Trabalho Final**
## *Grupo: Arthur & Marlon*

<!-- Descrever um resumo sobre o trabalho. -->

### Resumo
O objetivo deste documento é apresentar uma proposta para o trabalho a ser desenvolvido na disciplina CSI477 -- Sistemas WEB I.

A ideia principal do projeto é prover um sistema para um grupo ficticío de colecionismo que permita a compra e venda dos seus colecionáveis, todos produzidos pela empresa Funko.

Cada colecionável é de uma linha específica. Dentre as linhas que a Funko produz estão: Pop!; Dorbz; Vinyl, etc... Além do nome, cada linha tem uma altura específica, uma média de preço, entre outros atributos. De cada linha podem existir vários colecionáveis. Um colecionável também é de um determinado tema: StarWars, Filmes, Terror, Marvel, Games, etc.... Desse modo existem Funko Pop! StarWars e Funko Vinyl Stranger Things, por exemplo. Para um mesmo tema podem existir vários colecionáveis. Cada colecionável possui um conjunto de características que podem ser usadas para buscas.

<!-- Apresentar o tema. -->
### 1. Tema

O trabalho final tem como tema o desenvolvimento de um sistema para um grupo ficticío de colecionismo que permita a compra e venda dos seus colecionáveis, todos produzidos pela empresa Funko.

São mantidos no sistema o cadastro de cada usuário do grupo, cada usuário pode registrar no sistema quais colecionáveis já possui. Para cada um é importante saber quanto pagou por ele e em qual data. Além disso, usuário podem cadastrar intensões de compra de um ou mais colecionáveis. Para cada intensão de compra deve indicar qual é o colecionável, até que data pretende comprar e o valor que pretende pagar. Além disso, pode indicar se o valor que quer pagar é negociável e se aceita apenas colecionáveis novos, usados ou mesmo incompletos (quando são vendidos fora das caixas). Cada usuário pode também realizar uma oferta de venda, indicando o estado do colecionável, o preço que quer receber. 

<!-- Descrever e limitar o escopo da aplicação. -->
### 2. Escopo

Este projeto terá as seguintes funcionalidades:

* Cadastro de Usuários;
* Cadastro de Colecionaveis;
* Cadastro de intenções de compra;
* Cadastro de oferta de venda;
* Conseguir calcular o valor médio de cada colecionável, com base no preço que cada usuário pagou em sua compra. Além disso, informar tanto na intensão de compra como na oferta de venda se o valor pedido está abaixo ou acima do valor médio.
* Registrar se um colecionável saiu ou não de produção (vaulted). A princípio, todos os colecionáveis estão em produção, mas de tempos em tempos a Funko avisa quais colecionáveis saíram de produção, o que tende elevar a pedida nas ofertas de venda.
* Sempre que possível, deve-se registrar com fotos cada colecionável. E nas ofertas de venda também é interessante a pessoa informar a foto real do colecionável que está vendendo.
*Permitir que os usuários vejam a sua própria lista de colecionáveis ordenadas das mais diversas formas possíveis.

<!-- Apresentar restrições de funcionalidades e de escopo. -->
### 3. Restrições

É interessante, mas não obrigatório, que o sistema faça o casamento entre intensões de compra e ofertas de venda, para automatizar os negócios. O sistema em si não efetua a venda, apenas realiza a oferta (compra e venda) e deixa que os usuários realizem a negociação por fora.

<!-- Construir alguns protótipos para a aplicação, disponibilizá-los no Github e descrever o que foi considerado. //-->
### 4. Protótipo
Protótipos para as páginas que foram elaboradas, e podem ser encontrados em https://github.com/UFOP-CSI477/2019-01-trabalho-final-guilherme-philipe/tree/master/Prototipos.

* Página principal
* Página de cadastro de clientes
* Página de cadastro de parceiros
* Tela para cálculo da distância e custo benefício
* Tela para análise custo benefício<!-- Esse Protótipo é necessário ??? -->
* Página para cadastro veicular



### 5. Referências
Pindyck,R. S.; Rubinfeld, D. L. Microeconomia. 7 ed. São Paulo: Pearson Education do Brasil, 2010.
