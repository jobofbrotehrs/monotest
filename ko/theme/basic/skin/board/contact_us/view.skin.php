<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>










<section class="sub_sec">
    <div class="inner">
        <article class="view_wrap">
            <div class="view_page">
                <ul class="full_title titleBox">
                    <li>
                        <span class="label">성함</span>
                        <span class="label_content">
                            <?php echo $view['wr_1']; ?> /
                            <?php echo $view['wr_2']; ?>
                        </span>
                    </li>
                </ul>
                
                <ul class="three_title titleBox">
                    <li>
                        <span class="label">회사</span>
                        <span class="label_content">
                            <?php echo $view['wr_subject']; ?>
                        </span>
                    </li>
                    <li>
                        <span class="label">조회</span>
                        <span class="label_content"><?php echo $view['wr_hit']; ?></span>
                    </li>
                    <li>
                        <span class="label">날짜</span>
                        <span class="label_content"><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></span>
                    </li>
                </ul>
                <ul class="share_title">
                    <li>
                        <!--
                        <span class="share_label"><img src="./img/board_img/share_icon.png" />공유</span>
                        <span><a href="#"><img src="./img/board_img/facebook_icon.png" class="share_icon"/></a></span>
                        <span><a href="#"><img src="./img/board_img/twitter_icon.png" class="share_icon"/></a></span>
                        <span><a href="#"><img src="./img/board_img/google_icon.png" class="share_icon"/></a></span>
                        <span><a href="#"><img src="./img/board_img/kakao_icon.png" class="share_icon"/></a></span>
                        -->
                    </li>
                    <li>
                        <div class="adminBox">
                            <ul class="admin_list">
                                <a href="<?php echo $list_href ?>" class="list_icon item">목록</a>
                                <li class="more_icon item">
                                    편집
                                    <div class="search_box more_box" >
                                    <?php if ($update_href) { ?><a href="<?php echo $update_href ?>" class="button">수정</a><?php } ?>
                                    <?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;" class="button">삭제</a><?php } ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
    
                <div class="view_content">
                    
                    - first name : <?=$view['wr_1']; ?> <br/><br/>
                    - last name : <?=$view['wr_2']; ?> <br/><br/>
                    - company : <?=$view['wr_subject']; ?> <br/><br/>
                    - job title :  <?=$view['wr_3']; ?> <br/><br/>
                    - email-address :  <?=$view['wr_4']; ?><br/><br/>
                    - phone number :  <?=$view['wr_5']; ?><br/><br/>
                    - How can we help you ? :<br/>
                    <?=$view['wr_content']; ?>



                </div>
    
                
    
                <?php if ($prev_href || $next_href) { ?>
                <div class="p_n_box">
                    <?php if ($prev_href) { ?>
                        <div class="prev_box p_n_item">
                            <span class="label">이전글</span>
                            <span class="p_n_title">
                                <a href="<?php echo $prev_href ?>">
                                    <?php echo $prev_wr_subject;?>
                                </a>
                            </span>
                        </div>
                    <?php } ?>
                    <?php if ($next_href) { ?>
                    <div class="next_box p_n_item">
                        <span class="label">다음글</span>
                        <span class="p_n_title">
                            <a href="<?php echo $next_href ?>">
                                <?php echo $next_wr_subject;?>
                            </a>
                        </span>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>










    
                
            </div><!--view_page end-->
        </article>
    </div>
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
<!-- } 게시글 읽기 끝 -->