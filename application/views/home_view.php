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
                    <a class="navbar-brand scrollink" href="#assine"><img src="<?= base_url(); ?>assets/images/logo.png" alt="Novo Luanda Leste"></a>
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
                        <li><a class="scrollink" href="#crystal-lagoons">CRYSTAL LAGOONS</a></li>
                        <li><a class="scrollink" href="#endereco">ENDEREÇO</a></li>
                        <li><a class="scrollink planta" href="#planta">PLANTA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="projecto" class="container-fluid padding-off projecto">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 padding-off"></div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 padding-off">
                    <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                        <div class="group-form">
                            <div class="col-xs-12 col-sm-12 col-md-12 padding-off contato">
                                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                    <h5>Quer receber mais informações?</h5>
                                </div>
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
                                            <input type="checkbox" name="checkboxResidenciais" class="checkboxResidenciais" value="residenciais"> Lotes residenciais
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="checkboxComerciais" class="checkboxComerciais" value="comerciais"> Lotes comerciais
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" required="required" placeholder="Mensagem..."></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="checkboxAfrincorp" class="checkboxAfrincorp" value="afrincorp"> Aceito receber informações da Afrincorp
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
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-off homem hidden-xs">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/homem.png" alt="Novo Luanda Leste">
                </div>
            </div>
        </div>
    </div>
</div>










<!-- 
<img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/Spicycomm_Afrincorp_LuandaLeste_LandingPage_v4.jpg" alt="Novo Luanda Leste">

 -->





<!-- 
<div id="home" class="container-fluid padding-off home">
    <div class="galeria">
        <section class="glr-home slider">
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_01.jpg" alt="Novo Luanda Leste">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_01.jpg" alt="Novo Luanda Leste">
            </div>
            <div>
                <a class="scrollink" href="#receitas">
                    <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_02.jpg" alt="Novo Luanda Leste">
                </a>
                <a class="scrollink" href="#receitas">
                    <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_02.jpg" alt="Novo Luanda Leste">
                </a>
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_03.jpg" alt="Novo Luanda Leste">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_03.jpg" alt="Novo Luanda Leste">
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_04.jpg" alt="Novo Luanda Leste">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_04.jpg" alt="Novo Luanda Leste">
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_05.jpg" alt="Novo Luanda Leste">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_05.jpg" alt="Novo Luanda Leste">
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_06.jpg" alt="Novo Luanda Leste">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_06.jpg" alt="Novo Luanda Leste">
            </div>
        </section>
    </div>
</div> -->







<!-- 
<div id="fale-conosco" class="container-fluid padding-off contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center tt">
                <p>Fale com a gente e leve um dos melhores azeites do mundo para a sua mesa.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="NOME*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="E-MAIL*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="telefone" type="text" class="telefone form-control" name="telefone" placeholder="TELEFONE" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <div class="custom_select">
                                <select id="assunto1" class="assunto1 form-control" name="assunto1" required="required">
                                    <option value="" disabled selected>ASSUNTO*</option>
                                    <option value="Dúvidas ou Sugestões">Dúvidas ou Sugestões</option>
                                    <option value="Revenda">Revenda</option>
                                    <option value="Representação Comercial">Representação Comercial</option>
                                    <option value="Outros assuntos">Outros assuntos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="4" name="mss" required="required" placeholder="MENSAGEM"></textarea>
                        </div>
                        <div class="col-xs-9 col-sm-8 col-md-8 form-group">
                            <small>* Os campos marcados com asterisco são de preenchimento obrigatório.</small>
                        </div>
                        <div class="col-xs-3 col-sm-4 col-md-4 form-group">
                            <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->


<!-- <div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Este site utiliza cookies para melhorar sua experiência de navegação, permitir um início de sessão seguro, recolher estatísticas e oferecer conteúdo adequado aos seus interesses. Ao continuar sua navegação, considera-se aceito nossos
                <a href="<?php echo base_url(); ?>politicadecookies">Termos e Condições de Uso do Site</a> e a nossa <a href="<?php echo base_url(); ?>politicadeprivacidade">Política de Privacidade</a>.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div> -->

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>