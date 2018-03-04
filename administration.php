<?php
include ('config.php');
$pageTitle = site_text('ADMINISTRATION', 'الادارة');
$pageName = 'human_res';
$pageSubName = 'administration';
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include('head.php')?></head>
<body>
<!-- ========================================= Main Header Start ========================================= -->
<?php include('header.php');?>
<!-- Main Header End -->

<!-- =========================================  Administration Page Start ========================================= -->
<section class="main_sction hmn_res_sec">
    <div class="container">
        <div class="hres_ttle"><?=site_text('Administration & Staff', 'موظفو الإدارة');?></div>
        <div class="h_res_cont">
            <div class="sin_hr_sec">
                <div class="sin_admin_img">
                    <img class="img-responsive center-block" src="img/depart_serv/doc_pge_02.jpg">
                </div>
                <div class="sin_admin_info">
                    <div class="admin_info_cont">
                        <div class="adm_name"><?=site_text('Dr. Johan Adams', 'د. جون آدمز');?></div>
                        <div class="adm_pos"><?=site_text('Clinic Administrator for Bouhamra Clinic', 'مدير عيادة بوحمرة');?></div>
                    </div>
                </div>
            </div>
            <div class="sin_hr_sec">
                <div class="sin_admin_img">
                    <img class="img-responsive center-block" src="img/depart_serv/doc_pge_01.jpg">
                </div>
                <div class="sin_admin_info">
                    <div class="admin_info_cont">
                        <div class="adm_name"><?=site_text('Dr. Aparna', 'د. آبارنا');?></div>
                        <div class="adm_pos"><?=site_text('Dermatology and Venerology Senior Specialist MD/PhD', 'الأمراض الجلدية والتناسلية كبير الاخصائيين');?></div>
                    </div>
                </div>
            </div>
            <div class="sin_hr_sec">
                <div class="sin_admin_img">
                    <img class="img-responsive center-block" src="img/depart_serv/doc_pge_03.jpg">
                </div>
                <div class="sin_admin_info">
                    <div class="admin_info_cont">
                        <div class="adm_name"><?=site_text('Dr. Neha', 'د. نهى');?></div>
                        <div class="adm_pos"><?=site_text('Consultant Opthalmologist-Surgeon (Eyelid & Brow lift)', 'استشاري طب العيون-الجراح (الجفن ورفع الجبين)');?></div>
                    </div>
                </div>
            </div>
            <div class="sin_hr_sec">
                <div class="sin_admin_img">
                    <img class="img-responsive center-block" src="img/depart_serv/doc_pge_04.jpg">
                </div>
                <div class="sin_admin_info">
                    <div class="admin_info_cont">
                        <div class="adm_name"><?=site_text('Dr. Johan Adams', 'د. جون آدمز');?></div>
                        <div class="adm_pos"><?=site_text('MBBS, MD (D&V) Senior Specialist', 'كبير الاخصائيين');?></div>
                    </div>
                </div>
            </div>
            <div class="sin_hr_sec">
                <div class="sin_admin_img">
                    <img class="img-responsive center-block" src="img/depart_serv/doc_pge_05.jpg">
                </div>
                <div class="sin_admin_info">
                    <div class="admin_info_cont">
                        <div class="adm_name"><?=site_text('Dr. Angela', 'د. انجيلا');?></div>
                        <div class="adm_pos"><?=site_text('Consultant in Orthodontics & Dentofacial Orthopedics', 'استشاري في تقويم الأسنان وجراحة الأسنان');?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Administration Page End -->

<!-- ========================================= Footer Start ========================================= -->
<?php include('footer.php');?>
<!-- Footer End -->
</body>
</html>