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
</body>
<script>
   
    function Leaders( arr1, sz)
{
    for (let i = 0; i < sz; i++)
    {
        let j;
        for (j = i+1; j < sz; j++)
        {
            if (arr1[i] <=arr1[j])
                break;
        }    
        if (j == sz) 
            document.write(arr1[i] + " ,");
  }
}

  
        let arr1 = [ 16, 17, 4, 3, 5, 2 ]; 
        let n = arr1.length; 
  
    
        Leaders(arr1, n); 
</script>

</html>