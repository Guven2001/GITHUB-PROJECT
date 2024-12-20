<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Details Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Doctor Details Form</h1>
        <form action="submit.php" method="POST">
            <label for="doc_id">Doctor ID:</label>
            <input type="text" id="doc_id" name="doc_id" required><br><br>
            
            <label for="name">Doctor Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>