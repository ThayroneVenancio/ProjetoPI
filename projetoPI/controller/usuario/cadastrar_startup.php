<html>
    
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Startup</title>
    </head>
   
<body>
    <?php
    require_once('../banco/conexao.php');
    ?>
    
    <form name="cadastro_startup" action="cadastro_startup.php" method="Post">
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome" />
        </div>

        <div>
            <label>Email:</label>
            <input name="email" type="email" id="email" />
        </div>

        <div>
            <label>Senha:</label>
            <input name="senha" type="password" id="senha" />
        </div>

        <div>
            <label>Celular:</label>
            <input name="celular" type="tel" id="celular" />
        </div>

        <div>
            <label>Telefone Comercial</label>
            <input name="telefone" type="tel" id="telefone" />
        </div>

        
        <div>
            <label>CNPJ/CPF</label>
            <input name="cpf" type="number" id="cpf" />
        </div>

        <div>
            <label>Cep</label>
            <input name="cep" type="number" id="cep" />
        </div>

        <div>
            <label>Logradouro</label>
            <input name="logradouro" type="text" id="logradouro" />
        </div>
        <div>
            <label>N°</label>
            <input name="numero_casa" type="number" id="numero_casa" />
        </div>
         <div>
            <label>Bairro</label>
            <input name="bairro" type="text" id="bairro" />
        </div>
        <div>
            <label>Complemento</label>
            <input name="complemento" type="text" id="complemento" />
        </div>

        <div>
            <label>Cidade</label>
            <input name="cidade" type="text" id="cidade" />
        </div>

        <div>
            <label>Estado</label>
            <input name="estado" type="text" id="estado" />
        </div>

        

        <div>
            <input id="btEnviar" type="submit" value="Cadastrar"/>
        </div>

    </form>
</body>
</html>