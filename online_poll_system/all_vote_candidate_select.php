<?php
//Include the database configuration file
include_once("configue.php");

if(!empty($_POST["position"])){

    $position = $_POST['position'];
    //Fetch all state data
    $result = mysqli_query($connection,"SELECT candidate_name FROM reg_for_election WHERE candidate_position='$position' ORDER BY candidate_name ASC");
    
    //Count total number of rows
    $num = mysqli_num_rows($result);
    
    //State option list
    if($num > 0){
        echo '<option value="">Select Candidate For This Position</option>';
        while($row = mysqli_fetch_assoc($result)){ 
            echo '<option value="'.$row['candidate_name'].'">'.$row['candidate_name'].'</option>';
        }
    }else{
        echo '<option value="">No Candidates For This Position</option>';
    }
}
else
{
    echo "<option>First Select Position</option>";
}
?>