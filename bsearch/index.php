<!DOCTYPE html>
<html>
<head>
  <title>Bsearch</title>
</head>
<body>
<div class="srch_area">
     <div class="container">
       <div class="row">
         <div class="srch_area_in">
           <ul>
               <form method="post"action="">  
             <li>
               <select class="form-control" name="first">
                   <option >-- Make --</option>
                   <option value="Scania">Scania</option>
                   <option value="Volvo">Volvo</option>
                   <option value="DAF">DAF</option>
                   <option value="Mercedes-Benz">Mercedes-Benz</option>
                   <option value="ERF">ERF</option>
                   <option value="Renault">Renault</option>
                   <option value="Iveco">Iveco</option>
                   <option value="Man">Man</option>
                   <option value="Hino">Hino</option>
                   <option value="Mitsubishi">Mitsubishi</option>
                   <option value="Foden">Foden</option>
                   <option value="Isuzu">Isuzu</option>
                   <option value="Other">Other</option>
               </select>
             </li>
             <li>
               <select class="form-control" name="second">
                   <option>-- Body --</option>
                   <option value="Tractor Units">Tractor Units</option>
                   <option value="Rigids">Rigids</option>
                   <option value="Tippers">Tippers</option>
                   <option value="Combi">Combi</option>
                   <option value="Trailers">Trailers</option>
                   <option value="Plant">Plant</option>
                   <option value="Cars &amp; Vans">Cars &amp; Vans </option>
               </select>
             </li>
             <li>
               <select class="form-control" name="third">
                   <option>-- Binlift --</option>
                   <option value="Binlift1">Binlift1</option>
                   <option value="Binlift2">Binlift2</option>
                   <option value="Binlift3">Binlift3</option>
                   <option value="Binlift4">Binlift4</option>
                   <option value="Binlift5">Binlift5</option>
               </select>
             </li>
             <li>
             <button type="submit" name="search" class="btn cmn_btn_1" value="search">Search</button>
             
             </li>
             </form>  
           </ul>
         </div>
       </div>
     </div>
   </div>
</body>
</html>
<?php
include("config.php");
  if(isset($_POST['search']))
  {
    $first =  $_POST['first'];
    $second =  $_POST['second'] ;
    $third =  $_POST['third'] ;

    $query = mysqli_query($con,"SELECT make FROM btable WHERE make='$first' AND body='$second' AND binlift='$third'");
    // $query = $wpdb->prepare("SELECT make FROM $appTable WHERE `make`='$first'  ");
    // $applicat = $wpdb->get_results($query);
  if($query)
  {
?>
<h3>Search Data</h3>
<?php
    
    while($row = mysqli_fetch_array($query))
    {   
      echo $row['make'];
    }
  }
}
?>