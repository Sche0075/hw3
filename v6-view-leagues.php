<div class="row">
  <div class="col">
      <h1>Leagues</h1>
  </div>
  <div class="col-auto">
<?php
    include "n3-newform-leagues.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Director</th>
        <th>League Age Group</th>
        <th>League Level</th>
        <th></th>
        <th></th>
        <th></th>
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
                              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
