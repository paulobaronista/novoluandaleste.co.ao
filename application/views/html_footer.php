<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php
echo script_tag('assets/js/slick.js');
echo script_tag('assets/js/jquery.clearinput.js');
echo script_tag('assets/js/jFuncoes.js');
echo script_tag('assets/js/bootstrap.min.js');
?>

<div class="float-box">
    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=+244922999903" target="_blank" class="whats">Whatsapp</a>
    <a id="btn-mail" href="#home" class="mail scrollink hidden-xs">Enviar mensagem</a>
    <a href="#contato" class="mail scrollink visible-xs">Enviar mensagem</a>
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LZK91GZN4K"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-LZK91GZN4K');
</script>

</body>

</html>