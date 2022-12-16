<?php
    function shuffle_assoc($arr)
    {
        $keys = array_keys($arr);
        shuffle($keys);
        foreach($keys as $key) {
            $new[$key] = $arr[$key];
        }
        $arr = $new;
        return $arr;
    }
    function sortarray($car,$argum)
    {
        ($argum == "DES") ? rsort($car) : sort($car);
        echo "<pre>";
        print_r($car);

    }
    $argu = "DES";
    echo "---------Before Sort-----------</br>";
    $cars = array("BMW", "NISSAN", "Hundai","Alentra", "Sanata");
    echo "<pre>";
    print_r($cars);
    echo "</br>---------After Sort-----------\n";
    sortarray($cars,$argu);
    $first_radio = "First radio";
    $second_radio = "Second radio";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $radio = $_POST['radio'];
    echo "</br>---------Checkbox result-----------</br></br>";
    if(isset($email) && isset($password))
    {
        if(isset($_POST['checkbox']))
        echo true."    Result is true ";
        else
        echo false."   Result is False ";
            if($radio==$first_radio)
            {
            
                $my_array = range(1,100);
                echo "</br></br>----------Before Shuffle------------";
                echo "<pre>";
                shuffle($my_array);
                print_r($my_array);
                echo "</br>----------After Shuffle-------------";
                sort($my_array);
                echo "<pre>";
                print_r($my_array);
            }
            if($radio==$second_radio)
            {
                $arr = array();
                $val = 100;
                for ($index=0; $index<$val; $index++)
                {
                    $arr[$index] = mt_rand();
                }
                echo "<pre>";
                echo "</br></br>----------Before Shuffle------------</br>";
                print_r($arr);
                echo "</br></br>Keys --> "; 
                foreach ($arr as $key => $array) 
                {
                    echo $key." ";
                }
                echo "</br></br>----------After Shuffle------------</br>";
                print_r(shuffle_assoc($arr));
            
            }
    }      
    
    
?>