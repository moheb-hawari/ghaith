<?php
if(isset($_GET['lang'])) {
    $_GET['lang'];
    file_put_contents('cur_lang.txt', $_GET['lang']);
}

$main_lang = file_get_contents('cur_lang.txt');


function site_text($english, $arabic = NULL, $limit = NULL) {
    if ($GLOBALS['main_lang'] == 'en' && isset($arabic) && !empty($arabic)) {
        $TXT = $english;
    } else {
        $TXT = $arabic;
    }
    $TXT = htmlspecialchars_decode($TXT);

    if ($limit != NULL && (strlen($TXT) > $limit)) {
        $limit = strrpos(substr($TXT, 0, $limit), ' ');
        $TXT = substr($TXT, 0, $limit) . '…';
    }
    return $TXT;
}
?>