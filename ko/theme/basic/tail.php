<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}

if($co_id != ""){ include_once(G5_THEME_PATH.'/content/'.$co_id.'.php');}

?>

 
<!----------------------------footer --------------------------------->

<div class="privacy_popup">
    <div class="popup_contain">
        <div class="button_contain">
            <div class="button">
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="content_contain">
            <p class="title">개인정보 처리방침</p>
            <div class="content">
                Solvist World Wide는 개인정보 보호법 제30조에 따라 정보주체의 개인정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 개인정보 처리방침을 수립·공개하고 있습니다.
                <br/><br/>
                제1조 (개인정보의 처리 목적)<br/>
                Solvist World Wide는 신고 접수 및 신고 조사 업무 수행 등의 목적으로 필요 최소한의 개인정보를 수집하고 있습니다. 처리한 개인정보는 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br/>
                <br/>
                개인정보파일의 명칭   <br/>
                개인정보파일에 기록되는 개인정보의 항목<br/>
                <br/>
                Solvist World Wide 회원가입   <br/>
                (필수항목) 성명, 연락처, 회사, 직위, 이메일주소, 전화번호 <br/>
                ① Solvist World Wide는 개인정보 보호법 제 32조에 따라 등록 · 공개하는 개인정보파일의 처리목적은 다음과 같습니다.
                <br/>
                개인정보파일의 상세내용은 행정자치부 개인정보보호 종합포털(www.privacy.go.kr) → 민원마당 → 개인정보의 열람 등 요구 → 개인정보파일 목록 검색 → 기관명에 Solvist World Wide 입력 후 조회가 가능합니다.<br/>
                제2조 (개인정보의 처리 및 보유기간)<br/>
                ① Solvist World Wide는 법령에 따른 개인정보 보유· 이용기간 또는 정보주체로부터 개인정보를 수집 시에 동의 받은 개인정보 보유 이용기간 내에서 개인정보를 처리 보유합니다. <br/>
                ② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.<br/>
                <br/>
                Solvist World Wide 종료 후 : 1년 개인정보파일의 상세내용은 행정자치부 개인정보보호 종합포털(www.privacy.go.kr) → 민원마당 → 개인정보의 열람 등 요구 → 개인정보파일 목록 검색 → 기관명에 Solvist World Wide 입력 후 조회가 가능합니다.<br/>
                제3조 (정보주체의 권리·의무 및 그 행사방법)<br/>
                ① 정보주체는 Solvist World Wide에 대해 언제든지 개인정보 열람․정정․삭제․처리정지 요구 등의 권리를 행사할 수 있습니다.<br/>
                ② 제1항에 따른 권리 행사는 Solvist World Wide에 대해 개인정보 보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며, Solvist World Wide는 이에 대해 지체없이 조치하겠습니다.<br/>
                ③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.<br/>
                ④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.<br/>
                ⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.<br/>
                ⑥ Solvist World Wide는 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.<br/>
                <br/>
                제4조 (처리하는 개인정보의 항목)<br/>
                Solvist World Wide는 다음의 개인정보 항목을 처리하고 있습니다.<br/>
                <br/>
                개인정보파일의 명칭   <br/>
                개인정보파일에 기록되는 개인정보의 항목<br/>
                <br/>
                Solvist World Wide 접수인의 신고내역 <br/>
                (필수항목) 성명 , 회사, 직위, 이메일주소, 전화번호<br/>
                <br/>
                제5조 (개인정보의 파기)<br/>
                ① Solvist World Wide는 개인정보 보유기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체없이 해당 개인정보를 파기합니다.<br/>
                ② 정보주체로부터 동의받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보(또는 개인정보파일)을 별도의 데이터베이스(DB)로 옮기거나 보관장소를 달리하여 보존합니다.<br/>
                ③ 개인정보 파기의 절차 및 방법은 다음과 같습니다.<br/>
                <br/>
                1. 파기절차 : Solvist World Wide는 파기하여야 하는 개인정보(또는 개인정보파일)에 대해 개인정보 파기계획을 수립하여 파기합니다. Solvist World Wide는 파기 사유가 발생한 개인정보(또는 개인정보파일)을 선정하고, Solvist World Wide의 개인정보 보호책임자의 승인을 받아 개인정보(또는 개인정보파일)을 파기합니다.<br/>
                2. 파기방법 : Solvist World Wide는 전자적 파일 형태로 기록․저장된 개인정보는 기록을 재생할 수 없도록 파기하며, 종이 문서에 기록․저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.<br/>
                제6조 (개인정보의 안전성 확보 조치)<br/>
                ① Solvist World Wide는 개인정보의 안전성 확보를 위해 다음과 같은 조치를 취하고 있습니다.<br/>
                <br/>
                1. 관리적 조치 : 내부관리계획 수립․시행, 정기적 직원 교육 등<br/>
                2. 기술적 조치 : 개인정보처리시스템 등의 접근권한 관리, 접근통제시스템 설치, 고유식별정보 등의 암호화, 보안프로그램 설치<br/>
                3. 물리적 조치 : 전산실, 자료보관실 등의 접근통제<br/>
                제7조(개인정보 자동 수집 장치의 설치∙운영 및 거부에 관한 사항)<br/>
                Solvist World Wide는 정보주체의 이용정보를 저장하고 수시로 불러오는 ‘쿠키(cookie)’를 사용하지 않습니다.<br/>
                <br/>
                제8조(개인정보 보호책임자)<br/>
                ① Solvist World Wide는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다<br/>
                <br/>
                개인정보 보호책임자<br/>
                성명 : 육미라<br/>
                직책 : 대표<br/>
                연락처 : 82 2 783 3055, mira_youk@solvistworldwide.com<br/>
                ※ 개인정보 보호 담당부서로 연결됩니다.<br/>
                <br/>
                ② 정보주체께서는 Solvist World Wide의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호 책임자 및 담당부서로 문의하실 수 있습니다. Solvist World Wide는 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다.<br/>
                <br/>
                제9조(개인정보 열람청구)<br/>
                ① 정보주체는 개인정보 보호법 제35조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. Solvist World Wide는 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.<br/>
                <br/>
                ② 정보주체께서는 제1항의 열람청구 접수․처리부서 이외에, 행정안전부의 ‘개인정보보호 종합지원 포털’ 웹사이트(www.privacy.go.kr)를 통하여서도 개인정보 열람청구를 하실 수 있습니다.<br/>
                <br/>
                행정안전부 개인정보보호 종합지원 포털 → 개인정보 민원 → 개인정보 열람등 요구 (본인확인을 위하여 아이핀(I-PIN)이 있어야 함)<br/><br/>
                제10조 (권익침해 구제방법)<br/>
                정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다. [아래의 기관은 Solvist World Wide와는 별개의 기관으로서, Solvist World Wide의 자체적인 개인정보 불만처리, 피해구제 결과에 만족하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다.]<br/>
                <br/>
                개인정보 침해신고센터 (한국인터넷진흥원 운영)<br/>
                소관업무 : 개인정보 침해사실 신고, 상담 신청<br/>
                홈페이지 : privacy.kisa.or.kr<br/>
                전화 : (국번없이) 118<br/>
                주소 : (58324) 전남 나주시 진흥길 9(빛가람동 301-2) 3층<br/>
                <br/>
                개인정보침해신고센터 개인정보 분쟁조정위원회<br/>
                소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)<br/>
                홈페이지 : www.kopico.go.kr<br/>
                전화 : (국번없이) 1833-6972<br/>
                주소 : (03171)서울특별시 종로구 세종대로 209 정부서울청사 4층<br/>
                <br/>
                대검찰청 사이버범죄수사단 : 02-3480-3573 (www.spo.go.kr)<br/>
                경찰청 사이버안전국 : 182 (http://cyberbureau.police.go.kr)
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="inner">
        <div class="top">
            <div class="logo">
                <img src="<?=G5_IMG_URL;?>/footer_logo.png" />
            </div>
            <ul class="list">
                <li><a href="#" class="privacy_btn"><span>개인정보처리방침</span> <img src="<?=G5_IMG_URL;?>/footer_plus_icon.png" class="plus"/></a></li>
            </ul>
        </div>
        <div class="bottom">
            <ul class="list">
                <li>솔비스트 월드 와일드</li>
                <li>대표 컨설턴트 : 육미라</li>
            </ul>
            <ul class="list">
                <li>사업자 등록번호 : 479-35-00042</li>
                <li>CS센터 : </li>
            </ul>
            <ul class="list">
                <li>주소 : 서울특별시 중구 세종대로 136, 3층 (태평로1가, 파이낸스 빌딩)</li>
                <li>전화번호 : +82 2 783 3055</li>
                <li>이메일 : mira_youk@solvistworldwide.com</li>
            </ul>

            <p class="copy_right">©SOLVIST WORLDWIDE All rights reserved.</p>
        </div>
    </div>
</footer>


<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
    include_once(G5_THEME_PATH."/tail.sub.php");
?>