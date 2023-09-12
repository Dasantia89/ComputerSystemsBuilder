function validate(form)
      {
        fail = validateFirstname(form.firstname.value)
        fail += validateLastname(form.lastname.value)
        fail += validateUsername(form.username.value)
        fail += validatePassword(form.password.value)
        fail += validateEmail(form.email.value)
        if(form.password.value != form.confirm.value)
          fail += 'Passwords must match.\n'
        if   (fail == "")   return true
        else { alert(fail); return false }
      }


      function validateusername(form)
      {
        fail = validateUsername(form.new_username.value)
        if   (fail == "")   return true
        else { alert(fail); return false }
      }

      function validateemail(form)
      {
        fail = validateEmail(form.new_email.value)
        if   (fail == "")   return true
        else { alert(fail); return false }
      }

      function validatepw(form)
      { 
        fail = validatePassword(form.old_pw.value)
        fail += validatePassword(form.new_pw.value)
        if(form.new_pw.value != form.confirm.value)
          fail += 'Passwords must match.\n'
        if   (fail == "")   return true
        else { alert(fail); return false }
      }

      function validateFirstname(field)
      {
        return (field == "") ? "No Firstname was entered.\n" : ""
      }
      
      function validateLastname(field)
      {
        return (field == "") ? "No Lastname was entered.\n" : ""
      }

      function validateUsername(field)
      {
        if (field == "") return "No Username was entered.\n"
        else if (field.length < 5)
          return "Usernames must be at least 5 characters.\n"
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
        return ""
      }

      function validatePassword(field)
      {
        if (field == "") return "No Password was entered.\n"
        else if (field.length < 5)
          return "Passwords must be at least 5 characters.\n"
        else if (! /[A-Z]/.test(field) ||
                 ! /[0-9]/.test(field))
          return "Passwords require one uppercase letter and one number.\n"
        return ""
      }


      function validateEmail(field)
      {
        if (field == "") return "No Email was entered.\n"
          else if (!((field.indexOf(".") > 0) &&
                     (field.indexOf("@") > 0)) ||
                     /[^a-zA-Z0-9.@_-]/.test(field))
            return "The Email address is invalid.\n"
        return ""
      }

      /*
      var mult = function(arg1, arg2)
      $.ajax({
      url: "webservice.php?action=mult&arg1="+arg1+"&arg2="+arg2
      }).done(function(data) {
      console.log(data);
      });
      

      jQuery.ajax({
        type: "POST",
        url: 'servicios.php',
        data: {functionname: 'enviaCorreo', arguments: [$(".Txt_Nombre").val(), $(".Txt_Correo").val(), $(".Txt_Pregunta").val()]}, 
         success:function(data) {
        alert(data); 
         }
      }); */