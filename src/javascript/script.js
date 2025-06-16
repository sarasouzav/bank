const passwordIcons = document.querySelectorAll('.password-icon');

passwordIcons.forEach(icon => {
    icon.addEventListener('click',function(){
        const input = this.parentElement.queryselector('.form-control');
        input.type = input.type == 'password' ? 'text' : 'password';
        this.classList.taggle('fa-eye');
    })
})