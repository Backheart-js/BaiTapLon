//
// let doanVan=document.getElementsByTagName("p")
// let btnClick= document.getElementById ("btnClick")

// //Bắt sự kiện
// btnClick.addEventListener('click',function(){
//     for(let i=0;i<doanVan.length;i++)
//     //Phần tử ở vị trí chẵn
//     if(i%2){
//         doanVan[i].style.color='red'
//     }
// }
// )
//Sử dụng jQuery để thay thế cách dùng Javascrip thuần
//1.Jquery là 1 thư viện , để sử dụng import
//Cài đặt trước script của chúng ta khai báo

//Học jquery: $(selectoe).action(funcion(){})
$(document).ready(function(){
    //luôn đảm báo chỉ thực hiện nội dung bên trong
    //khi trang web được tải xuống
    $("#btnClick").click(function(){
        $("p:odd").css("color","red")
    })
})