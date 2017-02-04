<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Elected Officials - Edit </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
<div id="container">

<h1>Elected Officials: Confirm Record to Edit</h1>
<!-- this page opens if you selected a record
     from inventory_update.php
     and submitted the form - it lets you choose to delete or update
-->

<div id="inner_content">
<?php
// erase any HTML tags and then escape all quotes
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

// check if _id_ was sent here via POST ...
if ( isset($_POST['id']) ) {
?>

    <!-- write into the HTML - table headings -->
    <table>
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Updated</th>
        </tr>
        <tr>

<?php
    // this calls the function above to make sure id is clean
    $id = sanitizeMySQL($conn, $_POST['id']);

    // get the row indicated by the id
    $query = "SELECT * FROM reps WHERE id = ?";

    // another if-statement inside the first one ensures that
    // code runs only if the statement was prepared
    if ($stmt = mysqli_prepare($conn, $query)) {
        // bind the id that came from inventory_update.php
        mysqli_stmt_bind_param($stmt, 'i', $id);
        // execute the prepared statement
        mysqli_stmt_execute($stmt);
        // next line handles the row that was selected - all fields
        // it is "_result" because it is the result of the query
        mysqli_stmt_bind_result($stmt, $id, $name, $title, $phone, $email, $address, $updated);

        // handle the data we fetched with the SELECT statement ...
        while (mysqli_stmt_fetch($stmt)) {

            // another way to write variables into the HTML!
            // shorter than echo in this case
            // %s for string, %d for integer,
            // %f for decimal (floating point); %.02f limits 2 decimal places
            printf ("<td>%s</td>", stripslashes($name));
            printf ("<td>%s</td>", $title);
            printf ("<td>%s</td>", $phone);
            printf ("<td>%d</td>", $email);
            printf ("<td>%.02f</td>", $address);
            printf ("<td>%s</td>", $updated);

        } // end while-loop

        // writing into the HTML to close the table and add a small form
        // note: single quotes are needed because double quotes surround
        // the entire set of echoed lines
?>

        <!-- write into the HTML - end of table, then form -->

        </tr>
        </table>

        <form id="repsedit" class="smallform" method="post" action="reps_update.php" autocomplete="off">
            <p>Do you want to:
            <label>
            <input type="radio" name="choice" id="delete" value="delete" required> Delete this record</label>

            <label>
            <input type="radio" name="choice" id="update" value="update" required> Update this record</label>
            </p>

            <!-- pass all values to the next script -->
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="name" value="<?php echo $name ?>">
            <input type="hidden" name="title" value="<?php echo $title ?>">
            <input type="hidden" name="phone" value="<?php echo $phone ?>">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <input type="hidden" name="address" value="<?php echo $address ?>">

            <input type="submit" id="submit" value="Submit">
        </form>


<?php
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);

} else {
    // if _id_ was NOT sent here via POST, write a message with HTML
    // break out of PHP to write HTML next ...
?>


    <p class='announce'>No record was selected!</p>


<?php
// return to PHP just to close the if-statement
}  // end of if-else isset($_POST['id'])
?>
</div> <!-- close inner_content -->

<!-- below will print no matter what -->

<p class="middle"><a href="inventory_update.php">View full listing</a></p>

<p class="middle"><a href="enter_new_record.php">Add a new elected official</a></p>


</div> <!-- close container -->
</body>
</html>
