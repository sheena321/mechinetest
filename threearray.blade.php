
 Array1 = [10,11,12,13,14,15]
 Array2 = [12,13,14,15,16]
 Array3 = [14,15,16,17,18]
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <script>
        array1 = ['10','11','12','13','14','15'];
array2 = ['12','13','14','15','16'];
array3 = ['14','15','16','17','18'];
var n=0;
var b=[];
        for(var i=0;i,i<array1.length;i++){
            for(j=0;j<array2.length;j++){
                if(array1[i]==array2[j]){
                    for(var k=0;k<array3.length;k++){
                        if(array1[i]==array3[k]){
                            b[n]=array1[i];

                            // document.write( b[n]);
                            n=n+1;
                        }

                    }
                }
            }
        }
        document.write("common elements are :")
        for (j = 0; j< b.length; j++) {
            document.write(" "+ b[j]);
           
        }
    </script>
</body>
</html>