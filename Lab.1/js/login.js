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

      $('#submitbtn').click(function verif() {
          validateUsername();
          validatePassword();
          if ((usernameError == true) && (passwordError == true))
          {
              return true;
          } else {
              return false;
          }
      });

});