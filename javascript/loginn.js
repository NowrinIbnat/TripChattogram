


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
