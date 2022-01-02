$(document).ready(function(){
    var checkNull=false;
    // var FirstName=$("inputFirstName").val();
    // var LastName=$("inputLastName").val();
    // var Age=$("inputAge").val();
    // var Email=$("inputEmail").val();
    // var Password=$("inputPassword").val();

    $("#inputFirstName").change(function(){
        // alert($("#inputFirstName").val());
        let regex_FirstName=/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,20}$/.test($(this).val());   
        if(!regex_FirstName){
            $("#errorFirstName").text("Firstname Invalid");
            return false;
        }
        else{
            $("#errorFirstName").text("");
        }
    })
    $("#inputLastName").change(function(){
        // alert($("#inputFirstName").val());
        let regex_LastName=/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,20}$/.test($(this).val());
        if(!regex_LastName){
            $("#errorLastName").text("LastName Invalid");
            checkNull=true;
        }else{
            $("#errorLastName").text("");
        }
    })
    $("#inputAge").change(function(){
        
        let regex_Age=/^([1-9][0-9]|1[0-9]{2})$/.test($(this).val());   
        if(!regex_Age){
           
            $("#errorAge").text("Age Invalid");
            checkNull=true;
        }else{
            $("#errorAge").text("");
        }
        
    })
    $("#inputEmail").change(function(){
        // alert($("#inputFirstName").val());
        let regex_Email=/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($(this).val());   
        Email=$("#inputEmail").val();
        if(!regex_Email){
            $("#errorEmail").text("Email Invalid");
            checkNull=true;
        }
        else{
            // alert($(this).val());
            $("#errorEmail").text("");
            $.ajax({
                url: '/BaiTapLon/user/signup-process/checkExistsEmail.php',
                type: 'post',
                data: {Email: $(this).val()},
                success: function(response){
                    $('#errorEmail').text(response);
                 },
                error: function(){
                    $("#errorEmail").text("Error");
                 }
             });
        }
    })
    $("#inputPassword").change(function(){
        // alert($("#inputFirstName").val());
        let regex_Password=/^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{7,}$/.test($(this).val());   
        if(!regex_Password){
            $("#errorPassword").text("Please use at least 8 characters,one digit,one lower case,one upper case");
            checkNull=true;
        }
        else{
            $("#errorPassword").text("");
        }
    })
    if(checkNull===true){
        return false;
    }
    // if(grecaptcha.getResponse().length==0){
    //     $("#Unchecked").text("Unchecked captcha");
    // }
    // else{
    //     $("#Unchecked").text("");

    // }
    // grecaptcha.getResponse(function(){
    //     if("success"== true){
    //         $("#Unchecked").text("");
    //     }
    // })
    // $("#Unchecked").text("");
    $("#btnSignup").click(function(event){
        if($("#inputFirstName").val()===""){
            // alert($("#inputFirstName").val());
            $("#errorFirstName").text("You are not entered firstname");
            checkNull=true;
        }
        if($("#inputLastName").val()===""){
            $("#errorLastName").text("You are not entered lastname");
            checkNull=true;
        }
        if($("#inputAge").val()===""){
            $("#errorAge").text("You are not entered age");
            checkNull=true;
        }
        if($("#inputEmail").val()===""){
            $("#errorEmail").text("You are not entered email");
            checkNull=true;
        }
        if($("#inputPassword").val()===""){
            $("#errorPassword").text("You are not entered password");
            checkNull=true;
        }
        // var $captcha = false;
        // $(".recaptcha-checkbox-border").click(function(){
        //     $captcha = true;
        // });
        
        // if ($captcha===false){
        //     $("#Unchecked").text("Unchecked captcha");
        //     event.preventDefault();
        // }
        // else{
        //     $("#btnSignup").submit();
        //     $("#Unchecked").text("");
            
        // }
        $("#Unchecked").text("");
        if(grecaptcha.getResponse().length==0 || $("#inputFirstName").val()==="" || $("#inputLastName").val()==="" || $("#inputAge").val()==="" || $("#inputEmail").val()==="" || $("#inputPassword").val()===""){
            $("#Unchecked").text("Unchecked captcha");
            
                event.preventDefault();
        }
        else{
            $("#Unchecked").text("");
            $("#btnSignup").submit();
        }
        
    });
    
    
    // alert($("#inputFirstName").val());
})