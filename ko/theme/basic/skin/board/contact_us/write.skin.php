<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>




<section class="sub_sec ">



    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php if(!$is_admin){ ?> 
        <input type="hidden" name="wr_name" value="이름">
    <?php } ?>

        <article class="contact_container">
            <div class="inner">
                <p class="t1">Contact us</p>
                <p class="t2">
                    솔비스트 월드와이드를 찾아주셔서 감사합니다. <br/>
                    담당자와 대화하시려면 아래 양식을 작성하시거나, 문의 사항은 +82 2 783 3055로 전화해 주십시오.<br/>
                    저희 전문가 중 한 명이 곧바로 도와드리겠습니다.
                </p>
                <ul class="form_contain">
                    <li class="half">
                        <p class="label">이름 <b>*</b></p>
                        <p class="ipt_wrap">
                            <input type="text" name="wr_1" value="<?=$write['wr_1'];?>" required placeholder=""/>
                        </p>
                    </li>
                    <li class="half">
                        <p class="label">성 <b>*</b></p>
                        <p class="ipt_wrap">
                            <input type="text" name="wr_2" value="<?=$write['wr_2'];?>" required placeholder=""/>
                        </p>
                    </li>
                    <li class="half">
                        <p class="label">회사 <b>*</b></p>
                        <p class="ipt_wrap">
                            <input type="text" name="wr_subject" value="<?=$write['wr_subject'];?>" required placeholder=""/>
                        </p>
                    </li>
                    <li class="half">
                        <p class="label">직위 <b>*</b></p>
                        <p class="ipt_wrap">
                            <input type="text" name="wr_3" value="<?=$write['wr_3'];?>" required placeholder=""/>
                        </p>
                    </li>
                    <li class="half">
                        <p class="label">이메일주소 <b>*</b></p>
                        <p class="ipt_wrap">
                            <input type="text" name="wr_4" value="<?=$write['wr_4'];?>" required placeholder=""/>
                        </p>
                    </li>
                    <li class="half">
                        <p class="label">전화번호 <b>*</b></p>
                        <p class="ipt_wrap">
                            <input type="text" name="wr_5" value="<?=$write['wr_5'];?>" placeholder=""/>
                        </p>
                    </li>
                    <li class="">
                        <p class="label">무엇을 도와드릴까요? <b>*</b></p>
                        <p class="ipt_wrap">
                            <textarea name="wr_content"><?=$write['wr_content'];?></textarea>
                        </p>
                    </li>
                </ul>
                <button type="submit" class="submit_btn">완료</button>
            </div>
        </article>
    </form>
</section>











<script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
</script>
<!-- } 게시물 작성/수정 끝 -->