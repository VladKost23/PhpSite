<!DOCTYPE html>
<html lang="en">
<link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css"></link>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></link>
    <title>Contact Us</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="container mt-5">
    <h3>Contact Us</h3>
    <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Enter your e-mail" class="form-control"><br>
      <textarea name="message" class="form-control" placeholder="Enter your message"></textarea><br>
      <button class="btn btn-dark" type="submit" name="send">Send message</button>
    </form>
  </div>
  <?php  require "blocks/footer.php" ?>
</body>
</html>
