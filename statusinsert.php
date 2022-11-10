<?php?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header/header.php'; ?>
  <center>
  <?php include 'config/config.php'; ?>
  <?php
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $Cmpl_ID=$_REQUEST['Cmpl_ID'];
    $query = "SELECT Roll_No,Status,Remark FROM complaints where Cmpl_ID='$Cmpl_ID'";
	if(mysqli_query($conn, $query))
    {
			echo "<h3>Your Complaint Status</h3>";
      
      echo " <br> <br>";

      if ($result = mysqli_query($conn,$query)) 
      {

          while ($row = $result->fetch_assoc()) 
          {
              $Roll_No = $row["Roll_No"];
              $Status  = $row["Status"];
              echo '<table class="table table-bordered" style="width:50%">
                <tbody>
                <tr>
                  <th style="width: 35%">Details</th>
                  <th>Complaint Data</th> 
                </tr>
                <tr>
                    <td>Roll Number </td>
                    <td>'.$Roll_No.'</td>
                </tr>
                <tr>
                    <td>Status </td>
                    <td>'.$Status.'</td>
                </tr>
                <tr>
                    <td>Remark </td>
                    <td>'.$row["Remark"].'</td>
                </tr>
                </tbody>
              </table>
            </div>';
              echo '<br>';
          }
          
          /*freeresultset*/
          $result->free();
      }
		} 
    else
    {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
    echo '<br>';
    echo '<br>';
		// Close connection
		mysqli_close($conn);
		?>
    <br>
    </center>
    <?php include 'footer/footer.php'; ?>
</html>