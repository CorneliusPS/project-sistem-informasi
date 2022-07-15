<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Aplikasi Klinik Sederhana">
  <meta name="generator" content="Projek SMDB">
  <title>Login Aplikasi Klinik</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <!-- Css custom -->
  <link href="<?= base_url(); ?>assets/custom/login2.css" rel="stylesheet">

  <title>Login</title>

  </head>
  <body class="efek">
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>LOGIN</h2>
          <div class="underline-title"></div>
        </div>

        
        <form method="post" class="form" action="<?= base_url('auth/login_aksi'); ?>">
          <label style="padding-top:13px">&nbsp;Username</label>
          <input 
          class="form-content"
          type="username" 
          name="username" 
          autocomplete="on" 
          required />
          <div class="form-border"></div>
          <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
          <input
          id="user-password"
          class="form-content"
          type="password"
          name="password"
          required />
          <div class="form-border"></div>
          
          <input id="submit-btn" type="submit" name="login" value="LOGIN" />

        </form>
        
      </div>
    </div>   
  </body>
  </html>