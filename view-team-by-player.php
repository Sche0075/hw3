<h1>Players by Coaches</h1>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Age</th>
        <th>Level</th>
        <th>Practice Time</th>
        
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($teams = $teams->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $player['player_id']; ?></td>
                <td><?php echo $player['player_name']; ?></td> 
                <td><?php echo $player['player_position']; ?></td>
                <td><?php echo $player['player_age']; ?></td>
                <td><?php echo $player['level']; ?></td>
                <td><?php echo $player['practice_time']; ?></td>
              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
