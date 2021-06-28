<?php

/**
 * Script de validação de usuário e senha evitando
 * que tenha diferença no tempo de resposta entre usuários
 * cadastrados e não cadastrados
 * 
 */

 public function login(string $username, string $password): bool
 {
    $storedPassWord = $this->generateFakePassword();
    $user = $this->findByUsername();
    if ($user) {
        $storedPassWord = $user->getPassword();
    }
    return ($this->verifyPassword($password, $storedPassWord))
        && ($user !== null);
 }


 /*
    OBS.: Mesmo que o usuário não exista será verificada
    a senha, pois é criada uma senha falsa no inicio do script
    a qual será utilizada caso o usuário não exista, desta forma
    o tempo de resposta sempre será próximo.
 */
