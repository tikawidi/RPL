<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <title>Membuat Form Login dan Registrasi</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
 
<body class="text-center">
    <img src="assets\img\Modern and Minimalist Laundry Business Logo (1) 2.png" class="image" width="200" height="200">
      <div class="wrapper">
         <div class="title-text">
            <div class="title signup">
               LOGIN ADMIN
            </div>
         </div>
         <div class="form-container">
            </div>
            <div class="form-inner">
        
    
   
    <main class="form-signin">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/login/process" >
            <div class="field" style="background-color: white;">
                       <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
            </div>
            <div class="field" style="background-color: white;">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
            </div>
            <div class="field">
            <button type="submit" class="btn text-white" style="background-color: #876457"><p class="color">LOGIN</p></button>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; kumlaud</p>
        </form>
        
    </main>
    </div>
 
 
 
</body>
 
</html>