
function CheckInput(){
    let inputFirstName = document.getElementById('inputFirstName').value;
    // alert ('đến đây rùi');
    let inputLastName = document.getElementById('inputLastName').value;
    let inputAge = document.getElementById('inputAge').value;
    let inputEmail = document.getElementById('inputEmail').value;
    let inputPassword = document.getElementById('inputPassword').value;
    // console.log(inputFirstName);
    // let btnSignup=document.getElementByID('btnSignup').value;
    let CheckInput=false;
    let regex_FirstName=/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,20}$/;
    if(inputFirstName.length === 0 || !regex_FirstName.test(inputFirstName)){
      document.getElementById('errorFirstName').innerHTML='Invalid FirstName';
      CheckInput=true;
    }
    else{
        document.getElementById('errorFirstName').innerHTML='';
    }
    let regex_LastName=/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,20}$/;
    if(inputLastName.length === 0 || !regex_LastName.test(inputLastName)){
      document.getElementById('errorLastName').innerHTML='Invalid LastName';
      CheckInput=true;
    }
    else{
        document.getElementById('errorLastName').innerHTML='';
    }
    let regex_Age=/^([1-9][0-9]|1[0-9]{2})$/;
    if(inputAge.length===0 || !regex_Age.test(inputAge)){
      document.getElementById('errorAge').innerHTML='Invalid Age';
      CheckInput=true;
    }
    else{
        document.getElementById('errorAge').innerHTML='';
    }
    // let regex_Email=/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let regex_Email=/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(inputEmail.length===0 || !regex_Email.test(inputEmail)){
      document.getElementById('errorEmail').innerHTML='Invalid Email';
      CheckInput=true;
    }
    else{
        document.getElementById('errorEmail').innerHTML='';
    }
    let regex_password=/^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{7,}$/;
    if(inputPassword.length===0 || !regex_password.test(inputPassword)){
      // document.getElementById('errorPassword').innerHTML='Invalid Password';
      document.getElementById('errorPassword').innerHTML='Please use at least 8 characters,one digit,one lower case,one upper case ';
      CheckInput=true;
    }
    else{
        document.getElementById('errorPassword').innerHTML='';
    }

    // var recaptcha_response = '';
    // if(grecaptcha.getResponse().length === 0) {
    //   alert("Đã đến đây2");
    //   document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
    //   CheckInput=true;
    // }else{
    //   function callback(token) {
    //     recaptcha_response = token;
    //     document.getElementById('g-recaptcha-error').innerHTML = '';
    //     alert('ni');
    //     alert(recaptcha_response.length);
    //   }
    // }

    function isCaptchaChecked() {
      return grecaptcha && grecaptcha.getResponse().length !== 0;
    }
    
    if (!isCaptchaChecked()) {
      alert('đã vào đây');   
      console.log
      document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
      CheckInput=true;
    }
    else{
      document.getElementById('g-recaptcha-error').innerHTML = '';
    }



    //function callback(){
        
     
    //   if(recaptcha_response.length == 0) {
    //     document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
    //     return false;
    //   }
    // return true;
      //console.log("The user has already solved the captcha, now you can submit your form.");
      // document.getElementById('Unchecked').innerHTML='Unchecked captcha';
      // if(grecaptcha.getResponse() == ""){
      //   alert('Oops, you have to check the recaptcha !');
      //   document.getElementById('Unchecked').innerHTML='Unchecked captcha';
      //   CheckInput=true;
      // }
    //}
    
    if(CheckInput){
        return false;
    }
    
    
  }
  // function callback(token) {
  //     recaptcha_response = token;
  //     document.getElementById('g-recaptcha-error').innerHTML = '';
  // }