$(document).ready(function () {

    $('#usercheckRegister').hide();
    let usernameError = true;
        $('#usernamesRegister').keyup(function () {
            validateUsername();
        });

    function validateUsername() {
        let usernameValue = $('#usernamesRegister').val();
        if((usernameValue.length < 3)|| (usernameValue.length > 10)) {
            $('#usercheckRegister').show();
            $('#usercheckRegister').html
  ("**length of username must be between 3 and 10");
            usernameError = false;
            return false;
        }
        else {
            $('#usercheckRegister').hide();
            usernameError = true;
        }
      }


      $('#passcheck').hide();
     let passwordError = true;
     $('#passwordRegister').keyup(function () {
         validatePassword();
     });
     function validatePassword() {
         let passwrdValue =
             $('#passwordRegister').val();
         if (passwrdValue.length == '') {
             $('#passcheckRegister').show();
             passwordError = false;
             return false;
         }
         if ((passwrdValue.length < 3)||
             (passwrdValue.length > 10)) {
             $('#passcheckRegister').show();
             $('#passcheckRegister').html
  ("**length of your password must be between 3 and 10");
             $('#passcheckRegister').css("color", "red");
             passwordError = false;
             return false;
         } else {
             $('#passcheckRegister').hide();
             passwordError = true;
         }
     }

     $('#conpasscheck').hide();
   let confirmPasswordError = true;
   $('#conpassword').keyup(function () {
       validateConfirmPasswrd();
   });
   function validateConfirmPasswrd() {
       let confirmPasswordValue =
           $('#conpassword').val();
       let passwrdValue =
           $('#passwordRegister').val();
       if (passwrdValue != confirmPasswordValue) {
           $('#conpasscheck').show();
           $('#conpasscheck').html(
               "**Password didn't Match");
           $('#conpasscheck').css(
               "color", "red");
           confirmPasswordError = false;
           return false;
       } else {
           $('#conpasscheck').hide();
           confirmPasswordError = true;
       }
   }

   $('#emailvalid').hide();
   const email = document.getElementById('email');
   email.addEventListener('blur', ()=>{
      let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
      let s = email.value;
      if(regex.test(s)){
        $('#emailvalid').hide();
         email.classList.remove('is-invalid');
         emailError = true;
       }
       else{
         $('#emailvalid').show();
           email.classList.add('is-invalid');
           emailError = false;
       }
   })


      $('#submitbtnRegister').click(function () {
          validateUsername();
          validatePassword();
          validateConfirmPasswrd();
          if ((usernameError == true) && (passwordError == true) && (confirmPasswordError == true) && (emailError == true))
          {
              return true;
          } else {
              return false;
          }
      });

});
