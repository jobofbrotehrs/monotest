<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>


<section class="sub_sec sub01 sub01_1">
    <article class="sub01_view">
        <div class="profile_container">
            <div class="inner">
                <div class="img_wrap">
                    <?php 
                        $thumb = get_list_thumbnail($board['bo_table'], $view['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
                    ?>
                    <div class="imgbox" style="background-image: url('<?=$thumb['ori'];?>')"></div>
                </div>
                <div class="profile">
                    <p class="t1"><?=$view['wr_subject']; ?></p>
                    <p class="t2"><?=$view['wr_2']; ?></p>
                </div>
            </div>
        </div>
    </article>
    <article class="profile2_container">
        <div class="inner">
            <?php if($is_admin) { ?> 
                <div class="adminBox">
                    <ul class="admin_list">
                        <a href="<?php echo $list_href ?>" class="list_icon item">목록</a>
                        <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="write_icon item">글쓰기</a><?php } ?>
                        <li class="more_icon item">
                            편집
                            <div class="search_box more_box" >
                            <?php if ($update_href) { ?><a href="<?php echo $update_href ?>" class="button">수정</a><?php } ?>
                            <?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;" class="button">삭제</a><?php } ?>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php } ?>
            <div class="profile_box">
                <p class="c1">
                    <?=nl2br($view['wr_5']); ?>
                </p>
                <ul class="contact_list">
                    <li><a href="tel:<?=$view['wr_link1']; ?>" class="icon"><img src="<?=G5_IMG_URL;?>/tel_icon.png"/></a></li>
                    <li><a href="mailto:<?=$view['wr_4']; ?>" class="icon"><img src="<?=G5_IMG_URL;?>/message_icon.png"/></a></li>
                    <li class="tel_number"><?=$view['wr_3']; ?></li>
                </ul>
            </div>
        </div>
    </article><!--profile2_container end-->

    <article class="area_conatainer">
        <div class="inner">
            <div class="t1">AREA OF EXPERTISE</div>
            <div class="t2">
                <?=nl2br($view['wr_content']); ?>
            </div>
        </div>
    </article><!--area_conatainer end-->
</section>










<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>