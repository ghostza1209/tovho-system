<section id="contactUs" data-section-name="contactus" class="pb-4 pt-custom-breakpoint">
    <div class="container-fluid">
        <!--<div class="row">-->
        <div class="col-md-5 m-auto">
            <div class="row text-title f-black"><span class="text-underline m-auto">Contact Us</span></div>
            <div class="row mt-4 justify-content-center">
                <p class="text-center">
                    サービスについてのお問い合わせ、お見積り、ご質問、ご相談はこちらのフォームより<br/>
                    承っております。内容確認後、担当者よりご連絡させていただきます。
                </p>
            </div>
        </div>
        <!--</div>-->
        <!--<div class="row">-->
        <div class="col-md-8 mr-auto ml-auto px-0 between-140">
            <form class="my-form-style" action="./sendMail.php" method="post">
                <div class="form-group">
                    <label class="require-label" for="name">お名前</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Example : Por">
                </div>
                <div class="form-group">
                    <label class="require-label" for="email">返信用メールアドレス</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Example : Example@hotmail.com">
                </div>
                <div class="form-group mb-lg-0">
                    <label class="require-label" >お問い合わせ内容について</label>
                </div>
                <div class="form-group">
                    <label for="aboutWebsite">ウェブサイト、システムについて</label>
                    <select class="form-control" name="aboutWebsite">
                        <option selected>Please select</option>
                        <option value="サイト作成">サイト作成</option>
                        <option value="スマホサイト">スマホサイト</option>
                        <option value="オリジナルブログ">オリジナルブログ</option>
                        <option value="メールシステム">メールシステム</option>
                        <option value="その他システム">その他システム</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="aboutGraphics">グラフィックについて</label>
                    <select class="form-control" name="aboutGraphics">
                        <option selected>Please select</option>
                        <option value="ロゴ作成">ロゴ作成</option>
                        <option value="ダイレクトメール">ダイレクトメール</option>
                        <option value="ラインスタンプ">ラインスタンプ</option>
                        <option value="キャラクターデザイン">キャラクターデザイン</option>
                        <option value="イラストレーター">イラストレーター</option>
                        <option value="デザインその他">デザインその他</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="require-label">ご相談内容、ご要望をご記入ください。a</label>
                    <textarea placeholder="type here" class="form-control" name="description" rows="4"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-lg btn-dark ">送信する</button>
                </div>
            </form>
        </div>
        <!--</div>-->
    </div>
</section>