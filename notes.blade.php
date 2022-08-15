<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
        <label for="">enter the amount</label>
        <input type="text" name="" id="txt1">
        <button type="submit" onclick="print1()">click</button><br>
        <label for="" id="l1">500 notes:</label><br>
        <label for="" id="l2">100 notes:</label><br>
        <label for="" id="l3">50 notes:</label><br>
        <label for="" id="l4">20 notes:</label><br>
        <label for="" id="l5">10 notes:</label><br>
        <label for="" id="l6">5 notes:</label><br>
        <label for="" id="l7">2 notes:</label><br>
        <label for="" id="l8">1 notes:</label><br>
    
</body>
<script>
    var vals = ['500', '100', '50', '20', '10', '5', '2', '1'];
    var j = 1;
    function print1() {
        console.log("jjjjjj")
        console.log( document.getElementById("l"+j).innerHTML);
        var amt = document.getElementById("txt1").value
        for (var i = 0; i < vals.length; i++) {
            console.log("jjjjjj");
            document.getElementById("l"+j).innerHTML +=parseInt(amt / vals[i]) 
            amt = amt % vals[i];

            j = j + 1;
        }
    }


</script>

</html>