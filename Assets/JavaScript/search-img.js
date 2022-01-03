// Search
var input = document.querySelector('.navbar-search__input'),
    search_select = document.querySelector('.navbar-search__select-wrap'),
    input_wrap = document.querySelector('.navbar-search__input-wrap'),
    value;

    input.addEventListener('focus', function(e) {
        input_wrap.classList.add('input-width-enter','bg-light');   //Forcus vào thì phóng to ra và đổi bg thành màu sáng
    })
    input.addEventListener('focusout', remove_input_width);     //Focus ra ngoài thì gỡ phóng to và bg thành tối
    input.addEventListener('focusout', remove_input_select);    //Tắt các lựa chọn tìm kiếm
    function remove_input_width() {
        input_wrap.classList.remove('input-width-enter','bg-light');
    }
    function remove_input_select() {
        search_select.classList.remove('d-block');
    }


var btn_search = document.querySelector('.navbar-search__select-item')

input.addEventListener('input', function(e) {
    value = e.target.value;
    if(value!=='') {    //Nếu có giá trị trong input thì sự kiện lắng nghe của focusout bị remove
        search_select.classList.add('d-block');
        input.removeEventListener('focusout', remove_input_width);
        input.addEventListener('focus', function(e) {
            search_select.classList.add('d-block');
        })
    }
    else {
        search_select.classList.remove('d-block');  
        // input.addEventListener('focusout', remove_input_width);
    }
})

$('.navbar-search__select-wrap').mouseenter(function() {
    input.removeEventListener('focusout', remove_input_select);    //Tắt các lựa chọn tìm kiếm
})
$('.navbar-search__select-wrap').mouseleave(function() {
    input.addEventListener('focusout', remove_input_select);    //Tắt các lựa chọn tìm kiếm
})


var btn_login = document.querySelector('.navbar-search__login-btn'),
    btn_signup = document.querySelector('.navbar-search__signup-btn');

btn_login.addEventListener('click', function(e) {
    window.location.assign('user/login.php');
})
btn_signup.addEventListener('click', function(e) {
    window.location.assign('user/signup.php');
})


//Fetch API
var photoQueryURL = 'https://api.flickr.com/services/rest/?' + $.param({
            'method': 'flickr.photos.search',
            'api_key': 'da0eebbdc8f5e56327a367f37bdfc6ac',
            'tags': $('.navbar-search__input').val(),
            'format': 'json',
            'nojsoncallback': '1'
          });
      $.ajax({
          url: photoQueryURL,
          success: function(data) {
            console.log(data);
            var output_data = data.photos.photo,
                html ='',
                len = output_data.length;
            if (len > 0) {
              var i;
              for (i = 0; i < len; i++) {
                var src = `https://farm${output_data[i].farm}.staticflickr.com/${output_data[i].server}/${output_data[i].id}_${output_data[i].secret}.jpg`;
                  html += "<li class='body-search__item'>";
                  html += `<img src=${src} style='height:100%'>`;
                  html += "</li>";
              }
              $(".body-search__list").html(html);
            }
          
          }
      });


  $('.navbar-search__input').change(function () {
    var output = $(this).val();
    console.log(output);
      var photoQueryURL = 'https://api.flickr.com/services/rest/?' + $.param({
            'method': 'flickr.photos.search',
            'api_key': 'da0eebbdc8f5e56327a367f37bdfc6ac',
            'tags': output,
            'format': 'json',
            'nojsoncallback': '1'
          });

      $('#submit-search-img').click(function() {
        $.ajax({
            url: photoQueryURL,
            success: function(data) {
              console.log(data);
              var output_data = data.photos.photo
                  html ='',
                  len = output_data.length;
              if (len > 0) {
                var i;
                for (i = 0; i < len; i++) {
                  var src = `https://farm${output_data[i].farm}.staticflickr.com/${output_data[i].server}/${output_data[i].id}_${output_data[i].secret}.jpg`;
                  html += "<li class='body-search__item'>";
                  html += `<img src=${src} style='height:100%'>`;
                  html += "</li>";
                }
                $(".body-search__list").html(html);
              }
            
            }
        });       
      });
  });
