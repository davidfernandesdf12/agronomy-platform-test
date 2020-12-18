<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Agronomy Platform Test (Laravel 8) 
Pacotes que foram adicionados para facilitar o desenvolvimento:

* laravel-framework: [Git](https://github.com/laravel/framework) | [Docs](https://laravel.com/docs/6.x)
* spatie/laravel-medialibrary: [Git](https://github.com/spatie/laravel-sluggable) [Docs](https://github.com/spatie/laravel-medialibrary)

### Credenciais Auth API 

**Admin:** admin@admin.com  
**Password:** secret

Faça o download da collection e do arquivo de ponto inicial para facilitar o entendimento da api 

* Collection insomnia: [Link](https://drive.google.com/drive/folders/14YFNEvuHhhYfOVhtzzzn0t2NzM8bJMue?usp=sharing)

## Desenvolvimento
O ambiente de desenvolvimento é provisionado numa VM (Virtual Machine), utilizando Vagrant + VirtualBox.

#### 1) Pré Requisitos 
Para rodar em ambiente local será necessario a instalação dos seguintes softwares:
    1. Vagrant - http://www.vagrantup.com/
    2. Virtual Box - https://www.virtualbox.org/

Caso queria maior facilicade de instalação da VM, faça a instalação com [Laravel Homestead](https://laravel.com/docs/8.x/homestead) 

#### 2) Configuração 
1. Você deve gerar um arquivo .env com os parâmetros exemplificado no arquivo .env.exemple, preencha os parâmetros de acordo com suas configurções de ambiente, para maior facilidade rode: cp .env.example .env  
2. Com a VM ja instalada e configurada, você deve logar no vagrant com o comando vagrant ssh, acesse ate a raiz do seu projeto e rode os seguintes comandos:
*     Atualizar composer: composer self-update
*     Instalação de pacotes PHP: composer install
*     Instalação de pacotes javascript: npm install && npm run dev
*     Gerando chave laravel: php artisan key:generate
*     Migrações integradas para criar as tabelas do banco de dados: php artisan migrate
*     Populando o banco de dados: php artisan db:seed
*     Vinculação de pastas publicas: php artisan storage:link
*     token JWT: php artisan jwt:secret 

                                     
                                 
                             




