// alert("main.js loads...")

 $(document).ready(function() {
     $("button").click(function() {
         //alert("form was submitted.")
         var $container = $(".container")
         var $data ={
            email:$("input[type='email']",$container).val(),
            password:$("input[type='password']",$container).val()
         }
         console.log($data)

     })
    
 })

