$(document).ready(function(){

    // xử lý cho mục about - giới thiệu
    $(".js-change-avt").click(function(){
        // alert("Đây rùi");
        $(".modal").addClass('openmodal');
        // $("#js-photostream").css("display","block");
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

    $("#js-modal-update").click(function(){
        $("#js-modal-update").css("border-bottom","blue solid");
        $("#js-modal-photostream").css("border-bottom","none");
        $("#js-modal-album").css("border-bottom","none");
    })
    $("#js-modal-photostream").click(function(){
        $("#js-modal-photostream").css("border-bottom","blue solid");
        $("#js-modal-update").css("border-bottom","none");
        $("#js-modal-album").css("border-bottom","none");
     })
    $("#js-modal-album").click(function(){
        $("#js-modal-album").css("border-bottom","blue solid");
        $("#js-modal-update").css("border-bottom","none");
        $("#js-modal-photostream").css("border-bottom","none");
     })

     $(".subnav").click(function(){
        var eid = $(this).attr("id");
        const eidarray = ["about", "photostream", "albums","faves","galleries","group","stats","cameraRoll"];
        $("#"+eid).addClass('js-subnav-add-border');
        for (let i = 0; i < eidarray.length; i++) {
            if (eidarray[i]!=eid) {
                //  alert(eidarray[i]);
                var id=eidarray[i];
                $("#"+id).removeClass('js-subnav-add-border');
                // alert("hello");
            }
          }
    })

   
})