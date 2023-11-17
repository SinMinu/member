document.addEventListener("DOMContentLoaded",() => {
    const btn_member = document.querySelector("#btn_member")

    btn_member.addEventListener("click", () => {
        const chk_member1 = document.querySelector("#chk_member1")
        if(chk_member1.checked !== true){
            alert('회원 약관에 동의해 주셔야 가입이 가능합니다.')
            return false
        }

        const chk_member2 = document.querySelector("#chk_member2")
        if(chk_member2.checked !== true){
            alert('개인정보 취급방침에 동의해 주셔야 가입이 가능합니다.')
            return false
        }

        const f = document.stipluation_form
        f.chk.value = 1
        f.submit()
    })
})