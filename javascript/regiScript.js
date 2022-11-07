


    function emailVal() {
        var email=document.getElementById("email").value;
        regex= /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ ;
        

        if (regex.test(email)) {
            document.getElementById("emailErr").innerHTML= ""; 
        }
        else
        {
            document.getElementById("emailErr").innerHTML= "Must be a valid email_address : anything@example.Com";
        }


    }







    function passVal() {
        var password=document.getElementById("password").value;
        var regex= /^[0-9a-zA-Z@%#$]{8,}$/ ;
        

        if (regex.test(password)) {
            document.getElementById("passwordErr").innerHTML= ""; 
        }
        else
        {
            document.getElementById("passwordErr").innerHTML= "At least 8 and No use of special characters (space,@, #, $, %)";
        }


    }




    function rePassVal() {
        var rePassword=document.getElementById("rePassword").value;
        var regex= /^[0-9a-zA-Z@%#$]{8,}$/ ;
        

        if (regex.test(rePassword)) {
            document.getElementById("rePasswordErr").innerHTML= "";

            if(document.getElementById("password").value != document.getElementById("rePassword").value){

                document.getElementById("rePasswordErr").innerHTML= "didn't macth the password ";
                
            }
        }
        else
        {
            document.getElementById("rePasswordErr").innerHTML= "At least 8 and No use of special characters (space,@, #, $, %)";
        }


    }