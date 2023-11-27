<?php 
    echo "Exercice 1: <br>";
    $list_one = array(1,2,6,7,9,7,1);
    $list_two = array(1,9,8,7,5,6,2);
    $x = 0;
    $y = 0;
    $z = 0;
    $merged_list = array();
    for ($i=0; $i < 7; $i++) {
        $merged_list[$z] = $list_one[$x];
        $merged_list[$z+1] =  $list_two[$y];
        $x++;
        $y++;
        $z += 2;
    }
    print_r($merged_list);
    echo "<br>";
    for ($i=0; $i < 14; $i++) { 
        for ($j=0; $j < 14 ; $j++) { 
            if ($merged_list[$i] <= $merged_list[$j]) {
                $temp = $merged_list[$i];
                $merged_list[$i] = $merged_list[$j];
                $merged_list[$j] = $temp;
            }
        }
    }
    print_r($merged_list);
    echo "<br>";
    echo "<br>";
?>
<?php
    echo "Exercice 2: <br>";
    $list = array(1,2,6,7,9,7,1);
    for ($i=0; $i < 7; $i++) { 
        for ($j=0; $j < 7; $j++) {
            if ($list[$i] == $list[$j] && $i != $j) {
                $list[$j] = "Deleted";
            }
        }
    }
    print_r($list);
    echo "<br>";
    echo "<br>";
?>
<?php
    echo "Exercice 3: <br>";
function checkDuplicate($list) {
    for ($i=0; $i < count($list); $i++) { 
        for ($j=0; $j < count($list); $j++) { 
            if ($list[$i] == $list[$j] && $i != $j) {
                return false;
            }
        }
    }
    return true;
}
$list = array(1,2,6,7,9);
$result = checkDuplicate($list);
echo var_export(checkDuplicate($list), true);
echo "<br>";
echo "<br>";
?>
<?php 
    echo "Exercice 4: <br>";
    function reverseList($list) {
        $reversedList = array();
        for ($i=0; $i < count($list); $i++) { 
            $reversedList[$i] = $list[count($list) - $i - 1];
        }
        return $reversedList;
    }
    $list = array(1,2,6,7,7,9,10);
    print_r(reverseList($list));
    echo "<br>";
    echo "<br>";
?>