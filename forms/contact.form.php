<div class="whitebox form-wrapper">
    <form id="frmContact" method="post" action="#focus">
        <div class="field">
            <div class="form-title">
                Restaurant De Clochard
            </div>
            <div class="form-description">
                Contactformulier website
            </div>
        </div>
        <div class="field section-header">
            <div class="heading"></div>
            <div class="subheading">
                Wij helpen u graag verder bij eventuele vragen over producten, bestellingen of andere zaken. Wij proberen om uw mailtje zo snel en zo goed mogelijk te beantwoorden.
                U kunt ook steeds mailen naar <a href="mailto:info@declochard.be">info@declochard.be</a>.
            </div>
        </div>

        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger">
                <strong>Er heeft zich een fout voorgedaan bij het versturen van het formulier. Gelieve opnieuw te proberen.</strong><br/>
                <?php foreach ($error as $e) { ?>
                    * <?php print $e; ?>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="field">
            <label>
                <span class="required">* </span> Naam
            </label>

            <div class="left">
                <input type="text" name="firstname" id="firstname" class="field-input" data-validation="required"
                       value="<?php print isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>"/>
                <label class="sub-label">voornaam</label>
            </div>

            <div class="right">
                <input type="text" name="lastname" id="lastname" class="field-input" data-validation="required"
                       value="<?php print isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>"/>
                <label class="sub-label">achternaam</label>
            </div>

            <div class="clear"></div>
        </div>

        <div class="field">
            <label>
                <span class="required">* </span> E-mail
            </label>

            <div class="left">
                <input type="text" name="email" id="email" class="field-input" data-validation="required email"
                       value="<?php print isset($_POST['email']) ? $_POST['email'] : ''; ?>"/>
                <label class="sub-label" for="email">email</label>
            </div>

            <div class="right">
                <input type="text" name="confirm_email" id="confirm_email" class="field-input" data-validation=" required email compare_email"
                       value="<?php print isset($_POST['confirm_email']) ? $_POST['confirm_email'] : ''; ?>"/>
                <label class="sub-label" for="confirm_email">bevestig email</label>
            </div>

            <div class="clear"></div>
        </div>

        <div class="field">
            <label for="telephone">
                Telefoon
            </label>
            <input type="text" name="telephone" id="telephone" class="field-input"
                   value="<?php print isset($_POST['telephone']) ? $_POST['telephone'] : ''; ?>"/>
        </div>

        <div class="field">
            <label for="subject">
                <span class="required">*</span> Onderwerp
            </label>
            <input type="text" name="subject" id="subject" class="field-input" data-validation="required"
                   value="<?php print isset($_POST['subject']) ? $_POST['subject'] : ''; ?>"/>
        </div>

        <div class="field">
            <label for="message">
                <span class="required">*</span> Uw bericht
            </label>
            <textarea class="field-input" name="message" id="message" data-validation="required"><?php print isset($_POST['message']) ? str_replace('<br />',"\n",$_POST['message']) : ''; ?></textarea>
        </div>

        <div class="field">
            <label for="recaptcha">
                <span class="required">*</span> CAPTCHA
            </label>

            <div class="g-recaptcha" id="recaptcha" data-sitekey="<?php echo $siteKey;?>"></div>
        </div>

        <div class="field">
            <input type="hidden" name="hfAction" value="hfSendMail"/>
            <?php print $xsrf_guard->xsrf_guard_field(); ?>
            <button type="submit" name="btnSend" id="btnSend">Versturen</button>
        </div>

        <?php if (isset($succes) && $succes <> null) { ?>
            <div class="alert alert-success">
                <strong>Uw bericht werd goed verstuurd!</strong>
            </div>
        <?php } ?>
    </form>
</div>