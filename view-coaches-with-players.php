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
          $players = select
          ?>
      </p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Position: <?php echo $coach['coach_position']; ?></small>
    </div>
  </div>
            <tr>

                <td><?php echo $coach['coaches_id']; ?></td>
                <td><?php echo $coach['coach_name']; ?></td> 
                <td><?php echo $coach['coach_position']; ?></td>
                <td><?php echo $coach['coach_age']; ?></td>
                <td><a href="players-by-coaches.php?id=<?php echo $coach['coaches_id']; ?>">Players</a></td>
              
            </tr>

        <?php
          }
        ?>     
</div>
    
