<!-- grade showing -->
<!-- <?php
    $input = $_POST['input'];

    echo "<center>";
    if($input>=0 && $input<=55){
        echo "F";
    }
    elseif($input>55 && $input<=80){
        echo "C";
    }
    elseif($input>80 && $input<=90){
        echo "B";
    }
    elseif($input>90 && $input<=100){
        echo "A";
    }
    else{
        echo "Invalid Marks";
    }
    echo "</center>";
?> -->

<!-- pattern printing -->
<!-- <?php
    $input = $_POST['input'];
    if(!is_numeric($input)){
        echo $input." is not a number";
    }
    else{
        for($i=0; $i<=$input; $i++){
            for($j=0; $j<=$i; $j++){
                echo "*";
            }
            echo "<br>";
        }
    }
?> -->

<!-- function in php -->
<!-- <?php
     $input = $_POST['input'];
     function say_hello($input){
        echo "Hello "."Mr. "."'$input'";
     }
     say_hello($input);
?> -->

<!-- chess board printing -->
<?php
    function print_chess_board($size){
        echo '<center>';
            echo '<table style="border: 1px solid black;border-collapse: collapse;">';
            $flag = 0;
            for($i=0; $i<$size; $i++){
                echo '<tr>';
                for($j=0; $j<$size; $j++){
                    if($flag ==0){
                        echo '<td style="width: 30px;height: 30px;background-color: black;"></td>';
                        $flag=1;
                    }
                    else{
                        echo '<td style="width: 30px;height: 30px;background-color: white;"></td>';
                        $flag=0;
                    }
                }
                if($flag==0){
                    $flag =1;
                }
                else{
                    $flag=0;
                }
                echo '</tr>';
            }
            echo '</table>';
        echo '</center>';
    }

    $input = $_POST['input'];
    if(is_numeric($input)){
        print_chess_board($input);
    }
    else{
        echo "'$input'"." is not a number";
    }
?>