<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Campo de pesquisa dentro do select html? dropdown personalizado!</title>
    <link rel="canonical" href="https://www.myhelpsites.com/campo-pesquisa-select-html">
    <meta name="Description" content="Se você é como eu que não curte muito aquele select simples que vem padronizado no html, hoje vou te ensinar como criar um campo de pesquisa dentro do select html, isso mesmo com dropdown personalizado para você melhorar a sua criação de sites!" />
    <meta name="keywords" content="campo de pesquisa, Campo de pesquisa dentro do select html, dropdown personalizado, select pesonalizado, input select">
    <meta name="distribuition" content="global">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="geo.region" content="SP-BR">
    <meta name="geo.placename" content="São paulo-SP">
    <meta name="robots" content="index,follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="2 days">
    <meta name='copyright' content='codeglim'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        <?php include "blogCSS/style.css" ?>
    </style>
    <script src="//code.jivosite.com/widget.js" data-jv-id="18z2pq6Oqz" async type="8eba0ea1019ee8fdd5e3cb63-text/javascript"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129031111-1" type="8eba0ea1019ee8fdd5e3cb63-text/javascript"></script>
    <script type="8eba0ea1019ee8fdd5e3cb63-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-129031111-1');
    </script>
</head>

<body>
    <header>
        <div class="container center">
            <h2>Blog My Help</h2>
        </div>
    </header>
    <div class="banner banner1">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8 span">
                    <h1>Campo de pesquisa dentro do select html?  dropdown personalizado!</h1>
                    <p><a title="criação de sites" href="https://www.myhelpsites.com">criação de sites</a> > <b>campo de pesquisa</b> dentro do <b>select</b> html? dropdown personalizado!</p>
                    <p>
                        <br>

                        Se você é como eu que não curte muito aquele <b>select</b> simples que vem padronizado no html, hoje vou te ensinar como criar um <b>campo de pesquisa</b> dentro do <b>select</b> <u>html</u>, isso mesmo com <b>dropdown personalizado</b> para você melhorar a sua <a title="criação de sites" href="https://www.myhelpsites.com">criação de sites</a>!
                        <br>
                        <br>
                    <div class="row">
                        <div class="col-md-6 center">
                            <img class="corpoIMG center" width="90%" src="blogCSS/campo-pesquisa-select-html.png" title="Campo de pesquisa dentro do select html? dropdown personalizado!" alt="Campo de pesquisa dentro do select html? dropdown personalizado!">
                        </div>
                        <div class="col-md-6">
                            <p>
                                <br>
                                Para iniciar você deve ter um arquivo index.html ou index.php, em Next.js usando React.js também funciona basta seguir o padrão e ter um arquivo com a &#60;Head>.
                                <BR></BR>
                                já com o arquivo <b>html</b> feito vá até a tag HEAD e adicione os scripts abaixo antes do fechamento da HEAD:
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <p>
                    <section class='codigo'>
                        &#60;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">&#60;/script> <br>
                        &#60;script src="https://dicadodesenvolvedor.com.br/script/select-busca.js">&#60;/script>

                    </section>
                    <br>
                    <br>


                    Feito isso seu arquivo já estará com a estrutura que criamos para implementar o <b>campo de busca</b> dentro do select, agora o processo é mais complicada.
                    <br>
                    <br>
                    <img src="blogCSS/hard.gif" width="90%" alt="">
                    <br>
                    <br>
                    Vamos criar uma tag <b>html</b> chamada &#60;input> responsável pela <b>pesquisa</b> que ficará desse jeito:
                    <br>
                    <br>
                    <section class='codigo'>
                        &#60;input type="text" class="selectHTML" data-div="divOp" name="" id="selectHTML1">
                    </section>
                    <br>
                    <br>
                    Nesse ponto eu criei alguns atributos específicos, para a função eu utilizo a classe "selectHTML" ela permite que eu pegue o valor do input e faça a <b>pesquisa</b> e também realizar o hide() e show() dos elementos a seguir:
                    <br>
                    <br>
                    <section class='codigo'>
                        &#60;div class="divOp divOpN"> <br>
                        &#60;option data-input='#selectHTML1' data-div='.divOp' class='optionT pesquisado'>Gazolina&#60;/option>
                        <br> &#60;option data-input='#selectHTML1' data-div='.divOp' class='optionT pesquisado'>Alcool&#60;/option>
                        <br> &#60;option data-input='#selectHTML1' data-div='.divOp' class='optionT pesquisado'>Gazolina&#60;/option>
                        <br> &#60;/div>
                    </section>
                    <br>
                    <br>
                    Vamos analisar esse código repare que no input eu tenho um atributo <b>html</b> "data-div", ele me permite saber qual é a div que está os option para que eu consiga criar a <b>pesquisa</b> no interior do select, a classe "divOp" que está no option serve para o hide() e show() e a classe "divOpN" serve para estilizar no CSS. Nos options eu tenho dois atributos "data", um é a classe da div e o outro é do input, o "data-input" permite que eu pegue o valor do option selecionado e jogue no input de busca, já o "data-div" serve apenas para eu ocultar após o clique no option.
                    <br>
                    <br>

                    agora vamos para o CSS, está na hora de estilizar o input que funciona como um <b>select</b> e a div com os options, seguimos assim:
                    <br>
                    <br>
                    <section class='codigo'>
                        .optionT {
                        <br> padding: 10px;
                        <br> transition: 0.5s all;
                        <br> cursor: pointer;
                        <br> }
                        <br> .optionT:hover {
                        <br> background-color: aliceblue;
                        <br> }
                        <br> .divOpN {
                        <br> box-shadow: 0px 1px 5px #eee;
                        <br> padding: 20px;
                        <br> margin-top: 5px;
                        <br> display: none;
                        <br> position: absolute;
                        <br> width: 90%;
                        <br> max-height: 200px;
                        <br> overflow: auto;
                        <br> background-color: white;
                        <br> z-index: 100;
                        <br> }
                    </section>
                    <br>
                    <br>
                    A classe ".optionT" eu adiciono apenas um padding, transition e cursor, mais isso é opcional, a classe ".divOpN" tem alguns itens que não podem faltar que são, "Display" ele deve ser "none" para que possamos dar um "show" ou "display:block", "position: absolute" me permite deixar ele de modo que o option não atrapalhe outro <b>select</b> ou <b>campo de busca</b> quando o assunto é design, recomendo que você utilize tudo que eu coloquei para ter um resultado igual ao meu na <b>pesquisa</b> do campo input.
                    <br>
                    <br>
                    Se você chegou até aqui parabéns basta testar seu projeto, graças ao jQuery e ao CSS podemos ter um <b>select</b> que funciona em todos os navegadores, do jeito que queremos, clique aqui para baixar o projeto de como criar barra de busca dentro do <b>select</b> html.
                    <br>
                    <br>
                    <img src="blogCSS/congrats.gif" width="90%" alt="">

                    </p>
                    <br>
                    <br>
                    <hr>
                    <h3>Outros artigos para aprender</h3>
                    <div class="row">
                        
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="https://www.myhelpsites.com/10-motivos-aprender-html" title="10 motivos para aprender html, e por onde você deve iniciar!">10 motivos para aprender html, e por onde você deve iniciar!</a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

                </div>

            </div>
        </div>
    </div>
    <footer class="center">
        <div class="container">
            <a style="color: white;" href="https://www.myhelpsites.com">
                <p>www.myhelpsites.com</p>
            </a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>