<section id="contactUs" data-section-name="contactus" class="pb-4 pt-custom-breakpoint">
    <div class="container-fluid container-1195">
        <!--<div class="row">-->
        <div class="col-md-5 m-auto">
            <div class="row text-title f-black"><span class="text-underline m-auto"><?= $lang['contactUs']['head'] ?></span></div>
            <div class="row mt-4 justify-content-center">
                <p class="text-center">
                    <?= $lang['contactUs']['title'] ?>
                </p>
            </div>
        </div>
        <!--</div>-->
        <!--<div class="row">-->
        <div class="col-md-8 col-xl-12 mr-auto ml-auto px-4 pt-5 between-75 bg-white-op-80">
            <form class="my-form-style" action="./sendMail.php" method="post">
                <div class="form-group">
                    <label class="require-label" for="name"><?= $lang['contactUs']['contact_form']['name'] ?></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Example : Por">
                </div>
                <div class="form-group">
                    <label class="require-label" for="email"><?= $lang['contactUs']['contact_form']['email'] ?></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Example : Example@hotmail.com">
                </div>
                <div class="form-group mb-lg-0">
                    <label class="require-label" ><?= $lang['contactUs']['contact_form']['contentOfInquiry'] ?></label>
                </div>
                <div class="form-group">
                    <label for="aboutWebsite"><?= $lang['contactUs']['contact_form']['aboutWebsite'] ?></label>
                    <select class="form-control" name="aboutWebsite">
                        <option selected><?= $lang['contactUs']['contact_form']['pleaseSelect'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutWebsite_select']['siteCreation'] ?>"><?= $lang['contactUs']['contact_form']['aboutWebsite_select']['siteCreation'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutWebsite_select']['smartSite'] ?>"><?= $lang['contactUs']['contact_form']['aboutWebsite_select']['smartSite'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutWebsite_select']['originalBlog'] ?>"><?= $lang['contactUs']['contact_form']['aboutWebsite_select']['originalBlog'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutWebsite_select']['mailSystem'] ?>"><?= $lang['contactUs']['contact_form']['aboutWebsite_select']['mailSystem'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutWebsite_select']['otherSystem'] ?>"><?= $lang['contactUs']['contact_form']['aboutWebsite_select']['otherSystem'] ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="aboutGraphics"><?= $lang['contactUs']['contact_form']['aboutGraphics'] ?></label>
                    <select class="form-control" name="aboutGraphics">
                        <option selected><?= $lang['contactUs']['contact_form']['pleaseSelect'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutGraphics_select']['createLogo'] ?>"><?= $lang['contactUs']['contact_form']['aboutGraphics_select']['createLogo'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutGraphics_select']['directMail'] ?>"><?= $lang['contactUs']['contact_form']['aboutGraphics_select']['directMail'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutGraphics_select']['lineStamp'] ?>"><?= $lang['contactUs']['contact_form']['aboutGraphics_select']['lineStamp'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutGraphics_select']['characterDesign'] ?>"><?= $lang['contactUs']['contact_form']['aboutGraphics_select']['characterDesign'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutGraphics_select']['illustrator'] ?>"><?= $lang['contactUs']['contact_form']['aboutGraphics_select']['illustrator'] ?></option>
                        <option value="<?= $lang['contactUs']['contact_form']['aboutGraphics_select']['designOther'] ?>"><?= $lang['contactUs']['contact_form']['aboutGraphics_select']['designOther'] ?></option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="require-label"><?= $lang['contactUs']['contact_form']['desc'] ?></label>
                    <textarea placeholder="type here" class="form-control" name="description"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="contact-submit-btn"><?= $lang['contactUs']['contact_form']['send_btn'] ?></button>
                </div>
            </form>
        </div>
        <!--</div>-->
    </div>
</section>