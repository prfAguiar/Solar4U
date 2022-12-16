<?php include "fakebd.php" ?>
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
                <ul class="cabecalho-opcoes-baixo">
                    <li><a class="item-cabecalho" href="../index.html">HOME</a></li>
                    <li><a class="item-cabecalho" href="../php/dicas.php">DICAS</a></li>
                    <li style="border-bottom: 0.4px solid #FFFFFF;"><a class="item-cabecalho"
                            href="../php/orcamento.php">ORÇAMENTO</a></li>
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
        <?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['e-mail'];
$telefone = $_POST['telefone'];
$valor = $_POST['valor'];
$consumo = $_POST['consumo'];
$cobertura = $_POST['cobertura'];

$empresas = array();

foreach ($lista as $empresa){
    $comparador = 10;
    $melhorPlano = null;
    foreach ($empresa['planos'] as $plano){
        if (abs(($plano / $consumo)-1) < $comparador){
            $melhorPlano = $plano;
        }
    }
    $valorTotal = $empresa['taxaMinima'] + $melhorPlano * $empresa['valorPorKwh'];
    $economia = ($valor * 300) - ($valorTotal);
    $cobertura = $melhorPlano / $consumo * 100;
    $e = array(
        "nome" => $empresa["nome"],
        "email" => $empresa["email"],
        'taxaMinima' => $empresa["taxaMinima"],
        'valorPorKwh' => $empresa["valorPorKwh"],
        'imagem' => $empresa["imagem"],
        'plano' => $melhorPlano,
        'economia' => $economia,
        'cobertura' => $cobertura,
        'valor' => $valorTotal,
    );
    array_push($empresas, $e);
}

?>

        <div class="empresa-lista">
            
            <!-- show all empresas, with a image (empresa.imagem), text saying the price of the installation (the most proximity plan with $consumo), a text "Economia em 30 anos", that equals to (empresa.valorPorKHw * the most proximity plan with $consumo * 300, and a percentage between this plan and $consumo), and a button to email linked with empresa.email -->
            <?php foreach ($empresas as $empresa) { ?>
            <div class="empresa">
                <div class="imagem">
                    <img src="../assets/<?php echo $empresa['imagem'] ?>" alt="Empresa">
                </div>
                <div>
                    <h2><strong>Valor: R$</strong> <?php echo number_format($empresa['valor'],"2",",","") ?></h2>
                    <h2><strong>Economia em 30 anos: R$</strong>
                        <?php echo number_format($empresa['economia'],"2",",","") ?></h2>
                    <h2><strong>Cobertura: </strong> <?php echo number_format($empresa['cobertura'],"2",",",""); ?>%
                    </h2>
                </div>
                <div class="botaoEmail">
                    <a href="mailto:<?php echo $empresa['email'] ?>"><img src="../assets/email.png" alt="Login"></a>
                </div>
            </div>
            <?php } ?>
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