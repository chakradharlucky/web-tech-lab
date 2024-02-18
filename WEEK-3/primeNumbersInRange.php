<!DOCTYPE html>
<html>
    <head>
        <title>Prime Number in range</title>
    </head>
    <body>
        <?php 
        echo"Prime numbers from 1 to 50<br> ";
            for( $i = 2; $i < 51; $i++ )
            {
                $flg = 0;
                for($j=2;$j<$i;$j++){
                    if($i%$j==0)
                    {
                        $flg=1;
                        break;
                    }
                }
                if($flg == 0)
                    echo $i." ";
            }
        ?>    
    </body>
</html>
