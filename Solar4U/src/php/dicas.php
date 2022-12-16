<?php 
    require_once "../database/dataClue.php";

?>

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
                    <li style="border-bottom: 0.4px solid #FFFFFF;"><a class="item-cabecalho" href="../php/dicas.php">DICAS</a></li>
                    <li><a class="item-cabecalho" href="../php/orcamento.php">ORÇAMENTO</a></li>
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
        <a class="titulo-principal">Dicas</a>
        <div class="corpo-principal">
            <div class="item-corpo-principal">
                <h1>Como diminuir os seus gastos:</h1>
                <div class="item-corpo-principal-content">
                    <?php 
                        foreach ($clues_cost as $key => $value) {
                            ?>
                            
                            <details class="collapse">
                                <summary class="title">
                                    <div class="item-corpo-principal-content-item-icon">
                                        <object data="../<?php echo $value['icon'];?>"> </object>
                                    </div>
                                    <div class="item-corpo-principal-content-item-info">
                                        <h2><?php echo $value['info'];?></h2>
                                    </div></summary>
                                <div class="description"><h2><?php echo getDetailCostById($value['id'], $clues_cost_detail)?></h2></div>
                            </details>

                             <?php 
                        }
                    ?>
                </div>
            </div>
            <div class="item-corpo-principal">

                <h1>Como obter descontos na sua conta de energia:</h1>
                <div class="item-corpo-principal-content">
                    <?php 
                        foreach ($clues_discount as $key => $value) {

                            ?>
                            
                            <details class="collapse">
                                <summary class="title">
                                    <div class="item-corpo-principal-content-item-icon">
                                        <object data="../<?php echo $value['icon'];?>"> </object>
                                    </div>
                                    <div class="item-corpo-principal-content-item-info">
                                        <h2><?php echo $value['info'];?></h2>
                                    </div></summary>
                                <div class="description"><h2><?php echo getDetailDiscountById($value['id'], $clues_cost_detail)?></h2></div>
                            </details>

                             <?php 
                        }
                    ?>
                </div>
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

<script>
var coll = document.getElementsByClassName("item-corpo-principal-content-item");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>
</html>