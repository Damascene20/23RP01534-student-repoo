<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="/submit_registration" method="post">
  <div>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
  </div>
  <div>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
  </div>
  <div>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br>
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
</form>

</body>
</html>
