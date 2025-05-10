# 🔐 Login com Google One Tap (OAuth 2.0)

Este repositório demonstra a integração do **Google One Tap Login** em uma aplicação web utilizando JavaScript puro. Ele permite autenticação rápida com Google e exibe dados básicos do usuário como nome, e-mail e foto de perfil.

---

## 🚀 Funcionalidades

- Autenticação via conta Google com `ID Token`
- Exibição de nome, e-mail e foto do usuário autenticado
- Função de logout com `disableAutoSelect()`
- Decodificação do token JWT para obter dados do usuário

---

## 🧪 Demonstração

Ao carregar a página, um botão de login padrão do Google será exibido. Após o login:

- O token é capturado via `handleCredentialResponse`
- As informações são extraídas com `parseJwt()`
- O usuário recebe um alerta com seu nome, e-mail e imagem
- Você loga no sistema automaticamente

---


