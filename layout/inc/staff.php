<section id="staff" data-section-name="staff">
    <div class="container-fluid">
        <div class="col-12 col-md-6 m-auto pd-0">
            <div class="row text-title f-black"><span class="text-underline m-auto">Our Staff</span></div>
        </div>
        <div class="w-100 mt-5"></div>
        <div class="col-12 col-md-8 m-auto pd-0">
            <div class="text-header">
                <span class="t1">Japanese Staff</span>
            </div>
            <div class="w-100 mt-3"></div>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img-staff"><img style="position: relative;top: -42px;" src="./assets/image/staff/nakata.jpg"></div>
                        <div class="body">
                            <div class="w-100 text-left text-bold">中田　貴將</div>
                            <div class="w-100 text-left">
                                <p class="">株式会社TOVHO代表取締役t</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-staff"><img src="./assets/image/staff/boss.png"></div>
                        <div class="body">
                            <div class="w-100 text-left text-bold">坂本　光隆</div>
                            <div class="w-100 text-left">
                                <p class="">Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-staff"><img style="position: relative;top: -42px;" src="./assets/image/staff/minami.png"></div>
                        <div class="body">
                            <div class="w-100 text-left text-bold">酒井　南</div>
                            <div class="w-100 text-left">
                                <p class="">Japan Office</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination invisible"></div>
            </div>
        </div>

        <div class="col-12 col-md-8 m-auto pd-0">
            <div class="text-header">
                <span class="t1">Thai Staff</span>
            </div>
            <div class="w-100 mt-3"></div>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php for ($i = 1; $i < 6; $i++) { ?>
                        <div class="swiper-slide">
                            <div class="img-staff"><img src="./assets/image/staff/<?= $i ?>.jpg"></div>
                            <div class="body">
                                <div class="w-100 text-left text-bold">Name</div>
                                <div class="w-100 text-left">
                                    <p class="lead">xxxxxxxxxxxxxxxxx</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>