<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-sizing: border-box;
        }

        body {
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

        .cabecalho {
            grid-area: "cabecalho";
            background: #cfcfcf url(../../../storage/images/cabecalho120x1000.png) no-repeat;
            background-size: cover;
            display: flex;
            z-index: 0px;
            box-shadow: black 1px 1px 20px 1px;
        }

        .cabecalho a {
            color: white;
            text-decoration: none;
            margin: 10px;
        }

        img {
            margin: 10px;
            width: 50px;
            border-radius: 100px;
        }

        .conteudo {
            height: calc(100vh-(120px));
            grid-area: "conteudo";
        }

        .conteudo>.explica {
            text-align: center;
        }

        .conteudo>.titulo {
            text-align: center;
        }

        .conteudo>.inputCampo {
            width: 300px;
            height: 150px;
            margin: 0 auto;
            text-align: center;
            margin-top: 10px;
        }

        .inputCampo {
            align-items: center;
            padding-top: 25px;
        }

        input {
            margin: 10px;
            background: #b0ddf5;
            height: 30px;
            width: 50px;
            border-radius: 10px;
            border: transparent
        }

        input:hover {
            background: #7fc2e6;
        }

        button {
            width: 80px;
            height: 30px;
            margin: 10px;
            border-radius: 15px;
            border: transparent;
            background: rgb(93, 126, 255);
            color: #ffffff;
        }

        button:hover {
            background: rgb(84, 118, 255);
            box-shadow: rgb(0, 0, 0) 1px 2px 10px 1px;
        }

        .conteudo>.script {
            box-shadow: black 1px 1px 10px 1px;
            width: 300px;
            height: 150px;
            margin: 0 auto;
            text-align: center;
            margin-top: 10px;
        }

        .erro {
            color: red;
        }

        .script {
            align-items: center;
            padding-top: 25px;
        }

        .script>h5 {
            margin: 2px;
        }

        .rodape {
            grid-area: "rodape";
            background: black;
        }

        .rodapecontent {
            text-align: center;
            color: white;
        }
    </style>
    <title>Calc Eq 2 Grau</title>
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <img src="../../../storage/images/" alt="logo" class="logoImg">
        </div>
        <div class="menu">
            <a href="https://www.instagram.com/lpxsbr/" class="whoiam">Quem eu sou</a>
            <a href="https://github.com/LpxsBr" class="others">Github</a>
            <a href="#" class="Subscribe">Subs</a>
        </div>
    </header>
    <main class="conteudo">
        <div class="titulo">
            <h3>Calculadora de Equação de 2 Grau</h3>
        </div>
        <div class="explica">
            <p>Lembrando que equações de 2º grau são funções do tipo:</p>
            <h3>ax² + bx - c = 0</h3>
        </div>
        <div class="inputCampo">
            <form action="script" method="post">
                <h><input type="number" name="cofa">x²</h>
                <h><input type="number" name="cofb">x</h>
                <h><input type="number" name="cofc"></h>
                <button class="subbtn">Calcular</button>
            </form>
        </div>
        <div class="script">
            <?php //include("calculate/eq2g/calc.php") ?>
        </div>
    </main>
    <footer class="rodape">
        <div class="rodapecontent">LpxsBr -
            <?= date('Y') ?>
        </div>
    </footer>
</body>

</html>