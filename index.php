<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/style.css">
   
</head>
<body>
    
    <div class="status_bar" style="text-align:right;margin-right :100px;">
        <span>Machine Status</span><br><button id="submit">Active</button>
    </div>
    <section>
    <div class="main" style="display:flex;justify-content:center;margin-top:7%;">
        <div class="labels" style="border:solid 1px black">
            <div class="label mp">Efficiency</div>
            <div class="label mp">Active hours</div>
            <div class="label mp">Progress</div>
            <div class="label mp">Work done</div>
            <div class="label mp">Peformance</div>
            <div class="label mp">Temperature</div>
            <div class="label mp">Data Failure</div>
            <div class="label mp">Overall Work done</div>
            <div class="label mp">Machine Service time</div>
            <div class="label mp">Malfunction</div>
            <div class="label mp">Overall Performance</div>
        </div>
        <?php
//    include('demo.php');
   include('conn.php');
   $query = "SELECT *from data ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn,$query);
$row = [];
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
//   echo "Shahid";
  ?>
        <div class="info" style="border:solid 1px black;">
            <div class="text mp"><?php echo $row["Effifciency"];?></div>
            <div class="text mp"><?php echo $row["Active hours"];?></div>
            <div class="text mp"><?php echo $row["Progress"];?></div>
            <div class="text mp"><?php echo $row["Work done"];?></div>
            <div class="text mp"><?php echo $row["Performance"];?></div>
            <div class="text mp"><?php echo $row["Temperature"];?></div>
            <div class="text mp"><?php echo $row["Data Failure"];?></div>
            <div class="text mp"><?php echo $row["Overall Work done"];?></div>
            <div class="text mp"><?php echo $row["Machine Service time"];?></div>
            <div class="text mp"><?php echo $row["Malfunction"];?></div>
            <div class="text mp"><?php echo $row["Overall Performance"];?></div>
        </div>
    </div>
    <?php
}
}
    ?>
    </section>
</body>
</html>



//
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['fullName']; ?> </td>
   <td><?php echo $data['gender']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['mobile']; ?> </td>
   <td><?php echo $data['address']; ?> </td>
   <td><?php echo $data['city']; ?> </td>
   <td><?php echo $data['state']; ?> </td>
 <tr>
 <?php
  $sn++;}}