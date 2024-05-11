<!--index.php-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quadratic Discriminant Calculator</title>
<style>
    body {
        font-family: 'Times New Roman', Times, serif;
        background-color: #D8AE7E; 
    }
    .container {
        margin: 50px auto;
        text-align: center;
        background-color: #FFF9D0; 
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px; 
    }
    input {
        margin: 10px auto; 
        padding: 5px;
        display: block;
        width: calc(100% - 20px);
    }
    button {
        margin-top: 10px; 
        padding: 10px 20px;
        background-color: #4CAF50; 
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Discriminant of a Quadratic Equation</h1>
    <p>The discriminant of a quadratic equation is calculated using the formula: <strong>b<sup>2</sup> - 4ac</strong></p>
    <form id="quadraticForm" method="post">
        <input type="number" name="a" placeholder="Enter coefficient a" required>
        <input type="number" name="b" placeholder="Enter coefficient b" required>
        <input type="number" name="c" placeholder="Enter coefficient c" required>
        <button type="submit" name="submit">Calculate Discriminant</button>
    </form>
</div>

<?php
if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $discriminant = pow($b, 2) - 4 * $a * $c;

    echo '<div class="container">';
    echo '<h1>Quadratic Discriminant Result</h1>';
    echo '<p>The discriminant is: ' . $discriminant . '</p>';
    echo '</div>';
}
?>

</body>
</html>
