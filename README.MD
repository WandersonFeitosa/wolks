<h1>Wolks</h1>

<p  align="center">

<img  src="http://img.shields.io/static/v1?label=&message=Typescript&color=blue&style=for-the-badge"/>

<img  src="http://img.shields.io/static/v1?label=&message=Node&color=green&style=for-the-badge"/>
<img  src="https://camo.githubusercontent.com/6fe72c57d22c1f30ceffcabee1a5e6a9728aa245a9b313101fb76ca4885baf7a/687474703a2f2f696d672e736869656c64732e696f2f7374617469632f76313f6c6162656c3d504850266d6573736167653d382e302e323326636f6c6f723d626c7565267374796c653d666f722d7468652d6261646765"/>

<img  src="https://camo.githubusercontent.com/31d7761698f4df1987f7231630846a082340ef34909a6b74c77c186dda7696d6/687474703a2f2f696d672e736869656c64732e696f2f7374617469632f76313f6c6162656c3d266d6573736167653d5343535326636f6c6f723d666636396234267374796c653d666f722d7468652d6261646765"/>

<img  src="https://img.shields.io/static/v1?label=STATUS&message=Em%20andamento&color=yellow&style=for-the-badge"/>
</p>

### Tópicos
 :small_blue_diamond: [Descrição do projeto](#andamento-do-projeto)

:small_blue_diamond: [Andamento do projeto](#descrição-do-projeto)

:small_blue_diamond: [Configurando o projeto](#configurando-o-projeto)

:small_blue_diamond: [Tecnologias, plugins e libs](#tecnologias-plugins-e-libs-books)

## Descrição do projeto

<p align="justify">
 Uma aplicação completa voltada para a revenda de carros, permitindo que usuários possam comprar e vender carros 
</p>

## Andamento do projeto
- [x] Criação do mockup das páginas;
	- [x] Home
	- [x] Login/Cadastro
	- [x] Produto
	- [x] Interna
- [x] Configuração do backend e conexão com a página
	- [x] Criação do Banco de dados com MongoDB
- [ ] Configurar sistema de login e cadastro
	- [x] Configuração do sistema de login
	- [x] Configruação do sistema de cadastro
	- [x] Configuração do controle de sessões
	- [x] Configuração da troca senha
	- [ ] Configuração da troca de informações do usuário		
- [ ] Configurar sistema de cadastro e listagem de veíuclos
	- [x] Configuração do sistema de cadastro de veículo
	- [x] Configuração do sistema de listagem de veículo
	- [ ] Configuração do sistema de atualização de veículo
- [ ] Configurar sistema de venda de veículos
	- [ ] Escolher plataforma de vendas
	- [ ] Integração com a plataforma de vendas

- [ ] Revisão de código
- [ ] Deploy


## Configurando o Projeto 

Para rodar o servidor é preciso antes incuir o .env na raiz do projeto com as seguintes configurações
```
MONGODB_URI= URI do banco de dados MongoDB  

JWT_SECRET= Chave secreta usada para autenticar token de autenticação
```  
O projeto é construído em TypeScript então para iniciar o servidor em modo de desenvolvimento é necessário o uso do ts-node para execução do programa, o que pode ser feito através do seguinte comando, lembre-se de iniciar apenas após instalar as dependências do programa:
```
yarn dev
```
ou 
```
npm run dev
```
  
## Tecnologias, plugins e libs :books:


**Tecnologias JS:**

- Node - 18.x;
- 
Dependências internas do projeto podem ser encontrada na raiz dentro do package.json, e podem ser instaladas através do seguinte comando

```
npm install  
```
ou
```  
yarn install  
```
##
**_Projeto em desenvolvimento_**