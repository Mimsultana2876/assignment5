
<!Docutype html>
<head>
<title>
cal
</title>
</head>
<?php

    $a = $_POST['first_num'];
    #echo $first_num
    $b = $_POST['second_num'];
     #echo $second_num
     $c= $_POST['third_num'];
    $d= $_POST['fourth_num'];
    $e= $_POST['fifth_num'];
    $f= $_POST['sixth_num'];
    $g = $_POST['seventh_num'];
    $h = $_POST['eight_num'];  
    #echo $eight_num
    $operator = $_POST['operator'];
    $result_1 = $_POST['result_1'];
    $result_2 = $_POST['result_2'];
    $result_3 = $_POST['result_3'];
    $result_4 = $_POST['result_4'];
    
    $array_a = array(
        array($a,$b),
        array($c,$d),
    );
   /*  print_r ($array_a) */
   $array_b = array(
    array($e,$f),
    array($g,$h),
   );
    #print_r ($array_b)
    for($row=0;$row<count(  $array_a);$row++){
        $size_of_col=count($array_a[$row]);
         #echo   $size_of_col; 
         for($col=0;$col<$size_of_col;$col++){
              $array_a[$row][$col] ;
        }
    }
    
    for($row=0;$row<count($array_b);$row++){
        $size_of_col=count($array_b[$row]);
         #echo   $size_of_col; 
         for($col=0;$col<$size_of_col;$col++){
            ($array_b[$row][$col]) ;
         }
       
        }
    

   if(is_numeric($array_a) &&  is_numeric($array_b)){ 
        if(isset($_POST['operator'])){
           if($operator == "add"){
           $result_1 = $array_a[0][0 ] +  $array_b[0][0 ] ;
           $result_2 = $array_a[0][1 ] +  $array_b[0][1 ] ;
           $result_3 = $array_a[1][0 ] +  $array_b[1][0 ] ;
           $result_4 = $array_a[1][1 ] +  $array_b[1][1 ] ;
             
           }
            elseif ($operator == "sub"){
            $result_1 = $array_a[0][0 ] -  $array_b[0][0 ] ;
            $result_2 = $array_a[0][1 ] -  $array_b[0][1 ] ;
            $result_3 = $array_a[1][0 ] -  $array_b[1][0 ] ;
            $result_4 = $array_a[1][1 ] -  $array_b[1][1 ] ;
             
            } 
               /* else($operator == "mult"){
            $result_1 = $array_a[0][0] * $array_b[0][0 ] + $array_a[0][1 ] *  $array_b[1][0 ] ;
               } */
        }
           
       

    }

?>
<body>
    <form method = "POST">
        <h4> input A </h4>
        <input type = "number" name = "first_num" value = "<?php echo $array_a[0][0]?>">
        <input type = "number" name = "second_num" value = "<?php echo $array_a[0][1]?>">
        <br>
        <input type = "number" name = "third_num" value = "<?php echo $array_a[1][0]?>">
        <input type = "number" name = "fourth_num" value = "<?php echo $array_a[1][1]?>">
        <h4> input B </h4>
        <input type = "number" name = "fifth_num" value = "<?php echo $array_b[0][0]?>">
        <input type = "number" name = "sixth_num" value = "<?php echo $array_b[0][1]?>">
        <br>
        <input type = "number" name = "seventh_num" value = "<?php echo $array_b[1][0]?>">
        <input type = "number" name = "eight_num" value = "<?php echo $array_b[1][1]?>">
        <br>
        <h4> cilck</h4>
        <input type = "submit" value = "add" name = "operator">
        <input type = "submit" value = "sub" name = "operator">
        <input type =  "submit" value = "mult" name = "operator">
        <br>
        <h4> result</h4>
        <input  name = "result_1"  value = "<?php echo $result_1 ?>" >
        <input  name = "result_2"  value = "<?php echo $result_2 ?>" >
        <br>
        <input name = "result_3"   value = "<?php echo $result_3 ?>">
        <input  name = "result_4"  value = "<?php echo $result_4 ?>" >
    </form>   
</body>