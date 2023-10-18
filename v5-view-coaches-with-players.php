<h1>Coaches with Players</h1>
<div class="card-group">
  
        <?php
          while ($coach = $coaches->fetch_assoc()) {
        ?>
<div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $coach['coach_name']; ?></h5>
      <p class="card-text">
            <ul class="list-group">
        <?php
          $players = selectPlayersByCoaches($coach['coaches_id']);
            while ($player = $players->fetch_assoc()) {
              ?>
                <li class="list-group-item"><?php echo $player['player_name']; ?> - <?php echo $player['level']; ?> - <?php echo $player['practice_time']; ?>  </li>
                        
            <?php
            }
          ?>
        </ul>
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
    
