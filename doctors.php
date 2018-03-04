<?php
include ('config.php');
$pageTitle = site_text('OUR DOCTORS', 'أطبائنا');
$pageName = 'doctors';
$head_text = 'text';
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
            <div class="sin_dep_ttle"><?=site_text('Doctors', 'الأطباء');?></div>
            <div class="doctors_fdet dep_doc_cont">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="doc_fdetail.php">
                            <div class="dep_sin_doc text-center">
                                <div class="dep_ttle"><?=site_text('Dermatology & Venereology', 'الأمراض الجلدية والتناسلية');?></div>
                                <div class="doc_img" style="background-image: url('img/depart_serv/doc_pge_01.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Dr. Aparna', 'د. آبارنا');?></div>
                                    <div class="doc_detls_spec"><?=site_text('Dermatology and Venerology Senior Specialist MD/PhD', 'طب الأمراض الجلدية وعلم الأجنة كبير الاخصائيين');?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="doc_fdetail.php">
                            <div class="dep_sin_doc text-center">
                                <div class="dep_ttle"><?=site_text('Skin Care', 'العناية بالبشرة');?></div>
                                <div class="doc_img" style="background-image: url('img/depart_serv/doc_pge_02.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Dr. Halwani Bahja', 'د. حلواني بهجة');?></div>
                                    <div class="doc_detls_spec"><?=site_text('Skin Care Specialist', 'اخصائي العناية بالبشرة');?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="doc_fdetail.php">
                            <div class="dep_sin_doc text-center">
                                <div class="dep_ttle"><?=site_text('Plastic Surgery', 'جراحة تجميلية');?></div>
                                <div class="doc_img" style="background-image: url('img/depart_serv/doc_pge_03.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Dr. Neha', 'د. نهى');?></div>
                                    <div class="doc_detls_spec"><?=site_text('Consultant Opthalmologist-Surgeon (Eyelid & Brow lift)', 'استشاري طب العيون - الجراح ( الجفن ورفع الجبين )');?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="doc_fdetail.php">
                            <div class="dep_sin_doc text-center">
                                <div class="dep_ttle"><?=site_text('Laser Therapy', 'العلاج بالليزر');?></div>
                                <div class="doc_img" style="background-image: url('img/depart_serv/doc_pge_04.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Dr. Johan Adams', 'د. جون آدمز');?></div>
                                    <div class="doc_detls_spec"><?=site_text('MBBS, MD (D&V) Senior Specialist', 'اخصائي اول');?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="doc_fdetail.php">
                            <div class="dep_sin_doc text-center">
                                <div class="dep_ttle"><?=site_text('Dental Care', 'العناية بالأسنان');?></div>
                                <div class="doc_img" style="background-image: url('img/depart_serv/doc_pge_05.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Dr. Angela', 'د. انجيلا');?></div>
                                    <div class="doc_detls_spec"><?=site_text('Consultant in Orthodontics & Dentofacial Orthopedics', 'استشاري في تقويم الأسنان وجراحة الأسنان');?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="doc_fdetail.php">
                            <div class="dep_sin_doc text-center">
                                <div class="dep_ttle"><?=site_text('Laboratory & Pathology', 'مختبر وعلم الأمراض');?></div>
                                <div class="doc_img" style="background-image: url('img/depart_serv/doc_pge_06.jpg')"></div>
                                <div class="doc_detls">
                                    <div class="doc_detls_name"><?=site_text('Dr. Hanadi', 'د. هنادي');?></div>
                                    <div class="doc_detls_spec"><?=site_text('Clinical Pathologist & Medical Laboratory-in-Charge M.B.B.S, D.C.P (Diploma in Clinical Pathology)', 'أخصائي علم الأمراض السريري والمختبر الطبي الطبيب المسؤول');?></div>
                                </div>
                            </div>
                        </a>
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