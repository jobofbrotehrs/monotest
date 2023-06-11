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
                    “ 건강한 사람들로부터 건강한 회사가 만들어집니다, <br/>
                    우리는 이를 건강한 성장전략이라고 부릅니다 ”
                </p>
                <p class="c1">
                    기업들은 전 세계적으로 급변하는 새로운 환경에 <br/>
                    대응할 수 있는 전략을 찾기위해 끊임없이 노력하며, <br/>
                    다른 경쟁사들이 갖지 못하는 지속 가능한 경쟁 우위를 창출하기 위해 <br/>
                    고군분투하고 있습니다.<br/>
                    이를 가능하게 만드는 가장 중요한 자산은 바로 '사람' 입니다.
                </p>
                <a href="<?=G5_BBS_URL;?>/board.php?bo_table=about_us_ko" class="about_btn">About Us ></a>
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
                    인사조직 이론과 실제 조직 현장에는 <br/>
                    언제나 보이지 않는 큰 '차이'가 존재합니다.
                </p>
                <p class="c1">
                    솔비스트는 실무자가 직접 실무에 활용할 수 있는 체험도구를 제공하고 <br/>
                    적용할 수 있는 체험컨설팅을 제공해 이 갭이 현장에서 적용될 수 있도록 하고 있다.<br/>
                    
                    전략을 세워놓고 실천하지 않는 기업에 바로 적용할 수 있는 <br/>
                    성과 중심 코칭이 경쟁력 강화에 도움이 될 것으로 확신한다.<br/>

                    Solvist는 거품 없이 실제로 필요한 코칭과 컨설팅을 통해 <br/>
                    성과를 내는 조직을 설계하는 최고의 HR 파트너가 될 것입니다. 
                </p>
                <a href="<?=G5_BBS_URL;?>/write.php?bo_table=contact_us" class="about_btn">문의하기 ></a>
            </div>
        </div>
    </article><!--main_banner end-->

    


</section>


<?php include_once(G5_THEME_PATH.'/tail.php'); ?>