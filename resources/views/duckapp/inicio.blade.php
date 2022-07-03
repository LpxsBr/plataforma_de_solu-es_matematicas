<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    box-sizing: border-box;
}
body{
    height: 100vh;
    display: grid;
    margin: 0px;
    grid-template-rows: 80px 1fr 40px;
    grid-template-columns: 1fr;
    grid-template-areas:
    "cabecalho"
    "conteudo"
    "rodape";
}
.cabecalho{
    grid-area: "cabecalho";
    background: #cfcfcf url(/images/cabecalho120x1000.png) no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    z-index: 0px;
    box-shadow: black 1px 1px 20px 1px;
}
img{
    margin: 10px;
    width: 50px;
    border-radius: 100px;
}
.cabecalho > ul{
    margin: 10px;
    float: left;
}
.conteudo{
    height: calc(100vh-(120px));
    grid-area: "conteudo";
}
.conteudo > .explica{
    text-align: center;
}
.conteudo > .titulo{
    text-align: center;
}
.conteudo > .inputCampo{
    /*box-shadow: black 1px 1px 10px 1px;*/
    width: 300px;
    height: 150px;
    margin:0 auto;
    text-align: center;
    margin-top: 10px;
}
.inputCampo{
    align-items: center;
    padding-top: 25px;
}
input{
    margin: 10px;
    background: #b0ddf5;
    height: 30px;
    width: 50px;
    border-radius: 10px;
    border: transparent
}
input:hover{
    background: #7fc2e6;
}
button{
    width: 80px;
    height: 30px;
    margin: 10px;
    border-radius: 15px;
    border: transparent;
    background: rgb(93, 126, 255);
    color: #ffffff;
}
button:hover{
    background: rgb(84, 118, 255);
    box-shadow: rgb(0, 0, 0) 1px 2px 10px 1px;
}
.conteudo > .script{
    box-shadow: black 1px 1px 10px 1px;
    width: 300px;
    height: 150px;
    margin:0 auto;
    text-align: center;
    margin-top: 10px;
}
.conteudo > .funçao{
    box-shadow: black 1px 1px 10px 1px;
    width: 800px;
    height: 400px;
    margin:0 auto;
    text-align: center;
    margin-top: 10px;
}
.erro{
    color: red;
}
.script{
    align-items: center;
    padding-top: 25px;
}
.script > h5{
    margin: 2px;
}
.rodape{
    grid-area: "rodape";
    background: black;
}
.rodapecontent{
    text-align: center;
    color: white;
}

    </style>
    <title>Calc Eq 2 Grau</title>
</head>
<body>
    <header class="cabecalho">
        <div class="logo">
            <img src="logo.png" alt="logo" class="logoImg">
        </div>
        <div class="menu">
            <li>
                <a href="https://www.instagram.com/lpxsbr/" class="whoiam">Whoiam</a>
            </li>

            <li>
                <a href="https://github.com/LpxsBr" class="others">Others</a>
            </li>

            <li>
                <a href="#" class="Subscribe">Subscribe</a>
            </li>
        </div>
    </header>
    

    <main class="conteudo">

    <ul>
        <li>
            <a href="plataforma.php?dir=telas&file=seconddegreee">Equação de segundo Grau</a>
        </li>
        <li> Outra app 1</li>
        <li>
            <a href="plataforma.php?dir=calculate/eq2g&file=calc">Teste</a>
        </li>
    </ul>

    
        
        <!-- <div class="script">
           <?php
            // include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
           ?>
        </div> -->
    </main>
    
    <footer class="rodape">
        <div class="rodapecontent">LpxsBr - <?= date('Y')?></div>
    </footer>
    
</body>
</html>
