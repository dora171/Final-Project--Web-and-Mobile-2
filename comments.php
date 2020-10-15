<!--
Copyright 2017 Dora Tomljenovic <dxt5777>.
#Final Project   
-->
<?php
include_once 'dbinfo.php';
$errors = array();

if (isset($_POST["submit"])) {

    $firstnameInput = $_POST["firstname"];
    $lastnameInput = $_POST["lastname"];
    $commentsInput = $_POST["comments"];

    if (strlen($firstnameInput) <= 0 || !preg_match('/[A-Za-z ]+/', $firstnameInput)) {
        $errors[] = "Enter valid firstname";
    }
    if (strlen($lastnameInput) <= 0 || !preg_match('/[A-Za-z ]+/', $lastnameInput)) {
        $errors[] = "Enter valid lastname";
    }
    if (strlen($commentsInput) <= 0 || !preg_match('/[A-Za-z 0-9._%+-,]+/', $commentsInput)) {
        $errors[] = "Comment invalid";
    }

    if (count($errors) > 0) {
        return;
    }

    $query = "INSERT INTO comments (firstname, lastname, comment)"
            . "VALUES ('" . $firstnameInput . "','" . $lastnameInput . "','" . $commentsInput . "')";

    $result = mysqli_query($dbLink, $query);

    if (!$result) {
        die('Invalid query: ' . mysqli_connect_error());
    } else {
        echo "Result of an INSERT query: " . $result;
    }
}
?>
<!DOCTYPE html>
<!--
Form comments for individual project
Dora Tomljenovic
-->
<?php
$pageName = 'Comments';
include 'includes/head.php'
?>
<html>
    <head>
        <title>Comments</title>
        <link href="css/comStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-- <div id="container"> -->
        <section id="com-section">
            <form name="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 

                <fieldset>

                    <legend>Personal information</legend>

                    <label for="firstname">Name: </label>
                    <input name="firstname" id="firstname" type="text"  
                           placeholder="Enter a name" required pattern="^[A-Za-z ]+$" 
                           title="Only alpha-numerics with space allowed"/><br>

                    <label for="lastname">Last name: </label>
                    <input name="lastname" id="lastname" type="text"  
                           placeholder="Enter a last name" required pattern="^[A-Za-z ]+$" 
                           title="Only alpha-numerics with space allowed"/><br><br>

                </fieldset>

                <fieldset>

                    <legend>Text Area</legend>
                    <label for="comments"></label>
                    <textarea id="comments" name="comments" rows="7" cols="50" wrap="soft" 
                              placeholder="Please put any comments here...."></textarea>                
                </fieldset>

                <fieldset id="feedback">
                    <legend>Feedback</legend>
                    <p id="errormsg"></p>
                    <?php
                    if (count($errors) > 0) {

                        echo " YES";

                        echo "<div style= 'color: red;'>";
                        echo "REQUIRED OR INVALID DATA: <br>";
                        foreach ($errors as $error) {

                            echo $error . "<br>";
                        }
                        echo "</div>";
                    }
                    ?>
                    <?php
                    $result = mysqli_query($dbLink, "SELECT * FROM comments");

                    if (!$result) {

                        die('Invalid query: ' . mysqli_connect_error());
                    }
                    $output = "<div id='comments-design'>";
                    while ($row = mysqli_fetch_array($result)) {

                        $output .= "<div id='comment'><p id='name'>First name: " . $row[1] . "</p>";
                        $output .= "<p id='lastname'>Last name: " . $row[2] . "</p>";
                        $output .= "<p id='comment'>Comment: " . $row[3] . "</p></div>";
                    }
                    $output .= "</div>";
                    echo $output;

                    mysqli_close($dbLink);
                    ?>
                </fieldset>

                <input name="submit" type="submit" id="submit" value="Submit!" />    

            </form> 

            <br><br>
        </section>

<!--<script src="js/commentsJS.js"></script> -->

    </body>
</html>

<?php include 'includes/footer.php' ?>  