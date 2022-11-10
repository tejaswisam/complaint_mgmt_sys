<?php?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header/header.php'; ?>
  <center>
    <h2>Complaint Status</h2>
    <br>
    <div class="text-align:left" style="color:black;">
      <form action="statusinsert.php" method="post">
        <p>
          <label for="Cmpl_ID">Complaint ID:</label>
          <input type="text" name="Cmpl_ID" id="Cmpl_ID">
        </p>
        <input type="submit" value="Submit">
      </form>
    </div>
    <br>
    </center>
    <?php include 'footer/footer.php'; ?>
</html>
