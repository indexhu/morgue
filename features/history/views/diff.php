<div class="row-fluid">
     <h2><?php echo $event["title"]; ?><small><?php echo $edited; ?></small></h2>
     <div class="span12">
     <h3>Mi történt?</h3>
     <?php 
     if($history["summary"] === null){
         echo "<hr><h4>Nincs adat</h4><br/>";
     } else {
         echo '<pre>' . $history["summary"] . '</pre>';
     }
     ?>
     <h3>Miért voltunk meglepődve?</h3>
     <?php
     if($history["why_surprised"] === null){
         echo "<hr><h4>Nincs adat</h4>";
     } else {
         echo '<pre>' . $history["why_surprised"] . '</pre>';
     }
     ?>
     </div>
</div>
