<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal text-white">VladosK</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-white" href="index.php">Home</a>
    <a class="p-2 text-white" href="contact.php">Contacts</a>
  </nav>
  <?php
    if($_COOKIE['user']=='true'):
   ?>
<a class="btn btn-light" href="/auth.php">User account</a>
<?php else:?>
<a class="btn btn-light" href="/auth.php">Log in</a>
<?php endif; ?>
</div>
