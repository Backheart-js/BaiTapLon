$(document).ready(function() {
    $('.input-search').change(function() {
      var value = $(this).val();
      console.log(value);
      $('.btn-submit').click(function() {
          $.ajax({
            url: "process-search.php",
            type: 'POST',
            data: {id: value},
            success: function(response) {
                
            }
          })
      })
    })
})