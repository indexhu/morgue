<h3><?php
$count = count($events);
echo $count;
?> postmortem<?php
    if ($count > 1) {
        echo "s";
    }
?> az elmúlt <?php echo $days_back ?> <?php
echo ($days_back === 1) ? 'napban' : 'napban';
?></h3>
<?php

include "views/content/frontpage.php";

