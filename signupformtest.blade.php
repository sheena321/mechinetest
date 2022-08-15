<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            padding: 16px;
            border: 2px solid blue;
        }
    </style>




</head>

<body>
    <form action="/logintest" style=" background-color: grey;border-radius: 20px;">
        <div class="container" style="padding-left: 500px;  ">
            <br>
            <h2 style="margin-left:50px;">Signup Form</h2><br>
            <label for="">first name</label>
            <input type="text" name="" id="fname" class="mar" onkeypress="fname1()" placeholder="Enter first name"
                style="margin-left:100px ;"><label for="" id="l1" style="color: red;"></label><br><br>
            <label for="">Last name name</label>
            <input type="text" name="" id="lname" class="mar" onkeypress="sname1()" placeholder="Enter second name"
                style="margin-left:60px ;"><label for="" id="l2" style="color: red;"></label><br><br>
            <label for="">Email</label>
            <input type="email" name="" id="email" onkeypress="Uname()" placeholder="Enter Email Address"
                style="margin-left:127px ;"><label for="" id="l3" style="color: red;"></label><br><br>
            <label for="">Mobile</label>
            <input type="text" name="" id="mob" onkeypress="mob1()" placeholder="Enter Mobile number"
                style="margin-left:120px ;"><label for="" id="l4" style="color: red;"></label><br><br>
            <label for="">Password</label>
            <input type="text" name="" id="psw" onkeypress="password()" placeholder="Enter Password"
                style="margin-left:105px ;"><label for="" id="l5" style="color: red;"></label><br><br>
            <label for="">Confirm Password</label>
            <input type="text" name="" id="psw1" onkeypress="cnfpsw()" placeholder="Retype Password"
                style="margin-left:46px ;"><label for="" id="l6" style="color: red;"></label><br><br><br>
            <button type="submit" onclick="sub()" style="margin-left:110px ;width:100px;background-color:blue; border-radius:20px">
                submit</button><br><br>
        </div>
    </form>
</body>
<script>
    // var special = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (typeof(Storage) !== "undefined") {  
alert("browser support localStorage ");  
} else {  
    alert("browser not support localStorage ");   
}  
    var special = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
    function Uname() {
        var email1 = document.getElementById("email").value;

        var lab = document.getElementById("l3").innerHTML;

        console.log(email1);
        special.test(email1);
        var pwd1 = document.getElementById("psw").value;
        var l = pwd1.length;
        if (!special.test(email1)) {
            console.log(!special.test(email1))
            document.getElementById("l3").innerHTML = "enter valid email";
            return true;
        }
        else {
            document.getElementById("l1").innerHTML = "";
            return false;

        }

    }
    function password() {
        var pwd = document.getElementById("psw").value;
        var a = pwd.charAt(0).toUpperCase();
        var b = pwd.charAt(0);
        console.log(a);
        var l = pwd.length;
        console.log(pwd.length);

        if (a != b) {
            document.getElementById("l5").innerHTML = "first letter should be capital";
            document.getElementById("psw").value = "";
            return;
        } else if (!special.test(pwd) && l < 8) {
            console.log(document.getElementById("psw").value)
            document.getElementById("l5").innerHTML = "include specilal charectres in password";
            return;
        }
        else if (l < 8) {
            console.log(pwd.length);
            document.getElementById("l5").innerHTML = "password min length is 8";
            return;
        } else if (l >= 8) {
            console.log("hhhh")
            document.getElementById("l5").innerHTML = "password required 8 charecter";
            return;
        }
    }


    function login() {
        var email1 = document.getElementById("email").value;
        var pwd = document.getElementById("psw").value;
        if (email1 == "") {
            alert("enter Email");
            return;
        }
        else if (pwd == "") {
            alert("enter password");
            return;
        }
    }
    function fname1() {
        var fn = document.getElementById("fname").value;
        var l = fn.length;
        console.log(fn.length);
        if (l < 3) {
            document.getElementById("l1").innerHTML = "Min 3 charecters needed";

        } else if (special.test(fn)) {
            document.getElementById("l1").innerHTML = "special charecters not allowed";
        }
    }
    function sname1() {
        var fn = document.getElementById("lname").value;

        if (special.test(fn)) {
            document.getElementById("l2").innerHTML = "special charecters not allowed";
        }
    }
    function mob1() {
        var mb = document.getElementById("mob").value;
        var l = mb.length;
        if (l < 10 || l > 10) {
            document.getElementById("l4").innerHTML = "mobile no should be 10 charecters";
        }
    }
    function cnfpsw(){
        var ps = document.getElementById("psw").value;
        var cps= document.getElementById("psw1").value;
        console.log("ssjj")
        console.log(ps);
        console.log(cps);
        if (cps!=ps){
            document.getElementById("l6").innerHTML ="not match with password" ;
            return;
        }
        else{
            document.getElementById("l6").innerHTML = ""; 
        }
    }
    function sub(){
        var fname2 = document.getElementById("fname").value;
        var lname2 = document.getElementById("lname").value;
        var email2 = document.getElementById("email").value;
        var mob2 = document.getElementById("mob").value;
        var psw3 = document.getElementById("psw").value;
        var psw2 = document.getElementById("psw1").value;
        if(fname2==""){
            alert("enter firstname");
            return;

        }else if(lname2==""){
            alert("enter lastname");
            return;
        }
        else if(email2==""){
        alert("enter Email");
        return;
        }
        else if(mob2==""){
        alert("enter mobile");
        }
        else if(psw3==""){
        alert("enter password");
        }
        else if(psw2==""){
        alert("enter retype password");
        }
        localStorage.clear();
    localStorage.setItem("firstname", fname2.toString());
    localStorage.setItem("lastname", document.getElementById("lname").value);
    localStorage.setItem("email", document.getElementById("email").value);
    localStorage.setItem("mobile", document.getElementById("mob").value);
    localStorage.setItem("password",document.getElementById("psw").value);
    localStorage.setItem("conf_password", document.getElementById("psw1").value);
    // window.location="logintest.blade.php"
    }
    

    
</script>

</html>