<?php
include ('config.php');
$pageTitle = site_text('DERMATOLOGY & VENEREOLOGY', 'الأمراض الجلدية والتناسلية');
$pageName = 'depart_serv';
$pageSubName = 'dermatology';
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include('head.php')?></head>
<body>
<!-- ========================================= Main Header Start ========================================= -->
<?php include('header.php');?>
<!-- Main Header End -->

<!-- ========================================= Single Department Start ========================================= -->
<section class="main_sction">
    <div class="container">
        <div class="sin_dep_cont">
            <div class="sin_dep_ttle"><?=site_text('Dermatology & Venereology', 'الأمراض الجلدية والتناسلية');?></div>
            <div class="sin_dep_desc">
                <p><?=site_text('Conventional dermatological tests include : dermatological sampling techniques (skin scrapes) and microscopic examination (parasital infections), skin cytologic examination (bacteria, fungus, blood cells infiltration, tumor cells), examination with Wood\'s Lamp (dermatophytes infections), KOH wet smear (mycoses), medium DTM fungus culture (dermatophytes infections), other bacterial and fungus culture, PCR (identification of viral DNA, bacterial, fungal), serology (anti-fungus antibodies detection, rickettsia, protozoa), skin tissuue immunohistochemical evaluation, skin allergy testig (seric immunoglobulins, "patch" test). Modern diagnostic tests : dermatoscopy for pigmented skin lesions.Venereology is the branch of medical science that deals with the diagnosis and treatment of sexually transmitted diseases (STD) also called "venereal diseases".', 'وتشمل الاختبارات الجلدية التقليدية: تقنيات أخذ العينات الجلدية (خدوش الجلد) والفحص المجهري (الالتهابات الطفيلية)، فحص الجلد الخلوي (البكتيريا والفطريات وتسلل خلايا الدم والخلايا السرطانية)، والفحص مع مصباح وود (التهابات الجلد)، تشوه كوه الرطب (الفطريات )، ثقافة دتم الفطريات المتوسطة(التهابات الجلدية)، ثقافة البكتريا والفطريات الأخرى، ير (تحديد الحمض النووي الفيروسي، البكتيرية، الفطرية)، الأمصال (مكافحة الفطريات الكشف عن الأجسام المضادة، الريكيتسيا، البروتوزوا)، الجلد تيسو تقييم المناعية، حساسية الجلد تستيغ (المناعي سيريك التصحيح اختبار)..الاختبارات التشخيصية الحديثة. ديرماتوسكوبي لآفات الجلد المصطبغة.');?></p>
                <br>
                <p><?=site_text('Venereology is the branch of medical science that deals with the diagnosis and treatment of sexually transmitted diseases (STD) also called "venereal diseases".', 'علم التناسلية هو فرع من العلوم الطبية التي تتعامل مع تشخيص وعلاج الأمراض المنقولة عن طريق الاتصال الجنسي (ستد) وتسمى أيضا "الأمراض التناسلية"..');?></p>
            </div>
        </div>
        <div class="sin_dep_cont">
            <div class="sin_dep_ttle"><?=site_text('Department Doctors', 'أطباء القسم');?></div>
            <div class="dep_doc_cont">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="dep_sin_doc text-center">
                            <div class="dep_ttle"><?=site_text('Dermatology', 'الأمراض الجلدية');?></div>
                            <div class="doc_img" style="background-image: url('img/depart_serv/dep_doc_01.jpg')"></div>
                            <div class="doc_detls">
                                <div class="doc_detls_name"><?=site_text('Dr. Halwani Bahja', 'د. حلواني بهجة');?></div>
                                <div class="doc_detls_spec"><?=site_text('Dermatology Specialist', 'اخصائي امراض جلدية');?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="dep_sin_doc text-center">
                            <div class="dep_ttle"><?=site_text('Dermatology', 'الأمراض الجلدية');?></div>
                            <div class="doc_img" style="background-image: url('img/depart_serv/dep_doc_01.jpg')"></div>
                            <div class="doc_detls">
                                <div class="doc_detls_name"><?=site_text('Dr. Halwani Bahja', 'د. حلواني بهجة');?></div>
                                <div class="doc_detls_spec"><?=site_text('Dermatology Specialist', 'اخصائي امراض جلدية');?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="dep_sin_doc text-center">
                            <div class="dep_ttle"><?=site_text('Dermatology', 'الأمراض الجلدية');?></div>
                            <div class="doc_img" style="background-image: url('img/depart_serv/dep_doc_01.jpg')"></div>
                            <div class="doc_detls">
                                <div class="doc_detls_name"><?=site_text('Dr. Halwani Bahja', 'د. حلواني بهجة');?></div>
                                <div class="doc_detls_spec"><?=site_text('Dermatology Specialist', 'اخصائي امراض جلدية');?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sin_dep_cont">
            <div class="sin_dep_ttle"><?=site_text('common diseases', 'الأمراض الشائعة');?></div>
            <div class="dep_doc_cont">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="dep_sin_doc text-center dep_sin_diseases">
                            <a data-fancybox="com_dis_img" data-src="#com_dis_01">
                                <div class="doc_img" style="background-image: url('img/depart_serv/common_diseases/com_dis_01.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Cold Sores', 'القروح الباردة');?></div>
                                    <div class="doc_detls_spec"><?=site_text('What Are Cold Sores?', 'ما هي القروح الباردة؟');?></div>
                                </div>
                            </a>
                            <div class="dis_hidden_content" id="com_dis_01">
                                <div class="com_dis_ppcont">
                                    <div class="dis_det_img">
                                        <img class="img-responsive center-block" src="img/depart_serv/common_diseases/com_dis_01.jpg">
                                    </div>
                                    <div class="dis_det_desc">
                                        <div class="dis_name_ttle"><?=site_text('Cold Sores', 'القروح الباردة');?></div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('What Are Cold Sores?', 'ما هي القروح الباردة؟');?></div>
                                            <div class="sin_dis_txt"><?=site_text('Despite the name, when you get painful blisters called cold sores, don\'t blame your cold. Cold sores are caused by a virus, but not the kind that makes you sniffle and sneeze. Instead, they happen because of an infection with the herpes simplex virus (HSV).', 'على الرغم من الاسم، عندما تحصل على بثور مؤلمة تسمى القروح الباردة، لا تلوم البرد. وتسبب القروح الباردة فيروس، ولكن ليس هذا النوع الذي يجعلك سنيفل والعطس. بدلا من ذلك، تحدث بسبب عدوى فيروس الهربس البسيط (HSV).');?></div>
                                        </div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('Symptoms', 'الأعراض');?></div>
                                            <div class="sin_dis_txt"><?=site_text('Cold sores, also called fever blisters, can show up anywhere on your body. They\'re most likely to appear on the outside of your mouth and lips, but you can also find them on your nose, cheeks, or fingers. After the blisters form, you may notice that they break and ooze.', 'القروح الباردة، وتسمى أيضا بثور الحمى، يمكن أن تظهر في أي مكان على جسمك. انهم على الأرجح أن تظهر على السطح الخارجي من الفم والشفتين، ولكن يمكنك أيضا العثور عليها على أنفك، الخدين، أو الأصابع. بعد شكل بثور، قد تلاحظ أنها كسر ونز.');?></div>
                                        </div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('Cold Sores treatment', 'علاج القروح الباردة');?></div>
                                            <div class="sin_dis_txt"><?=site_text('If you’ve ever had a cold sore, you know the signs. It starts with the tingling, then the edge of your lip or the corner of your mouth begins to burn. Then the outbreak: An ugly red sore appears. A few days later it breaks open and crusts over. They can turn up inside your mouth, too, causing pain along with white splotches.', 'إذا كان لديك أي وقت مضى التهاب البرد، وكنت أعرف علامات. ويبدأ مع وخز، ثم حافة الشفاه أو زاوية فمك يبدأ في حرق. ثم تفشي المرض: ظهور قرحة حمراء قبيحة. بعد بضعة أيام يكسر مفتوح وقشور أكثر. يمكن أن تتحول داخل فمك، أيضا، مما تسبب في الألم جنبا إلى جنب مع البقع البيضاء.');?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="dep_sin_doc text-center dep_sin_diseases">
                            <a data-fancybox="com_dis_img" data-src="#com_dis_02">
                                <div class="doc_img" style="background-image: url('img/depart_serv/common_diseases/com_dis_01.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Cold Sores', 'القروح الباردة');?></div>
                                    <div class="doc_detls_spec"><?=site_text('What Are Cold Sores?', 'ما هي القروح الباردة؟');?></div>
                                </div>
                            </a>
                            <div class="dis_hidden_content" id="com_dis_02">
                                <div class="com_dis_ppcont">
                                    <div class="dis_det_img">
                                        <img class="img-responsive center-block" src="img/depart_serv/common_diseases/com_dis_01.jpg">
                                    </div>
                                    <div class="dis_det_desc">
                                        <div class="dis_name_ttle"><?=site_text('Cold Sores', 'القروح الباردة');?></div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('What Are Cold Sores?', 'ما هي القروح الباردة؟');?></div>
                                            <div class="sin_dis_txt"><?=site_text('Despite the name, when you get painful blisters called cold sores, don\'t blame your cold. Cold sores are caused by a virus, but not the kind that makes you sniffle and sneeze. Instead, they happen because of an infection with the herpes simplex virus (HSV).', 'على الرغم من الاسم، عندما تحصل على بثور مؤلمة تسمى القروح الباردة، لا تلوم البرد. وتسبب القروح الباردة فيروس، ولكن ليس هذا النوع الذي يجعلك سنيفل والعطس. بدلا من ذلك، تحدث بسبب عدوى فيروس الهربس البسيط (HSV).');?></div>
                                        </div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('Symptoms', 'الأعراض');?></div>
                                            <div class="sin_dis_txt"><?=site_text('Cold sores, also called fever blisters, can show up anywhere on your body. They\'re most likely to appear on the outside of your mouth and lips, but you can also find them on your nose, cheeks, or fingers. After the blisters form, you may notice that they break and ooze.', 'القروح الباردة، وتسمى أيضا بثور الحمى، يمكن أن تظهر في أي مكان على جسمك. انهم على الأرجح أن تظهر على السطح الخارجي من الفم والشفتين، ولكن يمكنك أيضا العثور عليها على أنفك، الخدين، أو الأصابع. بعد شكل بثور، قد تلاحظ أنها كسر ونز.');?></div>
                                        </div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('Cold Sores treatment', 'علاج القروح الباردة');?></div>
                                            <div class="sin_dis_txt"><?=site_text('If you’ve ever had a cold sore, you know the signs. It starts with the tingling, then the edge of your lip or the corner of your mouth begins to burn. Then the outbreak: An ugly red sore appears. A few days later it breaks open and crusts over. They can turn up inside your mouth, too, causing pain along with white splotches.', 'إذا كان لديك أي وقت مضى التهاب البرد، وكنت أعرف علامات. ويبدأ مع وخز، ثم حافة الشفاه أو زاوية فمك يبدأ في حرق. ثم تفشي المرض: ظهور قرحة حمراء قبيحة. بعد بضعة أيام يكسر مفتوح وقشور أكثر. يمكن أن تتحول داخل فمك، أيضا، مما تسبب في الألم جنبا إلى جنب مع البقع البيضاء.');?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="dep_sin_doc text-center dep_sin_diseases">
                            <a data-fancybox="com_dis_img" data-src="#com_dis_03">
                                <div class="doc_img" style="background-image: url('img/depart_serv/common_diseases/com_dis_01.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Cold Sores', 'القروح الباردة');?></div>
                                    <div class="doc_detls_spec"><?=site_text('What Are Cold Sores?', 'ما هي القروح الباردة؟');?></div>
                                </div>
                            </a>
                            <div class="dis_hidden_content" id="com_dis_03">
                                <div class="com_dis_ppcont">
                                    <div class="dis_det_img">
                                        <img class="img-responsive center-block" src="img/depart_serv/common_diseases/com_dis_01.jpg">
                                    </div>
                                    <div class="dis_det_desc">
                                        <div class="dis_name_ttle"><?=site_text('Cold Sores', 'القروح الباردة');?></div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('What Are Cold Sores?', 'ما هي القروح الباردة؟');?></div>
                                            <div class="sin_dis_txt"><?=site_text('Despite the name, when you get painful blisters called cold sores, don\'t blame your cold. Cold sores are caused by a virus, but not the kind that makes you sniffle and sneeze. Instead, they happen because of an infection with the herpes simplex virus (HSV).', 'على الرغم من الاسم، عندما تحصل على بثور مؤلمة تسمى القروح الباردة، لا تلوم البرد. وتسبب القروح الباردة فيروس، ولكن ليس هذا النوع الذي يجعلك سنيفل والعطس. بدلا من ذلك، تحدث بسبب عدوى فيروس الهربس البسيط (HSV).');?></div>
                                        </div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('Symptoms', 'الأعراض');?></div>
                                            <div class="sin_dis_txt"><?=site_text('Cold sores, also called fever blisters, can show up anywhere on your body. They\'re most likely to appear on the outside of your mouth and lips, but you can also find them on your nose, cheeks, or fingers. After the blisters form, you may notice that they break and ooze.', 'القروح الباردة، وتسمى أيضا بثور الحمى، يمكن أن تظهر في أي مكان على جسمك. انهم على الأرجح أن تظهر على السطح الخارجي من الفم والشفتين، ولكن يمكنك أيضا العثور عليها على أنفك، الخدين، أو الأصابع. بعد شكل بثور، قد تلاحظ أنها كسر ونز.');?></div>
                                        </div>
                                        <div class="sin_dis_sec">
                                            <div class="sin_dis_ttle"><?=site_text('Cold Sores treatment', 'علاج القروح الباردة');?></div>
                                            <div class="sin_dis_txt"><?=site_text('If you’ve ever had a cold sore, you know the signs. It starts with the tingling, then the edge of your lip or the corner of your mouth begins to burn. Then the outbreak: An ugly red sore appears. A few days later it breaks open and crusts over. They can turn up inside your mouth, too, causing pain along with white splotches.', 'إذا كان لديك أي وقت مضى التهاب البرد، وكنت أعرف علامات. ويبدأ مع وخز، ثم حافة الشفاه أو زاوية فمك يبدأ في حرق. ثم تفشي المرض: ظهور قرحة حمراء قبيحة. بعد بضعة أيام يكسر مفتوح وقشور أكثر. يمكن أن تتحول داخل فمك، أيضا، مما تسبب في الألم جنبا إلى جنب مع البقع البيضاء.');?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Single Department End -->






<!-- ========================================= Footer Start ========================================= -->
<?php include('footer.php');?>
<!-- Footer End -->
</body>
</html>