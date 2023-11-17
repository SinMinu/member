<?php

if(!isset($_POST['chk']) || $_POST['chk'] != 1){
    // die("<script>
    // alert('약관 등을 동의하시고 접근하시기 바랍니다.')
    // self.location.href='./stipulation.php'
    // </script>");
}

include 'inc_header.php';

?>

<main class="w-50 mx-auto border rounded-5 p-5">
    <h1 class="text-center">회원가입</h1>
    <div class="d-flex gap-2 align-items-end">
        <div class="flex-grow-1">
        <label for="f_id" class="form-label">아이디</label>
        <input type="text" class="form-control" id="f_id" placeholder="아이디를 입력해 주세요.">
        </div>
        <button class="btn btn-secondary">아이디 중복확인</button>
    </div>

    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="flex-grow-1">
        <label for="f_password" class="form-label">비밀번호</label>
        <input type="password" class="form-control" id="f_password" placeholder="비밀번호를 입력해 주세요.">
        </div>
    </div>
    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="flex-grow-1">
        <label for="f_password2" class="form-label">비밀번호 확인</label>
        <input type="password" class="form-control" id="f_password2" placeholder="비밀번호를 입력해 주세요.">
        </div>
    </div>

    <div class="d-flex mt-3 gap-2 align-items-end">
        <div class="flex-grow-1">
        <label for="f_email" class="form-label">이메일</label>
        <input type="text" class="form-control" id="f_email" placeholder="이메일을 입력해 주세요.">
        </div>
        <button class="btn btn-secondary">이메일 중복확인</button>
    </div>

    <div class="d-flex mt-3 gap-2 align-items-end">
        <div class="flex-grow-1">
            <label for="f_zipcode">우편번호</label>
            <input type="text" name="zipcode" id="zipcode" class="form-control" maxlength="5" minlength="5">
        </div>
        <button class="btn btn-secondary">우편번호 찾기</button>
    </div>

    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="flex-grow-1">
        <label for="f_addr1" class="form-label">주소</label>
        <input type="text" class="form-control" id="f_addr1" placeholder="">
        </div>
    </div>
    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="flex-grow-1">
        <label for="f_addr2" class="form-label">상세주소</label>
        <input type="text" class="form-control" id="f_addr2" placeholder="상세주소를 입력해 주세요.">
        </div>
    </div>

    <div class="mt-3 d-flex gap-5">
        <div>
            <label for="f_photo" class="form-label">프로필이미지</label>
            <input type="file" name="photo" id="f_photo" class="form-control">
        </div>
        <img src="imgages/person.jpg" class="w-25" alt="profile image">
    </div>

    <div class="mt-3 d-flex gap-2">
        <button class="btn btn-primary flex-grow-1">가입확인</button>
        <button class="btn btn-secondary flex-grow-1">가입취소</button>
    </div>

</main>

<?php
include 'inc_footer.php';
?>