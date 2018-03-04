<header class="main_header">
    <div class="sm_wbnv_cont">
        <!--Header Social Media-->
        <div class="head_smed">
            <div class="container">
                <div class="hd_sm_cont">
                    <div class="site_lang"><a href="<?=(isset($main_lang) && $main_lang == 'en')?'index.php?lang=ar':'index.php?lang=en'?>"><?=site_text('العربية', 'English');?></a></div>
                    <ul class="hd_sm_list"><?php include ('social_media.php')?></ul>
                </div>
            </div>
        </div>
        <!--Web Navbar-->
        <nav class="web_nav hidden-xs">
            <div class="container">
                <div class="wb_nv_cont">
                    <div class="nav_logo">
                        <a href="index.php">
                            <img class="img-responsive center-block" src="img/home_page/nav_log.png">
                        </a>
                    </div>
                    <div class="nav_lks">
                        <ul class="nav_lk_list">
                            <?php include ('web_navbar.php'); ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </nav>
    </div>
    <!--mobile Navbar-->
    <nav class="mob_nav visible-xs-block">
        <div class="container">
            <div class="mob_nv_cont">
                <div class="nav_logo">
                    <a href="index.php">
                        <img class="img-responsive center-block" src="img/home_page/nav_log.png">
                    </a>
                </div>
                <div class="mob_lks_cont">
                    <div class="mob_nv_btn"><i class="fas fa-bars"></i></div>
                    <ul class="mob_lks_list">
                        <?php include('mob_navbar.php');?>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </nav>
    <?php if (isset($pageName) && $pageName == 'home') { ?>
        <!-- ========================================= Homepage ========================================= -->
        <!--Header Slider-->
        <div class="swiper-container header_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sin_slide" style="background-image: url('img/home_page/head_slider/header_slider_01.jpg')">
                        <div class="container">
                            <div class="sin_slide_cont">
                                <div class="sin_slide_text">
                                    <div class="slide_ttle"><?=site_text('Because We Care', 'لأننا نهتم');?></div>
                                    <div class="slide_desc"><?=site_text('Create your medical profile for free and start a complete check up for free for the first time only.', 'انشىء ملفك الشخصي الطبي مجانا والبدء في فحص كامل مجانا لأول مرة فقط.');?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
        <!--Clinic Bio-->
        <div class="clinic_discip">
            <div class="sin_discip">
                <div class="discip_ico">
                    <img class="img-responsive center-block" src="img/home_page/disciplines/health_care.png">
                </div>
                <div class="discip_ttle"><?=site_text('Health Care', 'الرعاية الصحية');?></div>
                <div class="discip_desc"><?=site_text('A complete health care solution that suites all society segments.', 'حلول الرعاية الصحية الكاملة التي تناسب جميع شرائح المجتمع.');?></div>
            </div>
            <div class="sin_discip">
                <div class="discip_ico">
                    <img class="img-responsive center-block" src="img/home_page/disciplines/dental_care.png">
                </div>
                <div class="discip_ttle"><?=site_text('Dental Care', 'العناية بالأسنان');?></div>
                <div class="discip_desc"><?=site_text('We provide best dental care solutions to enjoy a Hollywood smile whenever you are.', 'نحن نقدم أفضل حلول العناية بالأسنان للاستمتاع بابتسامة هوليوود أكثر من اي وقت مضى.');?></div>
            </div>
            <div class="sin_discip">
                <div class="discip_ico">
                    <img class="img-responsive center-block" src="img/home_page/disciplines/skin_care.png">
                </div>
                <div class="discip_ttle"><?=site_text('Skin Care', 'العناية بالبشرة');?></div>
                <div class="discip_desc"><?=site_text('We provide a super skin care services that covers all the, ladies / men need.', 'نقدم خدمات العناية الفائقة بالبشرة وما تحتاجه النساء / الرجال.');?></div>
            </div>
        </div>
    <?php } ?>

    <?php if (isset($pageSubName) && $pageSubName == 'dermatology') { ?>
        <div class="subpage_header" style="background-image: url('img/depart_serv/dermatology_hd_bg.jpg')">
            <div class="container">
                <div class="hd_main_cont">
                    <div class="header_content">
                        <div class="header_ttle"><?=site_text('Dermatology', 'الأمراض الجلدية');?></div>
                        <div class="header_desc"><?=site_text('is the branch of medical science that deals with the diagnosis and treatment of skin diseases, its appendages (hair, nails) and adjoining mucous membrane (mouth, genital).', 'هو فرع من العلوم الطبية التي تتعامل مع تشخيص وعلاج الأمراض الجلدية، الزوائد لها. الشعر والأظافر. والغشاء المخاطي المجاورة. الفم، الأعضاء التناسلية.');?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if (isset($pageName) && $pageName == 'doctors') { ?>
        <div id="doctors_page" class="subpage_header<?=(isset($head_text) && $head_text == 'none'?' doc_fdet_hd':'');?>" style="background-image: url('img/depart_serv/doctors_hd_bg.jpg')">
            <?php if (isset($head_text) && $head_text != 'none') { ?>
                <div class="container">
                    <div class="hd_main_cont">
                        <div class="header_content">
                            <div class="header_ttle"><?=site_text('Health is the greatest gift, contentment the greatest wealth, faithfulness the best relationship.', 'الصحة هي أعظم هدية، الرضا أكبر ثروة، الإخلاص أفضل علاقة.');?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <?php if (isset($pageName) && $pageName == 'human_res') { ?>
        <div id="hr_page" class="subpage_header" style="background-image: url('img/hr_hd_bg.jpg')">
            <div class="container">
                <div class="hd_main_cont">
                    <div class="header_content">
                        <div class="hr_hd_text">
                            <div class="text1"><?=site_text('“Human Resources isn’t a thing we do. It’s the thing that runs our business.”', '"الموارد البشرية ليست شيئا نقوم به. "إنه الشيء الذي يدير أعمالنا. "');?></div>
                            <div class="text2"><?=site_text('“Do not hire a man who does your work for<br>money, but him who does it for the love of it.”', '"لا تستأجر رجلا يقوم بعملك مقابل المال، بل هو الذي يفعل ذلك لمحبته".');?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if (isset($pageName) && $pageName == 'facilities') { ?>
        <div id="facilities_page" class="subpage_header" style="background-image: url('img/facilities/facil_hd_bg.jpg')">
            <div class="container">
                <div class="hd_main_cont">
                    <div class="header_content">
                        <div class="facil_hd_text"><?=site_text('“The art of medicine consists of amusing the patient while nature cures the disease.”', '“فن الطب هي التخفيف عن المريض في حين يشفى المريض طبيعيا من المرض.”');?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


</header>