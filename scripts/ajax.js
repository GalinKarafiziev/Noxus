      function Log() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("LogIn").innerHTML = this.responseText;
              }
          }
          xhttp.open("GET", "FormLogIn.html", true);
          xhttp.send();
      }

      function Reg() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("Register").innerHTML = this.responseText;
              }
          }
          xhttp.open("GET", "FormsRegister.html", true);
          xhttp.send();
      }
