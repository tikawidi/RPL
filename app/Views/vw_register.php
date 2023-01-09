<!doctype html>
<html lang="en" class="h-100">
 
<head>
      <meta charset="utf-8">
      <title>Membuat Form Login dan Registrasi</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
 
<body class="d-flex flex-column h-100">
    <img src="assets\img\Modern and Minimalist Laundry Business Logo (1) 2.png" class="image" width="200" height="200">
      <div class="wrapper">
         <div class="title-text">
            <div class="title signup">
               Konfirmasi Registrasi Admin
            </div>
         </div>
         <div class="form-container">
            </div>
            <div class="form-inner">
 
    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            
           
            <hr />
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/register/process">
                <?= csrf_field(); ?>
                <div class="field">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="field">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="field">
                    <label for="password_conf" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_conf" name="password_conf">
                </div>
                <div class="field">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="field">
                    <label for="no_hp" class="form-label">No Hp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                </div>
                <div class="field">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="field">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="field">
                    <button type="submit" class="btn btn-primary" style="background-color: #876457;"><p class="color"> Register</p></button>
                </div>
            </form>
            <hr />
 
        </div>
    </main>
            </div>
 
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Kusuma Laundry</span>
        </div>
    </footer>
 
 
 
</body>
 
</html>