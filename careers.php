<?php
include ('config.php');
$pageTitle = site_text('CAREERS', 'الوظائف');
$pageName = 'human_res';
$pageSubName = 'careers';
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include('head.php')?></head>
<body>
<!-- ========================================= Main Header Start ========================================= -->
<?php include('header.php');?>
<!-- Main Header End -->
<!-- =========================================  Careers Page Start ========================================= -->
<section class="main_sction hmn_res_sec">
    <div class="container">
        <div class="hres_ttle"><?=site_text('careers', 'الوظائف');?></div>
        <div class="h_res_cont">
            <div class="sin_hr_sec">
                <div class="sin_job_ttle"><?=site_text('Staff Nurses ICU(F) :  4', 'ممرضات (ICU)  (اناث ) : 4');?></div>
                <div class="sin_job_req"><?=site_text('Experience Minimum 2-3 year working experiance in Multispeciality Hospital Qualification Diploma or Degree in their respective speciality.', 'خبرة الحد الأدنى 2-3 سنوات من الخبرة في العمل في مستشفى تخصصي دبلوم التأهيل أو درجة في تخصص كل منهما.');?></div>
                <div class="job_apply_con">
                    <div class="sin_job_code"><?=site_text('Job Code : abc127', 'رمز الوظيفة : abc127');?></div>
                    <div class="job_apply_btn">
                        <a href="career_form.php" class="main_btn"><?=site_text('Apply  Now', 'قدم الآن');?></a>
                    </div>
                </div>
            </div>
            <div class="sin_hr_sec">
                <div class="sin_job_ttle"><?=site_text('Staff Nurse CCU (F) : 1', 'ممرضات (CCU)  (اناث ) : 1');?></div>
                <div class="sin_job_req"><?=site_text('Experience Minimum 2-3 year working experiance in Multispeciality Hospital Qualification Diploma or Degree in their respective speciality.', 'خبرة الحد الأدنى 2-3 سنوات من الخبرة في العمل في مستشفى تخصصي دبلوم التأهيل أو درجة في تخصص كل منهما.');?></div>
                <div class="job_apply_con">
                    <div class="sin_job_code"><?=site_text('Job Code : abc127', 'رمز الوظيفة : abc127');?></div>
                    <div class="job_apply_btn">
                        <a href="career_form.php" class="main_btn"><?=site_text('Apply  Now', 'قدم الآن');?></a>
                    </div>
                </div>
            </div>
            <div class="sin_hr_sec">
                <div class="sin_job_ttle"><?=site_text('Staff Nurse OR (F) : 2', 'ممرضات (OR)  (اناث ) : 2');?></div>
                <div class="sin_job_req"><?=site_text('Experience Minimum 2-3 year working experiance in Multispeciality Hospital Qualification Diploma or Degree in their respective speciality.', 'خبرة الحد الأدنى 2-3 سنوات من الخبرة في العمل في مستشفى تخصصي دبلوم التأهيل أو درجة في تخصص كل منهما.');?></div>
                <div class="job_apply_con">
                    <div class="sin_job_code"><?=site_text('Job Code : abc127', 'رمز الوظيفة : abc127');?></div>
                    <div class="job_apply_btn">
                        <a href="career_form.php" class="main_btn"><?=site_text('Apply  Now', 'قدم الآن');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Careers Page End -->

<!-- ========================================= Footer Start ========================================= -->
<?php include('footer.php');?>
<!-- Footer End -->
</body>
</html>