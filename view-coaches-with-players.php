<h1>Coaches with Players</h1>
<div class="card-group">
  
        <?php
          while ($coach = $coaches->fetch_assoc()) {
        ?>
<div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $coach['coach_name']; ?></h5>
      <p class="card-text">
        <?p>
          $coach = selectPlayersByCoaches($coach['coaches_id']);
            while ($course = $courses->fetch_assoc())
              ?>
            
            <?php
            {
              
            }
          ?>
      </p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Position: <?php echo $coach['coach_position']; ?></small>
    </div>
  </div>

<?php
          }
        ?>     
</div>
    
