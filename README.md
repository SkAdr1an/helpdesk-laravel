# HelpDesk – Sistema de Tickets (Laravel)

Projeto desenvolvido como **teste técnico prático** para demonstrar domínio dos fundamentos do Laravel, arquitetura MVC, autenticação, rotas protegidas e CRUD completo, mesmo em nível iniciante/intermediário.

O foco foi **execução, resolução de problemas reais e entrega funcional**, não apenas teoria.

---

## 🚀 Funcionalidades

- Autenticação de usuários (Laravel Breeze)
- CRUD completo de Tickets:
  - Criar ticket
  - Listar tickets do usuário logado
  - Visualizar ticket individual
  - Editar ticket
  - Excluir ticket
- Segurança:
  - Cada usuário **só pode acessar seus próprios tickets**
  - Proteção por middleware `auth`
- Interface simples com Blade + Tailwind
- Validação de formulário (frontend + backend)

---

## 🧱 Tecnologias Utilizadas

- PHP 8.3
- Laravel 12
- Blade Templates
- Tailwind CSS
- SQLite (pode ser trocado por MySQL/PostgreSQL)
- Laravel Breeze (auth)

---

## ▶️ Como rodar o projeto

### 1️⃣ Clonar o repositório
```bash

git clone https://github.com/SkAdr1an/helpdesk-laravel
cd helpdesk

2️⃣ Instalar dependências
bash
Copiar código
composer install
npm install
npm run build

3️⃣ Configurar ambiente
bash
Copiar código
cp .env.example .env
php artisan key:generate

4️⃣ Rodar migrations
bash
Copiar código
php artisan migrate

5️⃣ Iniciar servidor
bash
Copiar código
php artisan serve
Acesse:
👉 http://127.0.0.1:8000

🔐 Fluxo de uso
Criar conta / Login

Acessar Dashboard

Criar tickets

Visualizar, editar ou excluir tickets

Usuários não conseguem acessar tickets de outros usuários (403)

🧠 Desafios enfrentados (e resolvidos)
Conflitos de rotas (RouteNotFoundException)

Blade com referências a rotas inexistentes

Middleware de autenticação bloqueando acessos indevidos

Correção de navegação e layout

Organização correta de controllers, views e rotas

Garantia de segurança por usuário

Todos os problemas foram identificados, depurados e solucionados durante o desenvolvimento.

🎯 Objetivo do projeto
Este projeto foi criado como teste técnico prático, com foco em:

Demonstrar capacidade de aprender sozinho

Resolver problemas reais

Entregar um sistema funcional de ponta a ponta

Mostrar domínio dos fundamentos do Laravel

👤 Autor
Adrian (Sk Adrian)
Desenvolvedor Backend (PHP / Laravel)
