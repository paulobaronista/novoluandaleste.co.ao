<nav class="navbar navbar-default menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 padding-off-mobile">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand scrollink" href="#home">
                        <img class="hidden-xs" src="<?= base_url(); ?>assets/images/logo.png" alt="Novo Luanda Leste">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <div class="redes">
                        <a class="instagram" href="#" target="_blank"></a>
                        <a class="facebook" href="#" target="_blank"></a>
                        <a class="youtube" href="#" target="_blank"></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="scrollink" href="#projecto">Projecto</a></li>
                        <li><a class="scrollink" href="#filme">Filme</a></li>
                        <li><a class="scrollink" href="#planta">PLANTA</a></li>
                        <li><a class="scrollink" href="#crystal-lagoons">CRYSTAL LAGOONS</a></li>
                        <li><a class="scrollink link-endereco" href="#endereco">ENDEREÇO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="home" class="container-fluid padding-off home">
    <div class="galeria">
        <section class="glr-home slider">
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_01.jpg" alt="Novo Luanda Leste">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_01.jpg" alt="Novo Luanda Leste">
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_02.jpg" alt="Novo Luanda Leste">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_02.jpg" alt="Novo Luanda Leste">
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_03.jpg" alt="Novo Luanda Leste">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_03.jpg" alt="Novo Luanda Leste">
            </div>
        </section>
    </div>
</div>
<div id="projecto" class="container-fluid padding-off produto">
    <div class="container tt-1">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <p>
                    PROJECTO URBANÍSTICO DE UM BAIRRO PLANEADO COM UMA DAS MAIORES<br class="hidden-xs" />
                    LAGOAS ARTIFICIAIS DE ÁGUAS CRISTALINAS DO MUNDO,<br class="hidden-xs" />
                    BY <span>CRYSTAL LAGOONS</span><sup>®</sup>.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/dt.png" alt="Novo Luanda Leste">
            </div>
        </div>
    </div>
    <div class="container tt-2">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 text-center box">
                <p>
                    O NOVO LUANDA LESTE FOI CONCEBIDO PARA SER UM BAIRRO PLANEADO COM <span>10 MILHOES DE M²</span>,<br />
                    EM SEU ENTORNO SERÁ ENTREGUE UM COMPLEXO INTERNACIONAL DE LAZER COM <span>1,5 HECTARES</span><br />
                    DESTINADOS A UMA PRAIA ARTIFICIAL BY <span>CRYSTAL LAGOONS</span><sup>®</sup>.
                </p>
                <p>
                    UM PROJECTO HISTÓRICO QUE VAI <span>REVOLUCIONAR O CRESCIMENTO EM ANGOLA</span><br />
                    PROPORCIONANDO MAIS COMODIDADE, BEM-ESTAR, ACESSIBILIDADE E QUALIDADE DE VIDA.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="filme" class="video">
    <div class="box-video">
        <div id="player"></div>
        <script>
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            var player;
            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '100%',
                    width: '100%',
                    videoId: 'BJ9mRHqN-Ys',
                    playerVars: {
                        'autoplay': 1,
                        'controls': 0,
                        'showinfo': 0,
                        'loop': 1,
                        'playlist': 'BJ9mRHqN-Ys',
                        'vq': 'hd720'
                    },
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            }
            function onPlayerReady(event) {
                event.target.setVolume(0);
                event.target.playVideo();
            }
            var done = false;
            function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.PLAYING && !done) {
                    //      setTimeout(stopVideo, 6000);
                    done = true;
                }
                event.target.setVolume(0);
            }
        </script>
    </div>
</div>
<div class="container-fluid padding-off galeria-homem">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <p class="txt1">
                    UM LUGAR IDEAL PARA <span>INVESTIR</span> E <span>AMPLIAR SEUS NEGÓCIOS</span>.
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 padding-off-mobile">
                <div class="galeria">
                    <section class="glr-produto slider">
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/galeria-homem-01.jpg" alt="Novo Luanda Leste">
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/galeria-homem-02.jpg" alt="Novo Luanda Leste">
                        </div>
                    </section>
                </div>
                <img class="homem-galeria hidden-xs" src="<?= base_url(); ?>assets/images/homem-galeria.png" alt="Novo Luanda Leste">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 text-center">
                    <p class="txt2">
                        <span>TRAGA SEU NEGÓCIO</span> PARA ESTE NOVO BAIRRO PLANEADO.<br />
                        UM PROJECTO COM POTENCIAL ATRATIVO PARA<br />
                        <span>2 MILHÕES DE PESSOAS</span> POR ANO.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padding-off box-lotes">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 text-center lotes">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off-mobile">
                        <p class="txt1">
                            LOTES COMERCIAIS DE <span>450</span> A <span>67 MIL M²</span> COM DIREITO DE SUPERFÍCIE
                        </p>
                        <p class="txt2">
                            O <span>Novo Luanda Leste</span> é o local ideal para abrigar empreendimentos comerciais de todos</br>
                            os tamanhos, como <span>hotéis, shoppings, restaurantes, edifícios comerciais, academias e muito mais</span>.</br>
                            Imagine sua empresa no entorno de uma deslumbrante praia artificial com aguas cristalinas e areia branca.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/lotes.png" alt="Novo Luanda Leste">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding-off galeria-mulher">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <p class="txt1">
                    É HORA DE <span>INVESTIR</span> NA SUA QUALIDADE DE VIDA COM SEGURANÇA
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 padding-off-mobile">
                <div class="galeria">
                    <section class="glr-produto slider">
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/galeria-mulher-01.jpg" alt="Novo Luanda Leste">
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/galeria-mulher-02.jpg" alt="Novo Luanda Leste">
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/galeria-mulher-03.jpg" alt="Novo Luanda Leste">
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/galeria-mulher-04.jpg" alt="Novo Luanda Leste">
                        </div>
                    </section>
                </div>
                <img class="mulher-galeria hidden-xs" src="<?= base_url(); ?>assets/images/mulher-galeria.png" alt="Novo Luanda Leste">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 text-center">
                    <p class="txt2">
                        <span>lançamento</span> da segunda fase do<br />
                        <span>Novo Luanda Leste</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="planta" class="container-fluid padding-off box-lotes">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 text-center lotes">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off-mobile">
                        <p class="txt1">
                            LOTES RESIDENCIAIS DE <span>360</span> A <span>800 M²</span> COM DIREITO DE SUPERFÍCIE
                        </p>
                        <p class="txt2">
                            Construa a casa dos seus sonhos, em uma bairro planeado com <span>grande potencial <br />de valorização</span> e <span>infraestrutura</span> que vai facilitar seu dia-a-dia.<br />
                            Imagine sua casa no entorno da exclusiva lagoa artificial by <span>CRYSTAL LAGOONS</span><sup>®</sup>, <br />com águas calmas e cristalinas e areia branca, que vai garantir <span>mais diversão</span> e <br /><span>bem estar para toda a família</span>.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/lotes2.png" alt="Novo Luanda Leste">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <a class="cta btn" href="https://www.hstkfiles.com.br/seed/slider/Planta.pdf" target="_blank">
                        <span>CLIQUE AQUI</span> E BAIXE NOSSA PLANTA
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="crystal-lagoons" class="container-fluid padding-off crystal-lagoons">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p class="txt1">
                    CONHEÇA O COMPLEXO QUE É <span>SUCESSO NO MUNDO TODO</span>.
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <img class="img-responsive center-block img-crystal-lagoons" src="<?= base_url(); ?>assets/images/crystal-lagoons.png" alt="Novo Luanda Leste">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="box-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/igT2TRFxSOk"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p class="txt2">
                    UMA DESLUMBRANTE PRAIA ARTIFICIAL BY <span>CRYSTAL LAGOONS</span><sup>®</sup><br />
                    NO CORAÇÃO DO PROJECTO, COM <span>POTENCIAL ATRATIVO</span> PARA<br />
                    <span>2 MILHÕES DE PESSOAS</span> POR ANO
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding-off afrincorp">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <img class="img-responsive hidden-xs" src="<?= base_url(); ?>assets/images/afrincorp.jpg" alt="Afrincorp">
                <img class="img-responsive visible-xs" src="<?= base_url(); ?>assets/images/afrincorp-mobile.jpg" alt="Afrincorp">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
                <p>
                    Desde 2009, a <span>Afrincorp Empreendimentos</span> actua no mercado angolano com
                    projectos que oferecem um conceito de natureza, qualidade de vida e bem-estar
                    da família e também do seu negócio. Agora traz o <span>Luanda Leste</span>, uma
                    nova região encantadora, com um polo comercial que vai transformar a vida de
                    quem vive, visita ou investe em Luanda.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="endereco" class="container-fluid padding-off endereco">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-center">
                <p class="txt1">
                    <span>VENHA CONHECER</span> ESTE GRANDE PROJECTO OU<br />
                    <span>AGENDE COM NOSSOS ESPECIALISTAS</span> UMA APRESENTAÇÃO EXCLUSIVA.
                </p>
                <span class="box">
                    <p class="txt2">
                        <span>Plantão de Vendas:</span><br />
                        Estrada Viana Catete, KM 49 - Luanda/Angola
                    </p>
                </span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-center"></div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 text-center">
                <p class="txt3">
                    <span>Faça parte</span> da construção dessa nova<br />
                    centralidade planeada e <span>transforme<br />
                        a vida de quem vive, visita</span> e <span>investe</span> em Luanda.
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/dt2.png" alt="Afrincorp">
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box-contato">
    <div class="btn-contato">
        <a id="btn-contato" href="#">
            Quer receber mais informações?
            <img src="<?= base_url(); ?>assets/images/bullet.png" alt="Novo Luanda Leste">
        </a>
    </div>
    <div id="contato">
        <form method="post" role="form" action="https://www.spicycomm.com.br/formEmail/luandaleste/contato">
            <div class="group-form">
                <div class="col-xs-12 col-sm-12 col-md-12 padding-off contato">
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="Digite seu Nome" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="Digite seu E-mail" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input id="telefone" type="text" class="telefone form-control" name="telefone" placeholder="Digite seu Telefone" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="checkbox">
                            <label style="padding-left: 0px;">
                                Você tem interesse:
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkboxResidenciais" class="checkboxResidenciais" value="Sim"> Lotes residenciais
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkboxComerciais" class="checkboxComerciais" value="Sim"> Lotes comerciais
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" required="required" placeholder="Mensagem..."></textarea>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkboxAfrincorp" class="checkboxAfrincorp" value="Aceito" required="required"> Aceito receber informações da Afrincorp
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar"></button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="aviso" class="aviso text-center">
    <div>
        <button type="button" class="close" id="close"><span aria-hidden="true">&times;</span></button>
        <p>O e-mail não pode ser enviado!<br />
            <strong>Tente novamente!</strong><br />
            Se o problema persistir, entre em contato<br />
            pelo e-mail <strong>contacto@novoluandaleste.co.ao</strong>
        </p>
    </div>
</div>