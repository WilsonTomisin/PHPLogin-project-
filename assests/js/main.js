// alert("main.js loads...")


// $(document).ready(function () {
//    $("button").click(function(event) {
//       event.preventDefault()
//       var $form = $(".contain #container")
//       var $info = {
//          email:$("input[type = 'email']",$form).val(),
//          password:$("input[type ='password']",$form).val()
//       }
//       //console.log($info);
//       var $err = $('.js-error',$form)
//       var $success = $('.js-success',$form)

//       if ($info.email.length <=7 || $info.password.length <= 6 ) {
//          $err.text('ENTER A VALID EMAIL ADDRESS or A MORE SECURE PASSWORD').show();
//       }else{
//          $err.hide()
//          $success.text('SUCCESSFULL').show()
//       }
//       $.ajax({
//          type: "POST",
//          url: "./assests/js/test.html",
//          //data: "data",
//          //dataType: "dataType",
//          success: function (response) {
//             $(".container").html(response)
//          }
//       });
//       return false
//    })  
// })







 $(document).ready(function()  {
   $("form").submit(function(event) {
      console.log("submitted");
         //alert("form was submitted.")
         event.preventDefault();
   
         var $form = $(".contain #container")
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
            url:"/PHPLOGINPRJ/ajax/register.php",
            data: $data,
            dataType: 'json',
            async: true,
            success: function(res) {
               console.log(res.redirect)
               window.location.href = res.redirect

               // if (res.redirect !== undefined) {
               //    window.location.href = res.redirect
               // }
               
            },
            error: function(err) {
               document.write(err+" did happen, please retry");
               console.log("error"+ err);
          }
   
            
         })
         // .always(function ajaxAlways(data) {
         //    console.log('test.');
         // })

         //return false
     })
    
 })

/*function  test(){
   var options = {
      method: 'POST',

   }
   fetch("http://localhost/new%20php/phploginprj/ajax/register.php",options).then((res)=>{
      console.log(res);
  res.json();
   }).then((data)=>{
      console.log(data);
   });
 }*/

