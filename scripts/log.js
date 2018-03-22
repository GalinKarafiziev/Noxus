function validateForm() {
                var x = document.forms["LoginForm"]["name"].value;
                var passw = document.getElementById("pass");
                var textpass = document.getElementById("msgpass");
                if (x == "") {
                    textpass = "Name must be filled out";
                    document.getElementById("msgpass").innerHTML = textpass;
                    return false;
                }

                if (passw.value.length < 6) {

                    textpass = "Password must contain at least 6 characters!";
                    document.getElementById("msgpass").innerHTML = textpass;
                    return false;
                }
                if (passw.value.length > 20) {
                    textpass = "Password cannot be over 20 characters!";
                    document.getElementById("msgpass").innerHTML = textpass;
                    return false;
                }

            }