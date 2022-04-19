var working = false;

$(document).on('click', '.btnlogin', function (e) {
  e.preventDefault();    
    working = true;
    var username = $('input[name=username]').val();
    var password = $('input[name=password]').val();
    var remember = $('input[name=remember]').is(':checked');
    if ((username == '') || (password == '')) {
        toast.fire({
            position:'center',
            icon: 'error',
            title: '<strong class="text-red">username and Password Required</strong>',
            showConfirmButton: false,
            width: '24rem',
            timer: 2500
        });
        return false;
    }else{
        // alert(password);
        let url = $('#LoginForm').attr('action');
        $(".btnlogin").attr('disabled', true);
        $('.btnlogin > span').html('Authenticating...');
        $('.btnlogin > i').removeClass('d-none');
        let fd = new FormData();
        fd.append('username', username);
        fd.append('password', password);
        axios({
            method: 'POST',
            url: url,
            data: fd
        })
        .then(function (response) { 
            if (response.data.LoginStatus == 1) {
                $(".btnlogin").removeClass('btn-primary').addClass('btn-success');
                $(".btnlogin").attr('disabled', false);
                $('.btnlogin > span').html(response.data.authSuccess);
                $('.btnlogin > i').removeClass('d-block').addClass('d-none');
                setTimeout(() => {
                    window.location = response.data.redirect;                   
                }, 3500);
            }
            if (response.data.LoginStatus == null) {
                $(".btnlogin").attr('disabled', false);
                $('.btnlogin > span').html('Sign In');
                $('.btnlogin > i').removeClass('d-block').addClass('d-none');
                $(".authFailedAlert").removeClass('d-none');
                $(".authFailed").html(response.data.authFailed);
                setTimeout(() => {
                    $(".authFailedAlert").removeClass('d-block').addClass('fadeOut').addClass('fadeOut').addClass('d-none');
                    $(".authFailed").html('');                    
                }, 2500);
                return false;
            }
            if (response.data.LoginStatus == 0 && response.data.problem == 1) {
                $(".btnlogin").attr('disabled', false);
                $('.btnlogin > span').html('Sign In');
                $('.btnlogin > i').removeClass('d-block').addClass('d-none');
                $(".authFailedAlert").removeClass('d-none');
                $(".authFailed").html(response.data.authFailed);
                setTimeout(() => {
                    $(".authFailedAlert").removeClass('d-block').addClass('fadeOut').addClass('fadeOut').addClass('d-none');
                    $(".authFailed").html('');                    
                }, 5000);
                return false;
                
            }
            if (response.data.LoginStatus == 0) {
                $(".btnlogin").attr('disabled', false);
                $('.btnlogin > span').html('Sign In');
                $('.btnlogin > i').removeClass('d-block').addClass('d-none');
                $(".authFailedAlert").removeClass('d-none');
                $(".authFailed").html(response.data.authFailed);
                setTimeout(() => {
                    $(".authFailedAlert").removeClass('d-block').addClass('fadeOut').addClass('fadeOut').addClass('d-none');
                    $(".authFailed").html('');                    
                }, 2500);
                return false;
            }
        })
        .catch((errors) => {
            if (errors.response) {                
                
                var el;
                $.each(errors.response.data.errors, function (i, value) {
                    el = $(document).find('[name="' + i + '"]');
                    el.hasClass("is-invalid") ? el.removeClass('is-invalid') : '';
                    if (el.parent().find($('span')).length) {
                        el.closest().find($('span')).remove();
                    } else {
                        el.after($('<span class="text-danger">' + value + '</span>'));
                    }
                });
            }
        });
    }
});