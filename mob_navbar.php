<li<?=(isset($pageName) && $pageName == 'home')?' class="active"':'';?>><a href="index.php"><span><?=site_text('home', 'الرئيسية');?></span></a></li>
<li class="scroll_to_sec<?=(isset($pageName) && $pageName == 'home')?' about_clinic':'';?>"><a href="index.php?id=about_clinic"><span><?=site_text('about clinic', 'عن العيادة');?></span></a></li>
<li<?=(isset($pageName) && $pageName == 'dermatology')?' class="active"':'';?> id="sub_item_menu">
    <div class="sub_menu">
        <a class="sub_mneu_ttle"><span><?=site_text('departments', 'الاقسام');?></span></a>
        <div class="visible-xs-block mob_sub_btn"></div>
        <ul class="mob_sbmnu_lst">
            <li<?=(isset($pageSubName) && $pageSubName == 'dermatology')?' class="active"':'';?>><a href="dermatology.php"><?=site_text('Dermatology & Venereology', 'الأمراض الجلدية والتناسلية');?></a></li>
            <li<?=(isset($pageSubName) && $pageSubName == '')?' class="active"':'';?>><a href="#"><?=site_text('Skin Care', 'العناية بالبشرة');?></a></li>
            <li<?=(isset($pageSubName) && $pageSubName == '')?' class="active"':'';?>><a href="#"><?=site_text('Plastic Surgery', 'جراحة تجميلية');?></a></li>
            <li<?=(isset($pageSubName) && $pageSubName == '')?' class="active"':'';?>><a href="#"><?=site_text('Laser Therapy', 'العلاج بالليزر');?></a></li>
            <li<?=(isset($pageSubName) && $pageSubName == '')?' class="active"':'';?>><a href="#"><?=site_text('Dental Care', 'العناية بالأسنان');?></a></li>
            <li<?=(isset($pageSubName) && $pageSubName == '')?' class="active"':'';?>><a href="#"><?=site_text('Laboratory & Pathology', 'مختبر وعلم الأمراض');?></a></li>
        </ul>
    </div>
</li>
<li<?=(isset($pageName) && $pageName == 'doctors')?' class="active"':'';?>><a href="doctors.php"><span><?=site_text('our doctors', 'أطبائنا');?></span></a></li>
<li<?=(isset($pageName) && $pageName == 'facilities')?' class="active"':'';?>><a href="facilities.php"><span><?=site_text('facilities', 'المرافق');?></span></a></li>
<li<?=(isset($pageName) && $pageName == 'human_res')?' class="active"':'';?> id="sub_item_menu">
    <div class="sub_menu">
        <a class="sub_mneu_ttle"><span><?=site_text('human resources', 'الموارد البشرية');?></span></a>
        <div class="visible-xs-block mob_sub_btn"></div>
        <ul class="mob_sbmnu_lst">
            <li<?=(isset($pageSubName) && $pageSubName == '')?' class="active"':'';?>><a href="administration.php"><?=site_text('administration', 'الادارة');?></a></li>
            <li<?=(isset($pageSubName) && $pageSubName == '')?' class="active"':'';?>><a href="careers.php"><?=site_text('careers', 'وظائف');?></a></li>
        </ul>
    </div>
</li>
<li class="scroll_to_sec<?=(isset($pageName) && $pageName == 'home')?' cont_clinic':'';?>"><a href="index.php?id=cont_clinic"><span><?=site_text('contact us', 'الاتصال بنا');?></span></a></li>

































