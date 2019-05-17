<!DOCTYPE html>
<html lang="en">
<link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css"></link>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></link>
    <title>VladosK</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal text-white">VladosK</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="#">Home</a>
        <a class="p-2 text-white" href="#">Support</a>
        <a class="p-2 text-white" href="#">About Us</a>
      </nav>
    <a class="btn btn-outline-primary" href="#">Log in</a>
  </div>
  <div class="container mt-5">
    <h3 class="mb-5">Our articles</h3>
    <div class="d-flex flex-wrap">
    <?php
      for ($i=0; $i < 6; $i++):
      ?>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Text</h4>
          </div>
          <div class="card-body">
            <img src="image/<?php echo ($i + 1)?>.jpg" class="img-thumbnail" alt="nature">
              <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
          </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>

</body>
</html>
