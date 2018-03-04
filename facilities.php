<?php
include ('config.php');
$pageTitle = site_text('FACILITIES', 'المرافق');
$pageName = 'facilities';
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include('head.php')?></head>
<body>
<!-- ========================================= Main Header Start ========================================= -->
<?php include('header.php');?>
<!-- Main Header End -->

<!-- ========================================= Facilities Page Start ========================================= -->
<section class="main_sction facilities_sec">
    <div class="container">
        <div class="facil_main_cont">
            <div class="facil_ttle"><?=site_text('Facilities', 'المرافق');?></div>
            <div class="facil_tab_btns text-center">
                <div class="fac_tb_btn phot_tb_btn active" tab="01"><?=site_text('Photos', 'الصور');?></div>
                <div class="fac_tb_btn vid_tb_btn" tab="02"><?=site_text('Videos', 'الفيديو');?></div>
            </div>
            <div class="facil_tab_cont">
                <div class="fac_tb_cont phot_tb_cont" tab="01">
                    <div class="fac_sld_btns">
                        <!-- Slider -->
                        <div class="swiper-container faci_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide sld_tab_btn active" sld_tab="01"><?=site_text('dermatology & venereology', 'الأمراض الجلدية والتناسلية');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="02"><?=site_text('Dental', 'الأسنان');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="03"><?=site_text('Lobby', 'الردهة');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="04"><?=site_text('Pathology & Laboratory', 'علم الأمراض والمختبرات');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="05"><?=site_text('Scanning', 'المسح');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="06"><?=site_text('Kids Area', 'منطقة الاطفال');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="07"><?=site_text('Waiting Rooms', 'غرف الانتظار');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="08"><?=site_text('Laser Therapy', 'العلاج بالليزر');?></div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="fac_sld_cont">
                        <div class="sin_sld_cont" sld_tab="01">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/01.jpg" data-src="#mt01_st01_01" data-fancybox="mt01_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st01_01">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/01.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/02.jpg" data-src="#mt01_st01_02" data-fancybox="mt01_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st01_02">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/02.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/03.jpg" data-src="#mt01_st01_03" data-fancybox="mt01_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st01_03">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/03.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/04.jpg" data-src="#mt01_st01_04" data-fancybox="mt01_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st01_04">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/04.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/05.jpg" data-src="#mt01_st01_05" data-fancybox="mt01_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st01_05">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/05.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/06.jpg" data-src="#mt01_st01_06" data-fancybox="mt01_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st01_06">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/06.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="02">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/01.jpg" data-src="#mt01_st02_01" data-fancybox="mt01_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st02_01">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/01.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/02.jpg" data-src="#mt01_st02_02" data-fancybox="mt01_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st02_02">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/02.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/03.jpg" data-src="#mt01_st02_03" data-fancybox="mt01_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st02_03">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/03.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/04.jpg" data-src="#mt01_st02_04" data-fancybox="mt01_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st02_04">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/04.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/05.jpg" data-src="#mt01_st02_05" data-fancybox="mt01_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st02_05">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/05.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/06.jpg" data-src="#mt01_st02_06" data-fancybox="mt01_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st02_06">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/06.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="03">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/01.jpg" data-src="#mt01_st03_01" data-fancybox="mt01_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st03_01">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/01.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/02.jpg" data-src="#mt01_st03_02" data-fancybox="mt01_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st03_02">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/02.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/03.jpg" data-src="#mt01_st03_03" data-fancybox="mt01_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st03_03">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/03.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/04.jpg" data-src="#mt01_st03_04" data-fancybox="mt01_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st03_04">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/04.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/05.jpg" data-src="#mt01_st03_05" data-fancybox="mt01_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st03_05">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/05.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/06.jpg" data-src="#mt01_st03_06" data-fancybox="mt01_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st03_06">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/06.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="04">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/01.jpg" data-src="#mt01_st04_01" data-fancybox="mt01_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st04_01">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/01.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/02.jpg" data-src="#mt01_st04_02" data-fancybox="mt01_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st04_02">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/02.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/03.jpg" data-src="#mt01_st04_03" data-fancybox="mt01_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st04_03">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/03.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/04.jpg" data-src="#mt01_st04_04" data-fancybox="mt01_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st04_04">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/04.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/05.jpg" data-src="#mt01_st04_05" data-fancybox="mt01_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st04_05">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/05.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/06.jpg" data-src="#mt01_st04_06" data-fancybox="mt01_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st04_06">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/06.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="05">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/01.jpg" data-src="#mt01_st05_01" data-fancybox="mt01_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st05_01">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/01.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/02.jpg" data-src="#mt01_st05_02" data-fancybox="mt01_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st05_02">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/02.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/03.jpg" data-src="#mt01_st05_03" data-fancybox="mt01_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st05_03">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/03.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/04.jpg" data-src="#mt01_st05_04" data-fancybox="mt01_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st05_04">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/04.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/05.jpg" data-src="#mt01_st05_05" data-fancybox="mt01_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st05_05">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/05.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/06.jpg" data-src="#mt01_st05_06" data-fancybox="mt01_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st05_06">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/06.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="06">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/01.jpg" data-src="#mt01_st06_01" data-fancybox="mt01_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st06_01">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/01.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/02.jpg" data-src="#mt01_st06_02" data-fancybox="mt01_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st06_02">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/02.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/03.jpg" data-src="#mt01_st06_03" data-fancybox="mt01_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st06_03">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/03.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/04.jpg" data-src="#mt01_st06_04" data-fancybox="mt01_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st06_04">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/04.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/05.jpg" data-src="#mt01_st06_05" data-fancybox="mt01_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st06_05">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/05.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="img/facilities/photo_tabs/06.jpg" data-src="#mt01_st06_06" data-fancybox="mt01_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                        </div>
                                    </a>
                                    <div class="faci_hidden_cont" id="mt01_st06_06">
                                        <div class="faci_ppup_img" style="background-image: url('img/facilities/photo_tabs/06.jpg')"></div>
                                        <div class="med_desc">
                                            <div class="med_ttle"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div>
                                            <div class="med_txt"><?=site_text('Our value is Not just Healthcare.', 'قيمتنا ليست مجرد الرعاية الصحية.');?></div>
                                            <ul class="med_share text-center">
                                                <li><a href="#" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fac_tb_cont vid_tb_cont" tab="02">
                    <div class="fac_sld_btns">
                        <!-- Slider -->
                        <div class="swiper-container faci_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide sld_tab_btn active" sld_tab="01"><?=site_text('dermatology & venereology', 'الأمراض الجلدية والتناسلية');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="02"><?=site_text('Dental', 'الأسنان');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="03"><?=site_text('Lobby', 'الردهة');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="04"><?=site_text('Pathology & Laboratory', 'علم الأمراض والمختبرات');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="05"><?=site_text('Scanning', 'المسح');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="06"><?=site_text('Kids Area', 'منطقة الاطفال');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="07"><?=site_text('Waiting Rooms', 'غرف الانتظار');?></div>
                                <div class="swiper-slide sld_tab_btn" sld_tab="08"><?=site_text('Laser Therapy', 'العلاج بالليزر');?></div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="fac_sld_cont">
                        <div class="sin_sld_cont" sld_tab="01">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st01">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="02">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st02">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="03">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st03">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="04">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st04">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="05">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st05">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sin_sld_cont" sld_tab="06">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/01.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/02.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/03.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/04.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/05.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <a href="https://www.youtube.com/embed/gC8orlfYC50" data-fancybox="mt02_st06">
                                        <div class="fci_sin_med" style="background-image: url('img/facilities/photo_tabs/06.jpg')">
                                            <div class="fci_sin_med_text"><?=site_text('Bouhamra Clinic', 'بوحمره كلينك');?></div><div class="vid_pl_ico"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Facilities Page End -->


<!-- ========================================= Footer Start ========================================= -->
<?php include('footer.php');?>
<!-- Footer End -->
</body>
</html>