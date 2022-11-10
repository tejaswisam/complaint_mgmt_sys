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

    $roll_no = $_REQUEST['roll_no'];
    $Cmpl_Type=$_REQUEST['Cmpl_Type'];
    $comment = $_REQUEST['comment'];

    $sql = "INSERT INTO complaints VALUES ('',
			'$roll_no',NOW(),'$Cmpl_Type','$comment','Registered','-')";
		if(mysqli_query($conn, $sql))
    {
			echo "<h3>Your Complaint for Mess has been registered!</h3>";
      $query1 = "SELECT Name FROM student where roll_no='$roll_no'";
      $query2 = "SELECT Cmpl_ID,Date,Status FROM complaints where Date=NOW()";
      echo " <br> <br>";

      if ($result = mysqli_query($conn,$query1)) 
      {

          while ($row = $result->fetch_assoc()) 
          {
              $Name = $row["Name"];

              echo "Name:  ".$Name;
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
    if ($result = mysqli_query($conn,$query2)) 
          {
              // OUTPUT DATA OF EACH ROW
              while($row = $result->fetch_assoc())
              {
                echo '<b>'."Complaint Details ".'</b>';
                echo '<br><br>';
                echo '<table class="table table-bordered" style="width:50%">
                <tbody>
                <tr>
                  <th style="width:50%">Details</th>
                  <th>Complaint Data</th> 
                </tr>
                <tr>
                    <td> Complaint ID: </td>
                    <td>'.$row["Cmpl_ID"].'</td>
                </tr>
                <tr>
                    <td>Roll Number: </td>
                    <td>'.$roll_no.'</td>
                </tr>
                <tr>
                    <td>Complaint Type: </td>
                    <td>'.$Cmpl_Type.'</td>
                </tr>
                <tr>    
                    <td>Date: </td>
                    <td>'.$row["Date"].'</td>
                </tr>
                <tr>
                    <td>Comment: </td>
                    <td>'.$comment.'</td>
                </tr>
                <tr>
                    <td>Status: </td>
                    <td>'.$row["Status"].'</td>
                </tr>
                </tbody>
              </table>
            </div>';
              }
          }   
    else 
    {
      echo "0 results";
    }
		
		// Close connection
		mysqli_close($conn);
		?>
    <br>
    </center>
    <?php include 'footer/footer.php'; ?>
</html>