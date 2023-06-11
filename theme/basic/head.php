<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<header>
    <div class="inner">
        <div class="menu_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo_box">
            <a href="<?=G5_URL;?>"><img src="<?=G5_IMG_URL;?>/logo.png" /></a>
        </div>
        <div class="menu_contain">
            <ul class="menu_box">
                <li><a href="<?=G5_BBS_URL;?>/board.php?bo_table=about_us">About Us</a></li>
                <li><a href="<?=G5_BBS_URL;?>/content.php?co_id=talent_acquisition">Talent <br/>Acquisition</a></li>
                <li><a href="<?=G5_BBS_URL;?>/content.php?co_id=employer_branding">Employer <br/>Branding</a></li>
                <li><a href="<?=G5_BBS_URL;?>/content.php?co_id=job_management">Job <br/>Management</a></li>
                <li><a href="<?=G5_BBS_URL;?>/content.php?co_id=compensation">Compensation <br/>Management </a></li>
                <li><a href="<?=G5_BBS_URL;?>/content.php?co_id=performance">Performance <br/>Management</a></li>
                <li><a href="<?=G5_BBS_URL;?>/content.php?co_id=change">Change <br/>Management</a></li>
            </ul>

            <div class="language_select_box">
                <div class="select_box">
                    <span>ENG </span>
                    <img src="<?=G5_IMG_URL;?>/earth_icon.png" class="earth"/>
                    <img src="<?=G5_IMG_URL;?>/language_arrow.png" class="arrow"/>
                </div>
                <ul class="language_list">
                    <li><a href="<?=G5_URL;?>/ko">KOR</a></li>
                    <li><a href="<?=G5_URL;?>">ENG</a></li>
                </ul>
            </div>

            <ul class="language_box">
                <li><a href="<?=G5_URL;?>/ko">KOR</a></li>
                <li class="on"><a href="<?=G5_URL;?>">ENG</a></li>
            </ul>
        </div>
    </div>
</header>