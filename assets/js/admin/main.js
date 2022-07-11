
function checkPage() {
    var thong_bao = document.querySelector('i#testtb')
    var toasts = {
        success: {
            icon: '<i class="fas fa-check-circle"></i>',
            msg: 'Thành Công!',
        },
        error: {
            icon: '<i class="fas fa-exclamation-circle"></i>',
            msg: 'Thất Bại!',
        },
        // warning: {
        //     icon: '<i class="fas fa-exclamation-triangle"></i>',
        //     msg: 'Cảnh Báo!',
        // },
    }
    if (thong_bao) {
        const icon = toasts[thong_bao.getAttribute('class')].icon
        const msg = toasts[thong_bao.getAttribute('class')].msg
        const info = thong_bao.innerText
        var toast = document.createElement('div')
        toast.className = `thong_bao ${thong_bao.getAttribute('class')}`
        toast.innerHTML =
            `${icon}
                            <span class="msg">${info} ${msg}</span>
                            <span class="countdown"></span>`
        var main = document.querySelector('#thong_bao')
        main.appendChild(toast)
        setTimeout(() => {
            toast.style.animation = 'hide_slide 1s ease forwards'
        }, 1500)
        setTimeout(() => {
            toast.innerHTML = ''
            toast.remove()
        }, 3000)
    }
}



