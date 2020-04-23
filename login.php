<link href="style.css" rel="stylesheet">
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name" />
      <input type="password" placeholder="password" />
      <input type="text" placeholder="email address" />
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="aksi_login.php" method="POST">
      <input type="text" placeholder="username" name="username">
      <input type="password" placeholder="password" name="password">
      <button type="submit" name="submit">login</button>
    </form>
  </div>
</div>

<script src="list.js"></script>