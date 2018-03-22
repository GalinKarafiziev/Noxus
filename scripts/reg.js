function validateForm()
        {
        var x = document.forms["SignupForm"]["name"].value;
        var passw = document.getElementById("pass");
        var textpass=document.getElementById("msgpass");
        var passw2=document.getElementById("pass2");
        var email=document.getElementById("email");
        var numbers = /[0-9]/g;
        if (x == "") 
        {
      textpass = "Name must be filled out";
                    document.getElementById("msgpass").innerHTML = textpass;
        return false;
        }
        if(email.value=="")
            {
               textpass = "E-mail must be filled out";
                    document.getElementById("msgpass").innerHTML = textpass;
                return false;
                
            }
        if(passw.value=="")
            {
                textpass="Please enter password";
               document.getElementById("msgpass").innerHTML=textpass;
               return false;
            }
            if(passw2.value=="")
            {
                textpass="Please repeat password";
               document.getElementById("msgpass").innerHTML=textpass;
               return false;
            }
            
        
       if(passw.value.length < 6 )
           {
               
               textpass="Password must contain at least 6 characters!";
               document.getElementById("msgpass").innerHTML=textpass;
               return false;
           }
        if(passw.value.length>20)
            {
               textpass="Password cannot be over 20 characters!";
               document.getElementById("msgpass").innerHTML=textpass;
               return false;
            }
        if(passw.value != passw2.value)
            {
                textpass = "Passwords don't match!";
                    document.getElementById("msgpass").innerHTML = textpass;;
                return false;
            }
            if(passw.value!="" && passw2.value!="")
                {
                if(passw.value.match(numbers) && passw2.value.match(numbers) )
                    {
                        
                    }
                    else{
                textpass="Password should contain at least 1 number";
               document.getElementById("msgpass").innerHTML=textpass;
               return false;
                        }
                }
    
}