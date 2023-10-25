<h1>Leagues</h1>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Director</th>
        <th>League Age Group</th>
        <th>League Level</th>
        <th></th>
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($league = $leagues->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $league['league_id']; ?></td>
                <td><?php echo $league['league_director']; ?></td> 
                <td><?php echo $league['league_agegroup']; ?></td>
                <td><?php echo $league['league_level']; ?></td>
                <td>
                      <form method="post" action="c4-team-by-player.php">
                        <input type="hidden" name="tid" value="<?php echo $player['player_id']; ?>">
                        <button type="submit" class="btn btn-primary">Team/Practice Time</button>
                      </form>
                </td>
              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
