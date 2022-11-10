<?php?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header/header.php'; ?>
  <center>
    <h2>Hostel Complaint Registration</h2>
    <br>
    <div class="text-align:left" style="color:black;">
      <form action="hostelinsert.php" method="post">
        <p>
          <label for="roll_no">Roll Number:</label>
          <input type="text" name="roll_no" id="roll_no">
        </p>
        <p>
          <label for="comment">Comment: </label>
          <input type="text" name="comment" id="comment">
        </p>
        <p>
        <label for="Cmpl_Type">Type of Complaint:</label>
          <select name="Cmpl_Type" id="Cmpl_Type">
            <option value="Select">Select</option>}  
            <option value="Internet">Internet</option>  
            <option value="Water">Water</option>
            <option value="Electricity">Electricity</option>
            <option value="Furniture">Furniture</option>
            <option value="Other">Other</option>
          </select>
        </p>
        <input type="submit" value="Submit">
      </form>
    </div>
    <br>
  </center>
  <?php include 'footer/footer.php'; ?>
</html>