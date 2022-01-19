$(document).ready(function() {
    $('.input-search').change(function() {
      var value = $(this).val();
      console.log(value);
      $('.btn-submit').click(function() { 
        if(value!='') {
          $('#search-table').css('display', 'table');
          $('#main-table').css('display', 'none');
          $.ajax({
            url: "/BaiTapLon/admin/process-search.php",
            type: 'POST', 
            data: {id: value},
            dataType: 'json',
            success: function(response) {
                console.log(response);
                var html='';
                html+= `<tr>`;
                html+= `<th scope="row">${response.id}</th>`;
                html+= `<th>${response.firstname}</th>`;
                html+= `<th>${response.lastname}</th>`;
                html+= `<th>${response.age}</th>`;
                html+= `<th>${response.email}</th>`;
                html+= `<td><a href="ad-albumuser.php?email=${response.email}"><i
                class="fas fa-images"></i></a></td>`;
                html+= `</tr>`;
                $('#search-table__content').html(html);
  
            }
          })
        }
      })
      if(value=='') {
        $('#search-table').css('display', 'none');
        $('#main-table').css('display', 'table');
      }
    })
})