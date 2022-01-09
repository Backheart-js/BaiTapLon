$(document).ready(function(){
    $("#write-you").click(function(){
        // $("#aboutyou>i").toggle();
        $("#textarea").toggle();

        // $("#save").toggle();
        // $("#cancel").toggle();
    })

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