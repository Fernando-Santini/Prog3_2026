<?php
class Usuario {
    private $login;
    private $senha;

    public function __construct($login, $senha) {
        $this->setLogin($login);
        $this->setSenha($senha);
    }

    public function setLogin($login) {
        $login = trim($login);
        if (strlen($login) < 4) {
            throw new Exception("O login deve possuir pelo menos 4 caracteres.");
        }
        $this->login = $login;
    }

    public function setSenha($senha) {
        if (strlen($senha) < 8) {
            throw new Exception("A senha deve possuir pelo menos 8 caracteres.".(strlen($senha))."br");
        }
        $this->senha = $senha;
    }

    public function getLogin() {
        return $this->login;
    }

    public function alterarSenha($novaSenha) {
        $this->setSenha($novaSenha);
        echo "deu bom<br>";
    }

    public function autenticar($login, $senha) {
        if ($this->login === $login && $this->senha === $senha) {
            return true;
        }
        return false;
    }
}

function testarAutenticacao($usuario, $login, $senha, $descricao) {
    if ($usuario->autenticar($login, $senha)) {
        echo "$descricao: <strong>SUCESSO</strong><br>";
    } else {
        echo "$descricao: <strong>ERRO: </strong>senha ou login incorretos.<br>";
    }
}

try {
    $usuario = new Usuario("usuario123", "senhaSegura123");

    echo "<h2>Sistema de Autenticação</h2>";
    echo "Usuário cadastrado: " . $usuario->getLogin() . "<br><br>";

    testarAutenticacao($usuario, "usuario123", "senhaSegura123", "Tentativa 1 - Login e senha corretos");
    testarAutenticacao($usuario, "usuario123", "senhaErrada", "Tentativa 2 - Senha incorreta");
    testarAutenticacao($usuario, "loginErrado", "senhaSegura123", "Tentativa 3 - Login incorreto");
    testarAutenticacao($usuario, "loginErrado", "senhaErrada", "Tentativa 4 - Ambos incorretos");

    echo "<br>Alterando senha...<br>";
    $usuario->alterarSenha("nova45678");

    testarAutenticacao($usuario, "usuario123", "nova45678", "Tentativa 5 - Após alteração de senha");

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "<br>";
}
?>