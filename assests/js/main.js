 $(document).ready(function()  {
   $("#regContainer").submit(function(event) {
      
         event.preventDefault();
   
         var $form = $(".contain #regContainer")
      
         var $data ={
            firstname:$("input[name = 'firstname']",$form).val(),
            lastname:$("input[name ='lastname']",$form).val(),
            email:$("input[type='email']",$form).val(),
            password:$("input[type='password']",$form).val(),
            conpassword:$("input[name= 'confirmpasscode']",$form).val(),
            gender:$("select[name = 'gender']",$form).val()
         }
         var $error = $(".js-error",$form)
         var $succ = $(".js-success",$form)
         

         var $passwrd = $data.password
         var $conpasswrd = $data.conpassword
         if ($data.email.length <= 16) {
            $error.text('Enter a valid email address').show()
         } else if ($data.password.length <= 5) {
            $error.text('Enter a more secure password!').show()
         } else if ($conpasswrd !== $passwrd) {
            $error.text('passwords do not match.Check your password.').show()
            ajx.abort()
         } else{
            $error.hide()
            $succ.text('valid details..').show()
         }

         var ajx = $.ajax({
            type: 'POST',
            url:"ajax/register.php",
            data: $data,
            dataType: 'json', 
            async: true,
            success: function successful(res) {
               if (res.redirect !== undefined) {
                  window.location.href = res.redirect
         
               } else if (res.error !== undefined) {
                  $error.html(res.error).show()
                  
                  
               }
               
            },
            error: function errfunc(err) {
               document.write(err+" did happen, please retry");
               console.log("error   "+ Object.entries(err))
               console.log("new error: ", err.responseText)
               
            }
   
            
         }).always(function ajaxAlways() {
                  console.log('test.');
            });
     })

    
 })


 // LOGIN AJAX...
 $(document).ready(function()  {
   $("#logContainer").submit(function(event) {
         event.preventDefault();
   
         var $form = $(".contain #logContainer")
         var $data ={
            email:$("input[type='email']",$form).val(),
            password:$("input[type='password']",$form).val()
         }
         var $error = $(".js-error",$form)
         var $succ = $(".js-success",$form)
         //console.log($data)

         if ($data.email.length <= 16) {
            $error.text('Enter a valid email address').show()
         } else if ($data.password.length <= 5) {
            $error.text('Enter a more secure password!').show()
         } else{
            $error.hide()
            $succ.text('valid details..').show()
         
         }
         //$error.hide()
         //$succ.hide()
         $.ajax({
            type: 'POST',
            url:"ajax/login.php",
            data: $data,
            dataType: 'json',
            async: true,
            success: function successful(res) {
               if (res.redirect !== undefined) {
                  window.location.href = res.redirect
         
               } else if (res.error !== undefined) {
                  $error.html(res.error).show()
                  
                  
               }
               
            },
            error: function errfunc(err) {
               document.write(err+" did happen, please retry");
               console.log("error   "+ Object.entries(err))
               console.log("new error: ", err.responseText)
               
            }
   
            
         }).always(function ajaxAlways() {
            console.log('test.');
          })

     })
    
 })



