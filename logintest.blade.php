<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/homepage"
        style="background-color:grey;width:600px;height:300px;margin-left:400px; margin-top:20px; border-radius: 20px;">
        <div class="container" style="padding-left: 100px;padding-top: 20px;">
            <h2 style="margin-left:70px;">Login Form</h2><br><br>
            <label for="">Email*</label>
            <input type="email" name="" id="email"  placeholder="Enter Email Address"
                style="margin-left:127px ;"><br><br>
            <label for="">Password*</label>
            <input type="text" name="" id="psw" placeholder="Enter Password" 
                style="margin-left:105px ;">
            </label><br><br><br><br>
            <button type="submit" id="btn1" onclick='login()'
                style="margin-left:110px ;width:100px;background-color:blue; border-radius:20px;height:30px;">Login</button>
        </div>
    </form>
    <script>
        

        function login() {
            var email1 = document.getElementById("email").value;
            var pwd = document.getElementById("psw").value;
            if (email1 == "") {
                alert("enter Email");
                return;
            }
            else if (pwd == "") {
                alert("check password");
                return;
            }
            var loc_email = localStorage.getItem("email");  
            var loc_psw = localStorage.getItem("password");  
            if(email1==loc_email&&pwd==loc_psw){
                window.location="/homepage";
            }

        }
    </script>
</body>

</html>