// Search
var input = document.querySelector('.navbar-search__input'),
    search_select = document.querySelector('.navbar-search__select-wrap'),
    input_wrap = document.querySelector('.navbar-search__input-wrap'),
    value;

input.addEventListener('input', function(e) {
    value = e.target.value;
    if(value !== '') {
        search_select.classList.add('d-block');
    }
    else {
        search_select.classList.remove('d-block');

    }
    console.log(value);
})

// input.addEventListener('click', function(e) {
//     input_wrap.classList.add('input-width-enter');
// })

input.addEventListener('change', function(e) {
    var valuechange = '';
    valuechange = e.target.value;
    console.log(valuechange);
    if (valuechange !== '') {
        search_select.classList.remove('d-block');
    }
})

input.addEventListener('focus', function(e) {
    input_wrap.classList.add('input-width-enter','bg-light');
})
input.addEventListener('focusout', function(e) {
    input_wrap.classList.remove('input-width-enter','bg-light');
})

var btn_login = document.querySelector('.navbar-search__login-btn'),
    btn_signup = document.querySelector('.navbar-search__signup-btn');

btn_login.addEventListener('click', function(e) {
    window.location.assign('user/login.php');
})
btn_signup.addEventListener('click', function(e) {
    window.location.assign('user/signup.php');
})