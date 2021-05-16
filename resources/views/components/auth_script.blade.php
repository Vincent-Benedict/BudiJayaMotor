<script>

    let login_button = document.getElementById('login-button')
    let login_popup = document.getElementById('login-popup')
    let exit_button = document.getElementById('exit-button')

    if(login_button != null){
        login_button.addEventListener('click', () => login_popup.style.display = 'block')
        exit_button.addEventListener('click', () => login_popup.style.display = 'none')
    }

</script>