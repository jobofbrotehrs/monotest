<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<section class="sub_sec sub01 sub01_1">
    <article class="sub_banner">
        <div class="squre1"></div>
        <div class="img_wrap">
            <div class="squre2 squre"></div>
            <div class="squre3 squre"></div>
            <div class="squre4 squre"></div>
            <div class="squre5 squre"></div>
            <div class="img_wrap2"></div>
        </div>
        
        <div class="content_wrap">
            <div class="inner">
                <div class="content">
                    <p class="t1">About Us</p>
                    <p class="t2">SOLVIST WORLDWIDE<br/>솔비스트 컨설턴트 핵심가치</p>
                </div>
            </div>
        </div>
    </article><!--sub_banner end-->

    <article class="main_sol_w sol_w">
        <div class="inner">
            <p class="t1">솔비스트 컨설턴트 핵심가치</p>
            <ul class="s_list">
                <li>
                    <div class="contnet_wrap">
                        <p class="number">
                            <b>01</b>
                        </p>
                        <p class="content">
                            당사는 업계의 전문가들로서 <br/>
                            기본, 근본적인 업의 윤리 강령을 <br/>
                            준수합니다.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="contnet_wrap">
                        <p class="number">
                            <b>02</b>
                        </p>
                        <p class="content">
                            솔비스트만의 고유한 방식으로 <br/>
                            318개의 글로벌 기업을 망라하는 <br/>
                            CA(변화관리자)를 구축합니다.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="contnet_wrap">
                        <p class="number">
                            <b>03</b>
                        </p>
                        <p class="content">
                            솔비스트는 <br/>
                            다음 세대를 육성하기 위해 <br/>
                            리더십 스쿨을 운영합니다.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="contnet_wrap">
                        <p class="number">
                            <b>04</b>
                        </p>
                        <p class="content">
                            각 조직에 효율성을 더해줄 
                            유능한 CA(변화관리자)를 
                            육성하기 위해 차세대 인턴십 프로그램을 
                            구축합니다.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="contnet_wrap">
                        <p class="number">
                            <b>05</b>
                        </p>
                        <p class="content">
                            솔비스트만의 고유한 방식이 
                            다양한 조직들의 모든 전략에 
                            적용할 수 있는 시스템화된 
                            글로벌 모듈을 준비합니다.
                        </p>
                    </div>
                </li>
                
            </ul><!--s_list end-->
        </div>
    </article><!--main_sol_w end-->




    <article class="team_conatainer">


        <form name="fboardlist"  id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <input type="hidden" name="sw" value="">

            <div class="inner">
                <p class="t1">Our team</p>

                <?php if($is_admin){ ?> 
                    <div class="adminBox">              
                        <ul class="admin_list">
                            <a href="<?php echo $admin_href ?>" class="admin_icon item">관리자</a>
                            <a href="<?php echo $write_href ?>" class="write_icon item">글쓰기</a>
                            <li class="more_icon item">
                                편집
                                <div class="search_box more_box" >
                                    <button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value">선택삭제</button>
                                    <button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value">선택복사</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php } ?>

                    
                
                <?php if ($is_checkbox) { ?>
                    <label for="chkall">
                        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                        전체선택
                    </label>
                <?php } ?>
                <ul class="team_list">
                    <?php for($i=0; $i<count($list); $i++){ 
                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);    
                    ?> 
                    <li>
                        <?php if ($is_checkbox) { ?>
                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                        <?php } ?>
                        <a href="<?= $list[$i]['href']; ?>">
                            <div class="imgBox" style="background-image:url('<?=$thumb['ori'];?>');"></div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>

                <div class="paging_box">
                    <!-- 페이지 -->
                    <?php echo $write_pages; ?>
                    <!-- 페이지 -->
                </div>

            </div>

        </form>

    </article><!--team_list end-->
    
    
</section>














<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>

