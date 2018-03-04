<?php
include ('config.php');
$pageTitle = site_text('APPLY FOR A JOB', 'التقديم لوظيفة');
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
        <div class="hres_ttle"><?=site_text('Your Career Starts With Us !', 'حياتك المهنية تبدأ معنا!');?></div>
        <div class="h_res_cont">
            <form class="job_form">
                <input type="text" class="job_ipt job_ipt_odd" name="fname" placeholder="<?=site_text('First Name', ' الاسم الاول');?>" required>
                <input type="text" class="job_ipt job_ipt_even" name="lname" placeholder="<?=site_text('Last Name', ' الاسم الاخير');?>" required>
                <input type="email" class="job_ipt job_ipt_odd" name="email" placeholder="<?=site_text('Email Address', 'البريد الالكتروني');?>" required>
                <input type="text" class="job_ipt job_ipt_even" name="mobile" placeholder="<?=site_text('Mobile Number', 'رقم الموبايل');?>" required>
                <input type="text" onfocus="(this.type='date')" class="job_ipt job_ipt_odd" name="date" placeholder="<?=site_text('dd/mm/yy', 'شهر/يوم/سنة');?>" required>
                <select title="<?=site_text('Marital Status', 'الحالة الاجتماعية');?>" name="gender" class="gend_sel job_ipt job_ipt_even" required>
                    <option value="volvo"><?=site_text('Single', 'اعزب');?></option>
                    <option value="saab"><?=site_text('Married', 'متزوج');?></option>
                </select>
                <label class="cv_lbl"><?=site_text('Upload Your C.V', 'حمل سيرتك الذاتية');?></label>
                <input type="file" class="cv_upld_ipt" name="cv" required>
                <button type="submit" class="main_btn"><?=site_text('Apply  Now', 'قدم الآن');?></button>
            </form>
        </div>
    </div>
</section>
<!-- Careers Page End -->






<!-- ========================================= Footer Start ========================================= -->
<?php include('footer.php');?>
<!-- Footer End -->
</body>
</html>