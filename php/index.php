<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form input values
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];

  // Check if the required inputs have been met
  if (isset($firstName) && isset($lastName)) {
    echo "Hello, ". $firstName. " ". $lastName. "!<br>";
  } else {
    echo "Please fill in all the required fields.<br>";
  }
}
?>

<!-- The HTML form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="firstName">First Name:</label>
  <input type="text" id="firstName" name="firstName"><br><br>
  <label for="lastName">Last Name:</label>
  <input type="text" id="lastName" name="lastName"><br><br>
  <input type="submit" value="Submit">
</form>