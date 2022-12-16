<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Site da empresa de orçamento de paineis solares, Solar4U">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Solar4U</title>
</head>
<body>
    <header class="cabecalho">
        <img class="cabecalho-imagem" src="../assets/logo-white.png" alt="Logo da Solar4U">
        <nav>
            <div>
                <a class="texto-cabecalho">A melhor empresa para orçar o seu painel solar!</a>
            </div>
            <div>
                <ul class ="cabecalho-opcoes-baixo">
                    <li><a class="item-cabecalho" href="../index.html">HOME</a></li>
                    <li><a class="item-cabecalho" href="../php/dicas.php">DICAS</a></li>
                    <li style="border-bottom: 0.4px solid #FFFFFF;"><a class="item-cabecalho" href="../php/orcamento.php">ORÇAMENTO</a></li>
                    <li><a class="item-cabecalho" href="../html/sobre.html">SOBRE</a></li>
                    <li><a class="item-cabecalho" href="../html/faq.html">FAQ</a></li>
                </ul>
            </div>
        </nav>
        <div>
            <ul class="cabecalho-contatos">
                <li class="cabecalho-contatos-itens">
                    <img class="imagem-contato" src="../assets/telephone.png" alt="Telefone de Contato">
                    <a class="texto-contato">(31) 3592-9999</a>
                </li>
                <li class="cabecalho-contatos-itens">
                    <img class="imagem-contato" src="../assets/whatsapp.png" alt="Whatsapp de Contato">
                    <a class="texto-contato">(31) 99999-9999</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <a class="titulo-principal">Orçamento</a>
        <div class="corpo-principal">
            <div class="item-corpo-principal">
                <div class="item-corpo-principal-titulo">
                    <p>Insira os dados necessários:</p>
                </div>
                <form action="orcamento-empresas.php" method="post">
                <div class="item-corpo-principal-texto">
                    <p>Nome:</p>
                    <input type="text" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="item-corpo-principal-texto">
                    <p>Endereço:</p>
                    <input type="text" name="endereco" placeholder="Digite seu endereço">
                </div>
                <div class="item-corpo-principal-texto">
                    <p>E-mail:</p>
                    <input type="email" name="e-mail" placeholder="Digite seu e-mail">
                </div>
                <div class="item-corpo-principal-texto">
                    <p>Telefone:</p>
                    <input type="text" name="telefone" placeholder="Digite seu telefone">
                </div>
                <div class="item-corpo-principal-texto">
                    <p>Valor atual da conta de energia:</p>
                    <input type="number" name="valor" placeholder="Digite o valor">
                </div>
                <div class="item-corpo-principal-texto">
                    <p>Consumo mensal (em kWh):</p>
                    <input type="number" name="consumo" placeholder="Digite o consumo">
                </div>
                <div class="item-corpo-principal-texto">
                    <p>Deseja uma cobertura total ou parcial?</p>
                    <select name="cobertura">
                        <option value="total">Total</option>
                        <option value="parcial">Parcial</option>
                    </select>
                </div class="botaozinho">
                <div>
                <input type="submit" value="Enviar" class="botao-enviar">
                </div>
            </form>
            </div>
        </div>
    </main>
    <footer class="rodape">
        <ul class="lista-rodape">
            <li><a class="texto-rodape" href="../html/politics.html"><strong>Política de Privacidade</strong></a></li>
            <li><a class="texto-rodape">© 2022 - Solar4U ou suas filiadas. Todos os direitos reservados.</a></li>
        </ul>
    </footer>
</body>
</html>