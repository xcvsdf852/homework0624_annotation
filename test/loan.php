<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>貸款試算</title>
        <style>
            form {
                width :240px;
                background-color :gold;
                padding : 10px;
            }
            input {
                width : 3em;
            }
        </style>
    </head>
    <body>
        <form method="post" action="<?php echo $_SEVER['PHP_SELF']; ?>">
            貸款金額:<input type="number" name="loan" value="5" required>萬元<br>
            年利率 :<input type="decimal" name="rate" value="1.8" required>%<br>
            還款年數:<input type="number" name="year" value="1" required>年<br>
            <input type="submit" value="確定">
        </form>
        <!--輸出結果-->
        <p>
            <?php
                //若3個變數都存在，且其值大於零，才計算
                if(isset($_POST["loan"]) && $_POST["loan"] > 0 &&
                   isset($_POST["rate"]) && $_POST["rate"] > 0 &&
                   isset($_POST["year"]) && $_POST["year"] > 0){
                       
                    // echo "123";
                    $month = $_POST["year"] * 12; //計算還款期數
                    $rate = $_POST["rate"] / 100 / 12;//計算月利率(年利率/12) 
                    //echo $month;//12
                    // echo $rate;//0.0015
                    $power_term = 1;
                    for($i = 1; $i <= $month; $i++){
                      $power_term  = $power_term * (1 + $rate);
                    //   echo $power_term."<br>";//1.018149245012  分1年的利息
                    }
                      $payment = $_POST["loan"] * 10000 * ($power_term * $rate)/($power_term - 1);

                      echo "每月應還 <br>".ceil($payment)."<br>元";//ceil向上舍入为最接近的整数
                   
                }
            ?>
        </p>
    </body>
</html>