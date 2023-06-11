<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>




<section class="sub_sec">

    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">


    <div class="inner">
        <article class="view_wrap">
            <div class="basic_list">
                <?php if($is_admin){ ?> 
                    <div class="adminBox">              
                        <ul class="admin_list">
                            <a href="<?php echo $admin_href ?>" class="admin_icon item">관리자</a>
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
    
                <table class="basic_list_table">
                    <tr class="table_th">
                        <th class="list_number">
                            <label for="chkall">
                                    <?php if ($is_checkbox) { ?>
                                        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                                    <?php } ?>
                                    번호
                                </label>
                        </th>
                        <th class="list_title">first name / last name</th>
                        <th class="list_writer">회사 </th>
                        <th class="list_hit">조회수</th>
                        <th class="list_date">날짜</th>
                    </tr>
                    <?php for($i=0; $i<count($list); $i++) { ?> 
                    <tr>
                        <td class="list_number ">
                            <?php if ($is_checkbox) { ?>
                                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                            <?php } ?>
                            <?=$list[$i]['num']; ?>
                        </td>
                        <td class="list_title">
                            <a href="<?=$list[$i]['href']; ?>">
                                <span class="titleBox"><?= $list[$i]['wr_1']; ?> / <?= $list[$i]['wr_2']; ?></span>
                            </a>
                        </td>
                        <td class="list_writer"><?=$list[$i]['wr_subject']; ?></td>
                        <td class="list_hit"><?=$list[$i]['wr_hit']; ?></td>
                        <td class="list_date"><?=$list[$i]['datetime2']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
    
                <div class="paging_box">
                    <?php echo $write_pages; ?>
                </div>
    
            </div><!--basic_list end-->
        
        </article>
    </div>

    </form>
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

    if (sw == "copy")
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
