<?php?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header/header.php'; ?>
  <center>
    <h2>Complaint History</h2>
    <br>
    <div class="text-align:left" style="color:black;">
      <form action="historyinsert.php" method="post">
        <p>
          <label for="Roll_No">Roll Number: </label>
          <input type="text" name="Roll_No" id="Roll_No">
        </p>
        <input type="submit" value="Submit">
      </form>
    </div>
    <br>
    </center>
    <?php include 'footer/footer.php'; ?>
</html>