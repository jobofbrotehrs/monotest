<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>


<section class="sub_sec sub01 sub01_1">
    <div class="inner">

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

            <article class="write_wrap">
                <div class="write_page">
                        <ul class="full_box title_box">
                            <li>
                                <span class="label">노출순서</span>
                                <span class="label_content">
                                    <input type="text" name="wr_1" value="<?=$write['wr_1']; ?>" placeholder="노출 순서를 입력해주세요, 숫자가 클수록 먼저 노출됩니다."/>
                                </span>
                                
                            </li>
                        </ul>
                        <ul class="half_box title_box">
                            <li>
                                <span class="label">성함</span>
                                <span class="label_content">
                                    <input type="text" name="wr_subject" required value="<?=$write['wr_subject']; ?>" placeholder="성함을 입력해주세요"/>
                                </span>
                            </li>
                            <li>
                                <span class="label">직급</span>
                                <span class="label_content">
                                    <input type="text" name="wr_2" value="<?=$write['wr_2']; ?>" required placeholder="직급을 입력해주세요"/>
                                </span>
                            </li>
                        </ul>
                        <ul class="half_box title_box">
                            <li>
                                <span class="label">연락처</span>
                                <span class="label_content">
                                    <input type="text" name="wr_3" value="<?=$write['wr_3']; ?>" required placeholder="연락처를 입력해주세요"/>
                                </span>
                            </li>
                            <li>
                                <span class="label">이메일</span>
                                <span class="label_content">
                                    <input type="text" name="wr_4" value="<?=$write['wr_4']; ?>" required placeholder="이메일을 입력해주세요"/>
                                </span>
                            </li>
                        </ul>
                        <ul class="full_box title_box">
                            <li>
                                <span class="label">설명</span>
                                <span class="label_content">
                                    <textarea name="wr_5" required placeholder="설명을 입력해주세요."><?=$write['wr_5']; ?></textarea>
                                </span>
                            </li>
                        </ul>
        
                        <div class="dhtml_box">
                            <b class="sub_title">AREA OF EXPERTISE</b>
                            <div class="write_div">
                                <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
                                <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
                                    <?php if($write_min || $write_max) { ?>
                                    <!-- 최소/최대 글자 수 사용 시 -->
                                    <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                                    <?php } ?>
                                    <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                                    <?php if($write_min || $write_max) { ?>
                                    <!-- 최소/최대 글자 수 사용 시 -->
                                    <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                                    <?php } ?>
                                </div>
                                
                            </div>
                        </div>
        
                        <div class="add_form">
                            <div class="add_box link_box"><input name="wr_link1" type="text" required value="<?=$write['wr_link1']; ?>" placeholder="연락처에 연결할 번호를 입력해주세요." /></div>
                            <?php for ($i=0; $is_file && $i<1; $i++) { ?>
                                <?php if($i==0) { ?>
                                    <p class="file_help">01. 썸네일 이미지 등록 ( 권장사이즈 : 280 x 292 ) </p>
                                <?php } ?>
                                <div class="add_box file_box">
                                    <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
                                </div>
                                <?php if($w == 'u' && $file[$i]['file']) { ?>
                                    <div class="file_del_box">
                                        <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
        
                        <div class="write_btn_box">
                            <a href="<?php echo get_pretty_url($bo_table); ?>" class="cancelBtn">취소</a>
                            <button type="submit" class="submitBtn">작성완료</button>
                        </div>
                </div><!--write_page end-->
            </article>

        </form>
    </div>
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