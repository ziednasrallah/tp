<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h3>Nouvel étudiant</h3>
<form method="POST" action="store.php">
  <div class="form-group">
    <label>first Name</label>
    <input type="text" class="form-control" name="firstname">
  </div>
  <div class="form-group">
    <label>last Name</label>
    <input type="text" class="form-control" name="lastname">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="number" class="form-control" name="phone">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
