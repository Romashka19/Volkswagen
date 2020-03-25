(function() {
    $(document).ready(function() {
        $('#registerBtn').click(function(params) {
            let name = $('#register_name').val();
            let email = $('#register_email').val();
            let password = $('#register_password').val();
            let phone = $('#register_phone').val();
            let access = 'user';
            $.ajax({
                url: urlRoute['register'],
                type: 'POST',
                data:{
                    name: name,
                    email: email,
                    password: password,
                    phone: phone,
                    access:access,
                    _token: csrfToken
                },
                success: function(answer) {
                    if( answer.status ) {
                        setTimeout(function(){
                            window.location.href = answer.redirect;
                        }, 300);
                    }
                },
                error: function(answer) {
                    showNotify({ title: 'Login', message: 'Failed request', type: 'Success' });
                }

            });
        });

        $('#loginBtn').click(function(params) {
            let email = $('#login_email').val();
            let password = $('#login_password').val();
            $.ajax({
                url: urlRoute['login'],
                type: 'POST',
                data:{
                    email: email,
                    password: password,
                    _token: csrfToken
                },
                success: function(answer) {
                    if( answer.status ) {
                        setTimeout(function(){
                            window.location.href = answer.redirect;
                        }, 300);
                    }
                },
                error: function(answer) {
                    showNotify({ title: 'Login', message: 'Failed request', type: 'Success' });
                }
            });
        });
    })
})();
