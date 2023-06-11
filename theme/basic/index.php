<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<section class="main_sec">
    <article class="main_banner">

        <div class="bg_wrap">
            <div class="bg"></div>
        </div>

        <div class="left_squre"></div>
        <div class="inner">
            <div class="content_wrap">
                <p class="t1">
                    “ Healthy People makes a healthy<br/>
                    organization, that is a healthy strategy ”
                </p>
                <p class="c1">
                    Companies are constantly making effort to respond to rapidly changing <br/>
                    environment around the world through new strategies, striving to create sustainable <br/>
                    competitive advantages. <br/>
                    And the core resource to create such competitive <br/>
                    advantages is the very ‘People’. 
                </p>
                <a href="<?=G5_BBS_URL;?>/board.php?bo_table=about_us" class="about_btn">About Us ></a>
            </div>
        </div>
    </article><!--main_banner end-->



    <article class="main_banner right">

        <div class="bg_wrap">
            <div class="bg"></div>
        </div>

        <div class="left_squre"></div>
        <div class="inner">
            <div class="content_wrap">
                <p class="t1">
                    There is always a large invisible GAP in<br/>
                    personnel organization theory and<br/>
                    the organization's workplace. 
                </p>
                <p class="c1">
                    Solvist provides hands-on consulting that allows <br/>
                    practitioners to provide and apply hands-on tools that can be used directly in practice <br/>
                    so that this Gap can be applied in the field.<br/>
                    We are confident that performance-driven coaching, which can be applied <br/>
                    immediately to companies that have strategies in place but are not implementing them, <br/>
                    will help you strengthen your competitiveness.<br/>
                    Solvist will be your best HR partner, designing an organization that achieves results <br/>
                    through actual necessary coaching and consulting without bubbles. 
                </p>
                <a href="<?=G5_BBS_URL;?>/write.php?bo_table=contact_us" class="about_btn">Contact us ></a>
            </div>
        </div>
    </article><!--main_banner end-->

    


</section>


<?php include_once(G5_THEME_PATH.'/tail.php'); ?>