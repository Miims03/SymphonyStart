<?php
function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        echo $a.' + '.$b.' = '.$a + $b;
        return $a + $b;
    }
    echo 'ERROR';
}
function mult($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        echo $a.' x '.$b.' = '.$a * $b;
        return $a * $b;
    }
    echo 'ERROR';
}

function div($a, $b)
{
    if(is_numeric($a) && is_numeric($b)) {
        if ($b == 0) {
            echo 'Division par 0 impossible';
        }else{
            echo $a.' : '.$b.' = '.$a / $b;
            return $a / $b;
        }
       
    }else{
        echo 'ERROR';
    }
        
}
function sous($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        echo $a.' - '.$b.' = '.$a - $b;
        return $a - $b;
    }
    echo 'ERROR';
}

?>