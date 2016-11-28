<?php          
$kysely2 = $DBH->prepare("SELECT COUNT(*) FROM ga_users");
$kysely2->execute();
                    
$tulos = $kysely2->fetch();
echo "1. There are " . $tulos["COUNT(*)"] . " users";
?> 