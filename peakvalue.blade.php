<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <label for="" id="l1">output is</label>
    <Script>
        var vals = ['1', '2', '3', '2', '1', '9', '8'];
        var j = 0;
        var b = [];
        // if (vals[0] > vals[1]) {
        //     b[j] = vals[0];
        // }
        // if (vals[vals.length] > vals[vals.length - 1]) {
        //     b[j] = vals[vals.length];
        // }
        for (var i = 1; i < vals.length-1; i++) {
            if (vals[i - 1] < vals[i] && vals[i] > vals[i + 1]) {
                b[j] = vals[i];
                j=j+1;
            }
        }
        for (j = 0; j < b.length; j++) {
            document.getElementById("l1").innerHTML +=" "+ b[j];
            console.log(b[j])
        }

    </Script>
</body>

</html>