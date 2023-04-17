function hiden() {
    document.getElementById('eyeIconHide').style.display = 'none';
    document.getElementById('eyeIconView').style.display = 'inline-block';
    var x = document.forms['form'].elements['password'];
    x = x.length ? x[0] : x;
    if (x.type == 'password') {
        document.getElementById('password').setAttribute('type', 'text');
    } else {
        document.getElementById('password').setAttribute('type', 'password');
    }
}

function viewer() {
    document.getElementById('eyeIconHide').style.display = 'inline-block';
    document.getElementById('eyeIconView').style.display = 'none';
    var x = document.forms['form'].elements['password'];
    x = x.length ? x[0] : x;
    if (x.type == 'password') {
        document.getElementById('password').setAttribute('type', 'text');
    } else {
        document.getElementById('password').setAttribute('type', 'password');
    }
}