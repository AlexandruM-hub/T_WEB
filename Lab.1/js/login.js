$(document).ready(function () {
  $('#usercheck').hide();
  let usernameError = true;

      $('#usernames').keyup(function () {
          validateUsername();
      });

  function validateUsername() {
      let usernameValue = $('#usernames').val();
      if((usernameValue.length < 3)|| (usernameValue.length > 10)) {
          $('#usercheck').show();
          $('#usercheck').html
("**length of username must be between 3 and 10");
          usernameError = false;
          return false;
      }
      else {
          $('#usercheck').hide();
          usernameError =true;
      }
    }


    $('#passcheck').hide();
   let passwordError = true;

   $('#password').keyup(function () {
       validatePassword();
   });
   function validatePassword() {
       let passwordValue = $('#password').val();
       if (passwordValue.length == '') {
           $('#passcheck').show();
           passwordError = false;
           return false;
       }
       if ((passwordValue.length < 3) || (passwordValue.length > 10)) {
           $('#passcheck').show();
           $('#passcheck').html
("**length of your password must be between 3 and 10");
           $('#passcheck').css("color", "red");
           passwordError = false;
           return false;
       } else {
           $('#passcheck').hide();
           passwordError = true;
       }
   }


      $('#submitbtn').click(function verif(e) {
          validateUsername();
          validatePassword();
          if ((usernameError == true) && (passwordError == true))
          {
            var usernames = $('#usernames').val();
            var password = $('#password').val();
            $.ajax({
              type: 'POST',
              url: "php/login.php",
              data:{
                usernames: usernames,
                password: password
              },
              cache: false,
              success: function (response) {
                var response = JSON.parse(response);
                if(response.statusCode == 200){
                  var modal = document.getElementById('id01');
                  modal.style.display = 'none';
                  $('#logged_in_id').show();
                  setTimeout(function(){
                    $('#logged_in_id').hide();
                  },3000);
                  $('#registerID').hide();
                  $('#loginID').hide();

                } else{
                  var wrongLogin = document.getElementById('wrongLogin');
                  $('#welcomeImgLogin').hide();
                  wrongLogin.style.display = 'block';
                  setTimeout(function(){
                    $('#welcomeImgLogin').show();
                    wrongLogin.style.display = 'none';
                  }, 4000);
                }
              },
              error: function() {
                alert("Something Wrong");
              }
          });
          return false;
        }else {
              return false;
          }
        })
});

/**/
