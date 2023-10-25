<div class="row">
  <div class="col">
      <h1>Coaches</h1>
  </div>
  <div class="col-auto">
<?php>
    include "n1-newform-coaches.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Age</th>
        <th></th>
        
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($coach = $coaches->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $coach['coaches_id']; ?></td>
                <td><?php echo $coach['coach_name']; ?></td> 
                <td><?php echo $coach['coach_position']; ?></td>
                <td><?php echo $coach['coach_age']; ?></td>
                <td><a href="c3-players-by-coaches.php?id=<?php echo $coach['coaches_id']; ?>">Players</a></td>
              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
