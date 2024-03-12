<?php 

function pays(array $tab){
    foreach ($tab as $elem) {
        // if (isset($_SESSION['pays'])) {
            if ($elem->getPays() == 'bxl') {
                echo 'Nom : '.$elem->getName().'<br>
                    Pays : '.$elem->getPays().'<br><br>';
            }
        // }  
    }
}
