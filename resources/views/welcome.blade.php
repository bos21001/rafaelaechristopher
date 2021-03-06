<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Rafaela & Christopher</title>
    <link rel="shortcut icon" href="{{ asset('img/wedding_icon.png') }}" type="image/x-icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <style>
        body,
        h1,
        h2 {
            font-family: "Raleway", sans-serif;
        }

        body,
        html {
            height: 100%;
        }

        p {
            line-height: 2;
        }

        .bgimg,
        .bgimg2 {
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }

        .bgimg {
            background-image: url("img/aliança_costas.jpg");
        }

        .bgimg2 {
            background-image: url("img/maos_dadas1.jpg");
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

    </style>

</head>

<body>
    <!-- Cabeçalho / Ínicio-->
    <header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
        <div class="w3-display-middle w3-text-white w3-center" style="text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.671)">
            <h1 class="w3-jumbo">Rafaela & Christopher</h1>
            <h2>Nosso Casamento</h2>
            <h2><b>23.04.2022</b></h2>
        </div>
    </header>

    <!-- Navbar (sticky bottom) -->
    <div class="w3-bottom w3-hide-small">
        <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
            <a href="#home" style="width: 25%" class="w3-bar-item w3-button">Ínicio</a>
            <a href="#us" style="width: 25%" class="w3-bar-item w3-button">Rafaela & Christopher</a>
            <a href="#Casamento" style="width: 25%" class="w3-bar-item w3-button">Casamento</a>
            <a href="#rsvp" style="width: 25%" class="w3-bar-item w3-button w3-hover-black">Confirmar Presença</a>
        </div>
    </div>

    <!-- Sobre / Rafaela e Christopher -->
    <div id="us">
        <div class="w3-content">
            <h1 class="w3-center w3-text-grey"><b>Rafaela & Christopher</b></h1>
            <img src="{{ asset('img/pedido_casamento.jpg') }}" style="width: 100%; margin: 32px 0" />
            <div style="text-align: justify; padding-inline: 50px;">
                <p>
                    Seja bem-vindo(a) ao site do nosso casamento. Se você está aqui agora, isso significa que você é uma
                    pessoa muito especial em nossas vidas. Finalmente chegou o momento em que vamos tornar nossos laços
                    eternos. Não nos apaixonamos quando nos conhecemos,
                    passamos por isso apenas depois de contruir uma amizade e conhecer verdadeiramente um ao outro. Aos
                    poucos descobrimos que todas as coisas que estávamos fazendo individualmente, nossos planos e
                    desejos, se encaixavam de uma maneira
                    tão natural e harmoniosa, que nos fez ter coragem de iniciar essa bela aventura que é nosso
                    relacionamento. Somos gratos por todos os momentos que vivemos até agora, por todos sacrifícios,
                    todas viagens, risadas, planos, ligações, aniversários,
                    estudos até tarde, choros e abraços. De alguma forma você faz parte da nossa história, e estamos
                    felizes em poder compartilhar esse dia tão especial para nós com você.
                </p>
            </div>
            <br />

        </div>
    </div>

    <!-- Foto de Fundo -->
    <div class="w3-display-container bgimg2" id="Casamento">
        <div class="w3-display-middle w3-text-white w3-center" style="text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.671)">
            <h1 class="w3-xxxlarge">Lembretes sobre o casamento</h1>
            <br />
            <h2>Data: 23/04/2021</h2>
            <h2>Horário - 16:00</h2>
            <h2>Local: Sítio Dias Felizes</h2>
            <h3>Link do Google Maps : <a href="https://goo.gl/maps/opFqrTYF3dcBS7bw9" target="_blank">Clique Aqui</a>
            </h3>
        </div>
    </div>

    <!-- Lista de Presentes -->
    <div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
        <h1>Lista de Presentes</h1>
        <p class="w3-large"> Clique no botão abaixo para acessar a lista de presentes da MagazineLuiza
        </p>
        <p class="w3-xlarge">
            <button onclick="window.open('https://finalfeliz.de/rafaelaechristopher', '_blank')"
                class="w3-button w3-round w3-blue w3-opacity w3-hover-opacity-off" style="padding: 8px 60px">
                <strong>Acessar 🎁</strong>
            </button>
        </p>
    </div>

    <!-- Seção de Confirmação de Presença -->
    <div class="w3-container w3-padding-64  w3-center w3-wide" id="rsvp">
        <h1>ESPERAMOS QUE VOCÊ POSSA PARTICIPAR!</h1>
        <p class="w3-large">Clique no botão abaixo e responda o formulário até 23 de Março de 2022
        </p>
        <p class="w3-xlarge">
            <button onclick="window.open('https://forms.gle/VkjL3FYb1jpLtfyc9', '_blank')"
                class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off" style="padding: 8px 60px">
                Responda 😊
            </button>
        </p>
    </div>

    <!-- Rodapé -->
    <footer class="w3-center w3-black w3-padding-16">
        <p>Criado e mantido por <a href="https://www.linkedin.com/in/christopher-mendes">Christopher Mendes</a>. </p>
        <p>Para te fazer bem-vindo nesse evento tão sublime.</p>
    </footer>

    <div class="w3-hide-small" style="margin-bottom:32px"></div>
    <br>
</body>

</html>
