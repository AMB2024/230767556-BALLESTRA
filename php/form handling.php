<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = htmlspecialchars($_POST["text"]); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling</title>
</head>
<body>
    <form method="post">
        <label for="text">Enter something:</label>
        <input type="text" name="text" id="text" required>
        <button type="submit">Submit</button>
    </form>

    <?php

    if (isset($text)) {
        echo "<p>You entered: $text</p>";
    }
    ?>
</body>
</html>
