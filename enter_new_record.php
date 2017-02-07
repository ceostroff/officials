<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Elected Representitives - Enter Contacts </title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>Elected Officials: Enter Contacts</h1>

<p class="middle"><a href="inventory_update.php">View all contacts</a></p>

<div id="reps">

<form id="repsform" method="post" autocomplete="off"> <!-- used to be sockform -->
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->
    <label for="name">Name </label>
	<input type="text" name="name" id="name" maxlength="40" required>
<label for="title">Title </label>
	<input type="text" name="title" id="title" maxlength="40" required>
    
    <label for="phone">Phone </label>
	<input type="text" name="phone" id="phone" maxlength="40" required>
    
    <label for="email">Email </label>
	<input type="text" name="email" id="email" maxlength="40" required>
    
    <label for="address">Address </label>
	<input type="text" name="address" id="address" maxlength="40" required>
    
	<input type="submit" id="submit" value="Submit">
</form>

</div>

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
</body>
</html>
