
//xử lí phần mắt nhưng đang lỗi
function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);

//

$(document).ready(function()
{

    //kiểm tra tính hơp lệ của email
    $("#email").change(function(){
        alert($("#email").val());
        let emailPattern = /\S+@\S+\.\S+/;
        if (emailPattern.test($(this).val()) == false)
        {
            $("#emailHelp").text("Email không hợp lệ").css("color","red");
        } else {
            // Server : gửi dữ liệu về server để kiểm tra và phản hồi nếu có lỗi
            // $.ajax({
            //     url:"login-process.php",
            //    type:"post",
            //    data:{email:$(this).val(),pass:$("#pwd").val()},
            //    //call backfunction
            //    success:function(res){
            //     $("#emailHelp").text(res).css("color","red");
            //    }
            // })
        }
    })
})

