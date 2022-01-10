$(document).ready(function(){

    // xử lý cho mục about - giới thiệu
    $(".js-change-avt").click(function(){
        // alert("Đây rùi");
        $(".modal").addClass('openmodal');
    })

    $(".js-modal-close").click(function(){
        $(".modal").removeClass('openmodal');
    })

    $(".js-about-write").click(function(){
        $(".js-aboutyou").hide();
        $(".write-about").addClass('opentxt');
        // alert("hello");
    })
    $(".js-about-save").click(function(){
        $(".js-aboutyou").show();
        $(".write-about").removeClass('opentxt');
        // alert("hello");
    })
    $(".js-about-cancel").click(function(){
        $(".js-aboutyou").show();
        $(".write-about").removeClass('opentxt');
        // alert("hello");
    })


    $(".js-cancel-save").click(function(){
        $(".write-about").removeClass('opentxt');
        // alert("hello");
    })
    $(".js-write-area").change(function(){
        let writearea=/^\s+$/.test($(".js-write-area").val());
        $(".js-about-save").click(function(){
            if(!writearea){
                $(".js-aboutyou").text($(".js-write-area").val());
            }
            else{
                $(".js-aboutyou").text("Hãy giới thiệu đôi điều về bạn");

            }
        })
        $(".js-about-cancel").click(function(){
            $(".js-write-area").text($(".js-aboutyou").val());
            // $(".js-aboutyou").text($(".js-aboutyou").val());
            // $(".js-aboutyou").show();
        })
        

        /* if(!$(".js-write-area").val()===null){
            $(".js-aboutyou").text("Hãy giới thiệu đôi điều về bạn");
        }
        else{
            $(".js-aboutyou").text($(".js-write-area").val());
        } */
    })

    $("#js-modal-about").click(function(){
        $("#js-modal-about").css("border-bottom","blue solid");
        $("#js-modal-photostream").css("border-bottom","none");
        $("#js-modal-albums").css("border-bottom","none");
    })
    $("#js-modal-photostream").click(function(){
        $("#js-modal-photostream").css("border-bottom","blue solid");
        $("#js-modal-about").css("border-bottom","none");
        $("#js-modal-albums").css("border-bottom","none");
     })
    $("#js-modal-albums").click(function(){
        $("#js-modal-albums").css("border-bottom","blue solid");
        $("#js-modal-about").css("border-bottom","none");
        $("#js-modal-photostream").css("border-bottom","none");
     })
    



    //xử lý cho mục kho ảnh -phototream






    // $("#write-you").click(function(){
    //     // $("#aboutyou>i").toggle();
    //     $("#textarea").toggle();

    //     // $("#save").toggle();
    //     // $("#cancel").toggle();
    // })

    $("#about").click(function(event){
        $("#about").css("border-bottom","blue solid");
        // $("#about-view").css("display","block");
        $get("/user/personal-page-user/index.php",function(data){
            $("#about-view").html(data);
            // event.preventDefault();
        })
    })

    $("#photostream").click(function(event){
        $("#photostream-view").css("display","block");
    })

    //load()
})