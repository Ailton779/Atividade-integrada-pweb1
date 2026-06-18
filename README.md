# pweb1-atividade-integrada

**Aluno:** José Ailton  
**Matrícula:** 20242283000080  
**Disciplina:** Programação Web I — IFCE Campus Boa Viagem  
**Semestre:** 2026/1

## Como executar

```bash
cp .env.example .env
php artisan key:generate
php artisan serve
```

## Rotas implementadas

| Método | Rota | Retorno |
|--------|------|---------|
| GET | / | View home — Bem-vindo à TechEdu! |
| GET | /sobre | View sobre |
| GET | /contato | View contato — Entre em contato conosco! |
| GET | /institucional/missao | View missao |
| GET | /institucional/valores | View valores |
| GET | /empresa | Texto: Página da Empresa |
| GET | /servicos | View servicos |
| GET | /portfolio | View portfolio |
| GET | /blog | View blog |
| GET | /equipe | View equipe |
| GET | /cursos | Texto: Lista de Cursos |
| GET | /cursos/novo | View cursos.create |
| GET | /cursos/listagem | View cursos.listagem |
| GET | /usuario/{nome} | Texto: Usuário: {nome} |
| GET | /curso/{id} | Texto: Curso selecionado: ID {id} |
| GET | /produtos/create | View produtos.create |
| POST | /produtos | Texto: Produto cadastrado: {nome} |
| GET | /disciplinas | View disciplinas.index |
| GET | /disciplinas/novo | View disciplinas.create |
| POST | /disciplinas | Texto: Disciplina cadastrada: {nome} |
| GET | /disciplinas/{id} | View disciplinas.show |
| GET | /alunos | View alunos.index |
| GET | /alunos/create | View alunos.create |
| POST | /alunos | Texto: Aluno cadastrado: {nome} |
| GET | /alunos/{id} | View alunos.show |

## Checklist de Entrega

- [x] Parte 1 — Rotas e Views Simples
- [x] Parte 2 — Controllers
- [x] Parte 3 — Parâmetros em Rotas
- [x] Parte 4 — Formulário e Fluxo GET/POST
- [x] Parte 5 — Resource Controller