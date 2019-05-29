
<div class="eltdf-comment-form" style="margin-top: 8%">
    <div class="eltdf-comment-form-inner">
        <div id="respond" class="comment-respond">
            <h4 id="reply-title" class="comment-reply-title">Marque Sua Visita</h4>
            <?php echo $this->Form->create() ?>
                <input id="name" name="nome" placeholder="Digite seu Nome..." type="text" value="" aria-required='true' required/>
                <input id="phone" name="phone" placeholder="Telefone" type="text" value="" aria-required='true' required/>
                <input id="company" name="company" placeholder="Empresa" type="text" value="" aria-required='true' required/>
                <input id="segment" name="segment" placeholder="Segmento" type="text" value="" aria-required='true' required/>
                <input id="place" name="place" placeholder="Local(cidade/Estado)" type="text" value="" aria-required='true' required/>
                <textarea id="msg" placeholder="O que voce precisa?" name="msg" cols="15" rows="3" aria-required="true" required></textarea>

           <h6 style="font-size: small">Escolha uma data:</h6>
            <div class="input-group date">
                <input type="text" class="form-control col-lg-2 data" name="date" required>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
                <p class="form-submit"> <input name="submit" type="submit" id="submit_comment" class="submit" value="Enviar"/> </p>

            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?render=6Lf3HqQUAAAAALnpml1f9FdqFb9M0_cFI5er9mH8"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6Lf3HqQUAAAAALnpml1f9FdqFb9M0_cFI5er9mH8', { action: 'contact' }).then(function (token) {
            var recaptchaResponse = document.getElementById('g-recaptcha-response');
            recaptchaResponse.value = token;

        });
    });
</script>

