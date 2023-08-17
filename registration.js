function myFun(){
      var correct_way=/^[A-Za-z\s]+$/;
      var b=document.getElementById("username").value;
      
  
      if(b==""){
          document.getElementById("Username_message").innerHTML="**Please fill the UserName";
          /*return false;*/
      }
      if(b.length<3){
          document.getElementById("Username_message").innerHTML="**Username must be more than 3 characters";
         /* return false;*/
      }
      if(b.length>20){
          document.getElementById("Username_message").innerHTML="**Username cannot be more than 20 characters";
         /* return false;*/
      }
      if(b.match(correct_way)){
          /*return true;*/
      }

      else{
          document.getElementById("Username_message").innerHTML="**Only alphabets are allowed";
         /* return false;*/
      }
    
    
}