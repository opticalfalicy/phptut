<?php include 'server-info.php' ?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <title>System Info</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <h1>Server & File Info</h1>
      <?php if($server): ?>
        <ul class="list-group">
          <?php foreach($server as $key => $value): ?>
            <li class="list-group-item">
              <strong><?php echo $key; ?>:</strong>
              <?php echo $value;?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

    <h1>Client Info</h1>
      <?php if($client): ?>
        <ul class="list-group">
          <?php foreach($client as $key => $value): ?>
            <li class="list-group-item">
              <strong><?php echo $key; ?>: </strong>
              <?php echo $value;?>
            </li>
          <?php endforeach; ?>
        </ul
      <?php endif; ?>

  </div>
  
</body>
</html>