<?php
include ('config.php');
$pageTitle = site_text('BOUHAMRA CLINIC', 'بوحمره كلينك');
$pageName = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include('head.php')?></head>
<body>
<!-- ========================================= Main Header Start ========================================= -->
<?php include('header.php');?>
<!-- Main Header End -->

<!-- ========================================= About The Clinic Start ========================================= -->
<section id="about_clinic" class="main_sction about_clinic_sec">
    <div class="container">
        <div class="abt_clin_cont">
            <h1 class="sec_title text-center"><?=site_text('about the clinic', 'عن العيادة');?></h1>
            <div class="abt_clin_desc"><?=site_text('As one of the leading clinic in Kuwait, Bouhamra Clinic continues to expand in response to the growing health care needs of the people in Kuwait. Our value statement is Not just Healthcare.', 'باعتبارها إحدى العيادات الرائدة في الكويت، تواصل عيادة بوحمرة التوسع في تلبية احتياجات الرعاية الصحية المتزايدة للشعب الكويتي. بيان القيمة لدينا ليس فقط الرعاية الصحية.');?></div>
        </div>
    </div>
</section>
<!-- About The Clinic End -->


<!-- ========================================= Departments Section Start ========================================= -->
<section class="main_sction departs_sec" style="background-image: url('img/home_page/depart_sec/dep_sec_bg.jpg');">
    <div class="container">
        <div class="dep_sec_cont">
            <div class="tabs_btns_cont">
                <div class="tab_intro">
                    <div class="tabs_title"><?=site_text('Departments ', 'الأقسام');?></div>
                    <div class="tabs_intro"><?=site_text('Bouhamra Clinic is covering a wide range of required departments as:', 'عيادة بوحمرة تغطي مجموعة واسعة من الأقسام المطلوبة على النحو التالي:');?></div>
                </div>
                <!--tabs btns-->
                <div class="dep_tabs_btns">
                    <div class="sin_tab_btn active" tab="01"><?=site_text('Dermatology & Venereology', 'الأمراض الجلدية والتناسلية');?></div>
                    <div class="sin_tab_btn" tab="02"><?=site_text('Skin Care', 'العناية بالبشرة');?></div>
                    <div class="sin_tab_btn" tab="03"><?=site_text('Plastic Surgery', 'جراحة تجميلية');?></div>
                    <div class="sin_tab_btn" tab="04"><?=site_text('Laser Therapy', 'العلاج بالليزر');?></div>
                    <div class="sin_tab_btn" tab="05"><?=site_text('Dental Care', 'العناية بالأسنان');?></div>
                    <div class="sin_tab_btn" tab="06"><?=site_text('Laboratory & Pathology', 'مختبر وعلم الأمراض');?></div>
                </div>
            </div>
            <div class="tabs_contents_cont">
                <div class="sin_tab_cont" tab="01">
                    <div class="tab_detail">
                        <div class="tab_det_ttle"><?=site_text('Dermatology & Venereology', 'الأمراض الجلدية والتناسلية');?></div>
                        <div class="tab_det_desc"><?=site_text('Venereology is a branch of medicine that is concerned with the study and treatment of sexually transmitted diseases. The name derives from Roman goddess Venus, associated with love, beauty and fertility. A physician specializing in venereology is called a venereologist. The specialty is usually combined with dermatology.', 'علم التناسلية هو فرع من فروع الطب التي تعنى بدراسة وعلاج الأمراض المنقولة عن طريق الاتصال الجنسي. اسم مستمد من إلهة فينوس الرومانية، المرتبطة الحب والجمال والخصوبة. ويختص الطبيب المتخصص في علم التناسلية بعلم الأمراض الوريدية. وعادة ما يتم الجمع بين التخصص مع الأمراض الجلدية.');?></div>
                        <a href="dermatology.php" class="main_btn tab_read_more"><?=site_text('Read More', 'قراءة المزيد');?></a>
                    </div>
                    <div class="tab_img" style="background-image: url('img/home_page/depart_tabs/tab_img_01.jpg');"></div>
                </div>
                <div class="sin_tab_cont" tab="02">
                    <div class="tab_detail">
                        <div class="tab_det_ttle"><?=site_text('Skin Care', 'العناية بالبشرة');?></div>
                        <div class="tab_det_desc"><?=site_text('Venereology is a branch of medicine that is concerned with the study and treatment of sexually transmitted diseases. The name derives from Roman goddess Venus, associated with love, beauty and fertility. A physician specializing in venereology is called a venereologist. The specialty is usually combined with dermatology.', 'علم التناسلية هو فرع من فروع الطب التي تعنى بدراسة وعلاج الأمراض المنقولة عن طريق الاتصال الجنسي. اسم مستمد من إلهة فينوس الرومانية، المرتبطة الحب والجمال والخصوبة. ويختص الطبيب المتخصص في علم التناسلية بعلم الأمراض الوريدية. وعادة ما يتم الجمع بين التخصص مع الأمراض الجلدية.');?></div>
                        <a href="#" class="main_btn tab_read_more"><?=site_text('Read More', 'قراءة المزيد');?></a>
                    </div>
                    <div class="tab_img" style="background-image: url('img/home_page/depart_tabs/tab_img_01.jpg');"></div>
                </div>
                <div class="sin_tab_cont" tab="03">
                    <div class="tab_detail">
                        <div class="tab_det_ttle"><?=site_text('Plastic Surgery', 'جراحة تجميلية');?></div>
                        <div class="tab_det_desc"><?=site_text('Venereology is a branch of medicine that is concerned with the study and treatment of sexually transmitted diseases. The name derives from Roman goddess Venus, associated with love, beauty and fertility. A physician specializing in venereology is called a venereologist. The specialty is usually combined with dermatology.', 'علم التناسلية هو فرع من فروع الطب التي تعنى بدراسة وعلاج الأمراض المنقولة عن طريق الاتصال الجنسي. اسم مستمد من إلهة فينوس الرومانية، المرتبطة الحب والجمال والخصوبة. ويختص الطبيب المتخصص في علم التناسلية بعلم الأمراض الوريدية. وعادة ما يتم الجمع بين التخصص مع الأمراض الجلدية.');?></div>
                        <a href="#" class="main_btn tab_read_more"><?=site_text('Read More', 'قراءة المزيد');?></a>
                    </div>
                    <div class="tab_img" style="background-image: url('img/home_page/depart_tabs/tab_img_01.jpg');"></div>
                </div>
                <div class="sin_tab_cont" tab="04">
                    <div class="tab_detail">
                        <div class="tab_det_ttle"><?=site_text('Laser Therapy', 'العلاج بالليزر');?></div>
                        <div class="tab_det_desc"><?=site_text('Venereology is a branch of medicine that is concerned with the study and treatment of sexually transmitted diseases. The name derives from Roman goddess Venus, associated with love, beauty and fertility. A physician specializing in venereology is called a venereologist. The specialty is usually combined with dermatology.', 'علم التناسلية هو فرع من فروع الطب التي تعنى بدراسة وعلاج الأمراض المنقولة عن طريق الاتصال الجنسي. اسم مستمد من إلهة فينوس الرومانية، المرتبطة الحب والجمال والخصوبة. ويختص الطبيب المتخصص في علم التناسلية بعلم الأمراض الوريدية. وعادة ما يتم الجمع بين التخصص مع الأمراض الجلدية.');?></div>
                        <a href="#" class="main_btn tab_read_more"><?=site_text('Read More', 'قراءة المزيد');?></a>
                    </div>
                    <div class="tab_img" style="background-image: url('img/home_page/depart_tabs/tab_img_01.jpg');"></div>
                </div>
                <div class="sin_tab_cont" tab="05">
                    <div class="tab_detail">
                        <div class="tab_det_ttle"><?=site_text('Dental Care', 'العناية بالأسنان');?></div>
                        <div class="tab_det_desc"><?=site_text('Venereology is a branch of medicine that is concerned with the study and treatment of sexually transmitted diseases. The name derives from Roman goddess Venus, associated with love, beauty and fertility. A physician specializing in venereology is called a venereologist. The specialty is usually combined with dermatology.', 'علم التناسلية هو فرع من فروع الطب التي تعنى بدراسة وعلاج الأمراض المنقولة عن طريق الاتصال الجنسي. اسم مستمد من إلهة فينوس الرومانية، المرتبطة الحب والجمال والخصوبة. ويختص الطبيب المتخصص في علم التناسلية بعلم الأمراض الوريدية. وعادة ما يتم الجمع بين التخصص مع الأمراض الجلدية.');?></div>
                        <a href="#" class="main_btn tab_read_more"><?=site_text('Read More', 'قراءة المزيد');?></a>
                    </div>
                    <div class="tab_img" style="background-image: url('img/home_page/depart_tabs/tab_img_01.jpg');"></div>
                </div>
                <div class="sin_tab_cont" tab="06">
                    <div class="tab_detail">
                        <div class="tab_det_ttle"><?=site_text('Laboratory & Pathology', 'مختبر وعلم الأمراض');?></div>
                        <div class="tab_det_desc"><?=site_text('Venereology is a branch of medicine that is concerned with the study and treatment of sexually transmitted diseases. The name derives from Roman goddess Venus, associated with love, beauty and fertility. A physician specializing in venereology is called a venereologist. The specialty is usually combined with dermatology.', 'علم التناسلية هو فرع من فروع الطب التي تعنى بدراسة وعلاج الأمراض المنقولة عن طريق الاتصال الجنسي. اسم مستمد من إلهة فينوس الرومانية، المرتبطة الحب والجمال والخصوبة. ويختص الطبيب المتخصص في علم التناسلية بعلم الأمراض الوريدية. وعادة ما يتم الجمع بين التخصص مع الأمراض الجلدية.');?></div>
                        <a href="#" class="main_btn tab_read_more"><?=site_text('Read More', 'قراءة المزيد');?></a>
                    </div>
                    <div class="tab_img" style="background-image: url('img/home_page/depart_tabs/tab_img_01.jpg');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Departments Section End -->

<!-- ========================================= Our Team Section Start ========================================= -->
<section class="main_sction our_team_sec">
    <div class="container">
        <div class="our_tm_cont">
            <div class="our_team_intro">
                <div class="our_team_ttle"><?=site_text('meet', 'التقي');?> <b><?=site_text('our team', 'بأطبائنا');?></b></div>
                <div class="our_team_desc"><?=site_text('Lorem ipsum amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'باعتبارها إحدى العيادات الرائدة في الكويت، تواصل عيادة بوحمرة التوسع في تلبية احتياجات الرعاية الصحية المتزايدة للشعب الكويتي. بيان القيمة لدينا ليس فقط الرعاية الصحية.');?></div>
                <div class="rd_more_btn_cont"><a href="doctors.php" class="main_btn"><?=site_text('Read More', 'قراءة المزيد');?></a></div>

            </div>
            <div class="our_team_imgs">
                <div class="sin_doc_img" style="background-image: url('img/home_page/our_team/01.jpg');">
                    <div class="sin_doc_det">
                        <div class="doc_name"><?=site_text('Dr. angela', 'د. أنجيلا');?></div>
                        <div class="doc_spec"><?=site_text('Dermatologist', 'الأمراض الجلدية');?></div>
                        <div class="doc_soc_md">
                            <ul class="doc_sm_list">
                                <li><a href="#" target="_blank" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sin_doc_img" style="background-image: url('img/home_page/our_team/02.jpg');">
                    <div class="sin_doc_det">
                        <div class="doc_name"><?=site_text('Dr. angela', 'د. أنجيلا');?></div>
                        <div class="doc_spec"><?=site_text('dentistry', 'طب اسنان');?></div>
                        <div class="doc_soc_md">
                            <ul class="doc_sm_list">
                                <li><a href="#" target="_blank" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sin_doc_img" style="background-image: url('img/home_page/our_team/03.jpg');">
                    <div class="sin_doc_det">
                        <div class="doc_name"><?=site_text('Dr. John', 'د. جون');?></div>
                        <div class="doc_spec"><?=site_text('Dermatologist', 'الأمراض الجلدية');?></div>
                        <div class="doc_soc_md">
                            <ul class="doc_sm_list">
                                <li><a href="#" target="_blank" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sin_doc_img" style="background-image: url('img/home_page/our_team/04.jpg');">
                    <div class="sin_doc_det">
                        <div class="doc_name"><?=site_text('Dr. John', 'د. جون');?></div>
                        <div class="doc_spec"><?=site_text('Dermatologist', 'الأمراض الجلدية');?></div>
                        <div class="doc_soc_md">
                            <ul class="doc_sm_list">
                                <li><a href="#" target="_blank" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sin_doc_img" style="background-image: url('img/home_page/our_team/05.jpg');">
                    <div class="sin_doc_det">
                        <div class="doc_name"><?=site_text('Dr. angela', 'د. أنجيلا');?></div>
                        <div class="doc_spec"><?=site_text('Dermatologist', 'الأمراض الجلدية');?></div>
                        <div class="doc_soc_md">
                            <ul class="doc_sm_list">
                                <li><a href="#" target="_blank" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sin_doc_img" style="background-image: url('img/home_page/our_team/06.jpg');">
                    <div class="sin_doc_det">
                        <div class="doc_name"><?=site_text('Dr. Aparna', 'د. آبارنا');?></div>
                        <div class="doc_spec"><?=site_text('Dermatology and Venerology', 'الأمراض الجلدية والتناسلية');?></div>
                        <div class="doc_soc_md">
                            <ul class="doc_sm_list">
                                <li><a href="#" target="_blank" class="facebook_lk"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank" class="twitter_lk"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" class="google-plus_lk"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team Section End -->

<!-- ========================================= Testimonial Slider Start ========================================= -->
<section class="main_sction testim_sec" style="background-image: url('img/home_page/testim_slider/01.jpg');">
    <div class="sec_overlay">
        <div class="container">
            <div class="testim_cont">
                <div class="testim_ttle"><?=site_text('happy patients say', 'اقوال المرضى');?></div>
                <div class="swiper-container testim_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sin_testim_silde">
                            <div class="sin_patient_testim">
                                <div class="patient_txt"><cite><?=site_text('I have never felt comfortable of my dental care in any place like Bouhamra Clinic, they know exactly what is the meaning of medical care that any patient may need', 'لم أشعر أبدا بالراحة من العناية بالأسنان في أي مكان مثل عيادة بوحمرة، أنهم يعرفون بالضبط ما هو معنى الرعاية الطبية التي قد يحتاجها أي مريض.');?></cite></div>
                                <div class="patient_name"><b><?=site_text('Hima John', 'هيما جون');?></b></div>
                                <div class="patient_job"><?=site_text('Senior Architect', 'مهندس معماري');?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Slider End -->

<!-- ========================================= Message - FAQ Section Start ========================================= -->
<section id="cont_clinic" class="main_sction mess_faq_sec">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="msg_faq_con msg_frm_cont">
                    <div class="msg_faq_intro">
                        <div class="msg_faq_ttle"><?=site_text('Send Us A Message', 'راسلنا');?></div>
                        <div class="msg_faq_bio"><?=site_text('You can send us a message with any inquiry can come in your mind.', 'يمكنك أن ترسل لنا رسالة مع أي استفسار يمكن أن يخطر لك.');?></div>
                    </div>
                    <!--Send Us Message Form-->
                    <form class="send_msg_form">
                        <div class="form_ipt_cont">
                            <label><?=site_text('Name:', 'الاسم:');?></label>
                            <input name="name" type="text" placeholder="<?=site_text('Enter Your Full Name', 'الاسم الكامل');?>">
                        </div>
                        <div class="form_ipt_cont">
                            <label><?=site_text('Email:', 'البريد الالكتروني:');?></label>
                            <input name="email" type="email" placeholder="<?=site_text('Enter Your Email Address', 'عنوان البريد الالكتروني');?>">
                        </div>
                        <div class="form_ipt_cont">
                            <label><?=site_text('Mobile:', 'الموبايل:');?></label>
                            <input name="phone" type="text" placeholder="<?=site_text('Enter Your Mobile Number', 'رقم الموبايل');?>">
                        </div>
                        <div class="form_ipt_cont">
                            <label><?=site_text('Message:', 'الرسالة:');?></label>
                            <input type="text" name="message" placeholder="<?=site_text('Enter The Message', 'الرسالة');?>"></input>
                        </div>
                        <div class="frm_confirm">
                            <input type="submit" class="main_btn" value="<?=site_text('Send', 'ارسال');?>">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="msg_faq_con">
                    <div class="msg_faq_intro">
                        <div class="msg_faq_ttle"><?=site_text('Have Some Questions?', 'لديك اسئلة ؟');?></div>
                        <div class="msg_faq_bio"><?=site_text('You may find a lot of answers on frequesnt asked questions ', 'قد تجد الكثير من الإجابات على الأسئلة الشائعة');?></div>
                    </div>
                    <!--FAQ Accordion-->
                    <div class="faq_accordion">
                        <div class="sin_accdn">
                            <div class="acc_ttle active"><?=site_text('Will i be able to stay with my doctor enogh time to explain my case?', 'هل سأكون قادرا على البقاء مع طبيبي ما يكفي من الوقت لشرح قضيتي؟');?></div>
                            <div class="acc_desc"><?=site_text('As one of the leading clinic in Kuwait, Bouhamra Clinic continues to expand in response to the growing health care needs of the people in Kuwait. Our value statement is Not just Healthcare. As one of the leading clinic in Kuwait, Bouhamra Clinic continues to expand in response to the growing health care needs of the people in Kuwait. Our value statement is Not just Healthcare.', 'باعتبارها إحدى العيادات الرائدة في الكويت، تواصل عيادة بوحمرة التوسع في تلبية احتياجات الرعاية الصحية المتزايدة للشعب الكويتي. بيان القيمة لدينا ليس فقط الرعاية الصحية. باعتبارها إحدى العيادات الرائدة في الكويت، تواصل عيادة بوحمرة التوسع في تلبية احتياجات الرعاية الصحية المتزايدة للشعب الكويتي. بيان القيمة لدينا ليس فقط الرعاية الصحية.');?></div>
                        </div>
                        <div class="sin_accdn">
                            <div class="acc_ttle"><?=site_text('Will i be able to stay with my doctor enogh time to explain my case?', 'هل سأكون قادرا على البقاء مع طبيبي ما يكفي من الوقت لشرح قضيتي؟');?></div>
                            <div class="acc_desc"><?=site_text('As one of the leading clinic in Kuwait, Bouhamra Clinic continues to expand in response to the growing health care needs of the people in Kuwait. Our value statement is Not just Healthcare. As one of the leading clinic in Kuwait, Bouhamra Clinic continues to expand in response to the growing health care needs of the people in Kuwait. Our value statement is Not just Healthcare.', 'باعتبارها إحدى العيادات الرائدة في الكويت، تواصل عيادة بوحمرة التوسع في تلبية احتياجات الرعاية الصحية المتزايدة للشعب الكويتي. بيان القيمة لدينا ليس فقط الرعاية الصحية. باعتبارها إحدى العيادات الرائدة في الكويت، تواصل عيادة بوحمرة التوسع في تلبية احتياجات الرعاية الصحية المتزايدة للشعب الكويتي. بيان القيمة لدينا ليس فقط الرعاية الصحية.');?></div>
                        </div>
                        <div class="sin_accdn">
                            <div class="acc_ttle"><?=site_text('Will i be able to stay with my doctor enogh time to explain my case?', 'هل سأكون قادرا على البقاء مع طبيبي ما يكفي من الوقت لشرح قضيتي؟');?></div>
                            <div class="acc_desc"><?=site_text('As one of the leading clinic in Kuwait, Bouhamra Clinic continues to expand in response to the growing health care needs of the people in Kuwait. Our value statement is Not just Healthcare. As one of the leading clinic in Kuwait, Bouhamra Clinic continues to expand in response to the growing health care needs of the people in Kuwait. Our value statement is Not just Healthcare.', 'باعتبارها إحدى العيادات الرائدة في الكويت، تواصل عيادة بوحمرة التوسع في تلبية احتياجات الرعاية الصحية المتزايدة للشعب الكويتي. بيان القيمة لدينا ليس فقط الرعاية الصحية. باعتبارها إحدى العيادات الرائدة في الكويت، تواصل عيادة بوحمرة التوسع في تلبية احتياجات الرعاية الصحية المتزايدة للشعب الكويتي. بيان القيمة لدينا ليس فقط الرعاية الصحية.');?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Message - FAQ Section End -->

<!-- ========================================= Location Section Start ========================================= -->
<div class="map_cont">
    <div id="loc_map"></div>
</div>
<div class="boh_work_time text-center">
    <div class="container">
        <div class="wday_ico"><img class="img-responsive" src="img/home_page/wday_ico.png"></div>
        <div class="sin_wday">
            <span><?=site_text('Saturday to Thursday :', 'السبت الى الخميس: ');?></span>
            <span>08:30 - 12:30, 16:30 - 20:30</span>
        </div>
        <div class="sin_wday">
            <span><?=site_text('Friday :', 'الجمعة :');?></span>
            <span><?=site_text('Closed', 'عطلة');?></span>
        </div>
    </div>
</div>
<script>
    function bouhamraMap() {
        var mapProp= {
            center:new google.maps.LatLng(29.332423, 48.043734),
            zoom:17
        };
        var map=new google.maps.Map(document.getElementById("loc_map"),mapProp);
        var myLatLng = {lat: 29.332423, lng: 48.043734};
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Bouhamra Clinic'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj2BpkNnoDi2jn8kOqX-uEsdPqbShXhqM&callback=bouhamraMap"></script>
<!-- Location Section End -->

<!-- ========================================= Footer Start ========================================= -->
<?php include('footer.php');?>
<!-- Footer End -->
</body>
</html>