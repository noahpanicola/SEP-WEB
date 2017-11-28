$(document).ready(function(){
    $("#btn-login").click(function(){
        $.ajax(
            { 
              type: "POST",
              url: "/map/mapping.php?method=login",
              dataType: 'json',
              data: {
                email: "noahpanicola@gmail.com",
                password: "test"
              },
              success: function(xhr){
                    console.log(xhr.responseText);
                    alert('success');
              },
              error: function (xhr) {
                     alert(xhr.responseText);
              }
            }
        );
    });
    $("#btn-session").click(function(){
        $.get(
            { 
              url: "/map/mapping.php?method=getuserbysession",
              dataType: 'json',
              success: function(data){
                    console.log(data);
                    alert('success');
              },
              error: function (data) {
                     alert(data);
              }
            }
        );
    });
});