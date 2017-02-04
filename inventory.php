<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM reps ORDER BY name";
	$reps = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Elected Officials' Contacts </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Elected Officials' Contacts</h1>

<p class="middle">This page has only a table. There is no form.</p>

<table>
    <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Updated</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($reps)) :  ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['updated']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p class="middle"><a href="enter_new_record.php">Add contacts</a>: Open the elected official entry form.</p>
    
<p class="middle">Go back to the <a href="index.html">home page</a></p>

</div> <!-- close container -->
</body>
</html>
