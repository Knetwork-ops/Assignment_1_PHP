<html>
<head>
   
</head>
<title>Prime Numbers</title>
<body>
    
    <h1>Prime Numbers</h1>
    <form name="fr1" method="post">
    Enter first number : <input type="text" name="fn"><br>
    Enter second number: <input type="text" name="sn"><br>
    <input type="submit" name="submit" value="Find Prime Numbers"><br>



     
    </form>
</body>
<?php
global  $lower_limit ,$upper_limit;

 $lower_limit = $_POST['fn'];
 $upper_limit = $_POST['sn'];

    function find_prime_numbers($lower_limit =1 ,$upper_limit = 1000){
        $prime_numbers =array();
        for($i=$lower_limit ; $i<=$upper_limit ; $i++){
            $divisors = array();
            for($j=1 ; $j<=$i ; $j++){
                if(is_integer($i / $j)){
                    $divisors[]=$j;
                }
            }
            if(count($divisors)=== 2 AND $divisors[0]===1 AND $divisors[1]===$i){
                $prime_numbers[]=$i;

            }
        }
        return $prime_numbers;
    }
        


    if(isset($_POST['prime'])){
    
        echo "Please fill in the required fields";
    }
    else{
        
      
      echo "range: ".$lower_limit."-".$upper_limit."<br><br>";
    //echo "number of prime numbers: ".count($prime_numbers)."<br><br>";

    $prime_numbers = find_prime_numbers($lower_limit,$upper_limit);
    $last_index =count($prime_numbers) - 1;
    foreach($prime_numbers as $index => $prime_numbers){
        if($index !== $last_index){
            echo $prime_numbers.", ";
        }
        else{
            echo $prime_numbers;
       }
    }
    }
?>

</html>