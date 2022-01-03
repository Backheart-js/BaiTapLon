$('.navbar__search-input').focus(function() {
    $('.navbar__select-wrap').addClass('d-block');
    $('.navbar__search-input').addClass('bg-light');
})

function removeSelect() {
    $('.navbar__select-wrap').removeClass('d-block');
    $('.navbar__search-input').removeClass('bg-light');
}
var input = document.querySelector('.navbar__search-input');
input.addEventListener('focusout', removeSelect);

console.log(input);

$('.navbar__select-wrap').mouseenter(function() {
    input.removeEventListener('focusout', removeSelect);    //Tắt các lựa chọn tìm kiếm
})
$('.navbar__select-wrap').mouseleave(function() {
    input.addEventListener('focusout', removeSelect);    //Tắt các lựa chọn tìm kiếm
})


// Chuyển hướng sang đăng nhập và đăng kí
$('.navbar__login-btn').click(function() {
    window.location.assign('user/login.php');
})

$('.navbar__signup-btn').click(function() {
    window.location.assign('user/signup.php');
})

$('.content__text-btn').click(function() {
    window.location.assign('user/signup.php');
})