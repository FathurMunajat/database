<?php
    if(isset($_POST["submit"])){
        if($_POST["username"] == "Zold" && $_POST["password"] == "p"){
                header("Location: database.php");
        }else{
            $error = true;
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <a href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></a>
    </head>
    <body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
    <form action="" method="post" >
    <h5 class="card-title">Form login</h5>
    <p class="eror" <?php if(isset($error)):?>>
        <p>Username/password anda salah</p>
    <?php endif;?></p>
    <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control"name="username" >
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"name="password" >
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Login</button>
</form></div>
  </div></h6>
</div>
</div>
    </body>
 </html>
