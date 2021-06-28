# Segurança-PHP
Repositório contendo algumas dicas de segurança em PHP e referências

## DICAS:
 1. HTTPS - Sempre construa sites com HTTPS;
 2. Manual do PHP - Securing Session INI Settings;
 3. Paragon IE - The Fast Track to safe and secure PHP Sessions;
 4. Validação de entrada;
 5. Filtros de XSS na Entrada
  - HTML Purifier
  - voku/anti-xss
  - Tratar saída:
     * Se usar uma ferramenta de templating, verifique sua própria função,
       senão use a função nativa:
        htmlentities($str, ENT_QUOTES | ENT_HTML5, $encoding)
 6. Valide os dados de entrada de acordo com o que você espera para aquele campo (data type)
    Ex.: um nome de uma pessoa pode ter apenas letras, espaços, números, hífen e apóstrofo (não esqueça de acentos)
 7. PHP Security: XSS (referência)
 8. OWASP: XSS Filter Evasion Cheat Sheet (referência)
 9. Políticas de senha
  - Não limite os caracteres permitido
  - Não coloque um tamanho máximo
  - O tamanho mínimo pode variar de acordo com a necessidade de sua aplicação
    (de acordo com o NIST SP800-132, 10 caracteres é o desejável)
  - Crie mecanismos de complexidade
    Ex.: ao menos 1 caracter maiúsculo, 1 minúsculo, 1 número e 1 caracter especial
10. Armazenamento de senha
  - Aplique um algoritmo de hash para transformá-la em uma texto com tamanho fixo
  - Utilize um salt específico para aquela senha (pode usar o id, email, data de registro, etc)
  - Criptografe o hash gerado para garantir que você possa recriptografar todas as senhas caso haja vazamento do banco de dados
  - Se possível use a biblioteca libsodium

11. Utilize técnicas de defesa em camada

    
