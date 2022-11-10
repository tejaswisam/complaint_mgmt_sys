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

    $Roll_No=$_REQUEST['Roll_No'];
    $sql = "SELECT * FROM complaints where Roll_No='$Roll_No'";
    $result = $conn->query($sql);
	echo "<h3>Complaint History</h3>";
    echo " <br> <br>";
    echo '<table class="table table-bordered" style="width:75%">
                <tbody>
                <tr>
                  <th style="width: 14.28%">Complaint ID</th>
                  <th style="width: 14.28%">Roll Number</th>
                  <th style="width: 14.28%">Date</th>
                  <th style="width: 14.28%">Complaint Type</th>
                  <th style="width: 14.28%">Comment</th>
                  <th style="width: 14.28%">Status</th>
                  <th style="width: 14.28%">Remark</th> 
                </tr>
                </tbody>
              </table>
                </div>';
    if ($result->num_rows > 0) 
    {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
              echo '<table class="table table-bordered" style="width:75%">
                <tbody>
                <tr>
                    <td style="width: 14.28%">'.$row["Cmpl_ID"].'</td>
                    <td style="width: 14.28%">'.$Roll_No.'</td>
                    <td style="width: 14.28%">'.$row["Date"].'</td>
                    <td style="width: 14.28%">'.$row["Cmpl_Type"].'</td>
                    <td style="width: 14.28%">'.$row["Comment"].'</td>
                    <td style="width: 14.28%">'.$row["Status"].'</td>
                    <td style="width: 14.28%">'.$row["Remark"].'</td>
                </tr>
                </tbody>
              </table>
                </div>';
          }
        }
          /*freeresultset*/
          
    else
    {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
    echo '<br>';
    echo '<br>';
    $result->free();
    $conn->close();
		?>
    <br>
    </center>
    <?php include 'footer/footer.php'; ?>
</html>