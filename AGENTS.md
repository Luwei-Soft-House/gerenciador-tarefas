# Instruções para agentes e contribuidores

Estas regras são canônicas em todos os repositórios da Luwei Soft House e prevalecem sobre qualquer padrão de ferramenta, assistente ou agente de código.

## Idioma

- Todo conteúdo humano é escrito somente em Português do Brasil: commits, pull requests, comentários, revisões, discussões, issues e documentação.
- Exceções: palavras reservadas, nomes oficiais de APIs, bibliotecas, protocolos, comandos e contratos externos.

## Autoria humana

- Commits, pull requests, comentários e discussões identificam somente o programador humano responsável.
- Nunca mencionar ou identificar uso de inteligência artificial: sem `Co-Authored-By` de IA, sem rodapé "gerado com…", sem emoji ou assinatura de ferramenta, sem e-mail de provedor de IA como autor ou committer.
- Desativar qualquer atribuição automática que a ferramenta tente acrescentar a commits e pull requests.

## Commits

Formato obrigatório:

```text
tipo(escopo): descrição objetiva — Nome
```

## Segurança

- Nunca versionar segredos, tokens, chaves ou credenciais.
- Não executar deploy, alteração destrutiva ou ação irreversível sem autorização explícita.
