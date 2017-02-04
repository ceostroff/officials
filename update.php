<?php include 'database.php'; ?>

<?php
// this scripts updates an exisiting record based on the id

if ( isset($_POST['id']) && isset($_POST['name']) ) {

    // sanitizeMySQL() is a custom function, written below
    // these values came from the form
    $id = sanitizeMySQL($conn, $_POST['id']);
    $name = sanitizeMySQL($conn, $_POST['name']);
    $title = sanitizeMySQL($conn, $_POST['title']);
    $phone = sanitizeMySQL($conn, $_POST['phone']);
    $email = sanitizeMySQL($conn, $_POST['email']);
    $address = sanitizeMySQL($conn, $_POST['address']);

    // create a new PHP timestamp
    date_default_timezone_set('America/New_York');
    $date = date('m-d-Y', time());

    // the prepared statement - note: question marks represent
    // variables we will send to database separately
    // we don't check which fields the user changed - we just update all
    $query = "UPDATE reps SET name = ?,
        title = ?,
        phone = ?,
        email = ?,
        address = ?,
        updated = ?
    WHERE id = ?";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // bind the values to replace the question marks
        // the order matters! so id is at end!
        // note that 7 letters in 'sssidsi' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'ssisssi',
        $name,
        $title,
        $phone,
        $email,
        $address,
        $date,
        $id
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    }
} else {
    echo "Failed to update!";
}

// erase any HTML tags and then escape all quotes
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
