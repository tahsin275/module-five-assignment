<!DOCTYPE html>
<html>

<head>
    <title>Example Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <form method="post" action="process-form.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
