
<?php
	include 'header.php';
	?>
<h1>Student Seat Allotment</h1>
<div>
    <?php
        if(isset($_POST['submit-search']))
        {
            
            $search2=mysqli_real_escape_string($conn,$_POST['search2']);
            $search3=mysqli_real_escape_string($conn,$_POST['search3']);
           // $search4=mysqli_real_escape_string($conn,$_POST['search1']);
            
           
            $sql="SELECT * FROM rank WHERE CET_Rank >= '$search2' || COMEDK_Rank >= '$search3' ";
            $resulta=mysqli_query($conn,$sql);
            $queryResult=mysqli_num_rows($resulta);
            if($queryResult>0)
            {
                while($row=mysqli_fetch_assoc($resulta))
                {
                    echo "<div>
        			
        			<p>".$row['COMEDK_Rank']."</p>
        			<p>".$row['CET_Rank']."</p>
        			<p>".$row['COLLEGE']."</p>
        			<p>".$row['COURSE']."</p>
        			<p>".$row['CITY']."</p>
        			</div>";
                }
            }
            
            else
            {
                echo "Sorry no colleges were found!";
            }
        
        }
        ?>
        </div>
    