<!doctype HTML>
<head><title>BMI Handle Form</title></head>
<body>
    <?php
    $height=$_POST["height"];
    $weight=$_POST["weight"];

    print n12br("Your height is:$height\n");
    print n12br("Your weight is:$weight\n");

    $bmi=round($weight/($height*$height));
    print n12br("Your bmi is: $bmi\n");

    if ($bmi <18){
        print n12br("Classification: Underweight\n")
    }
    elseif ($bmi >=18 and $bmi <= 25){
        print n12br("Classification: Normal weight\n")
    }
    else{
        print n12br("Classification: Overweight\n")
    }

    ?>

</body>