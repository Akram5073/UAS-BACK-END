<!DOCTYPE html>
<html>

<head>
  <title>Admin Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(135deg,rgb(127, 95, 168),rgb(147, 100, 168));
      background-size: cover;
      color: white;
    }

    .container-head {
      background:linear-gradient(to right, #ac2cde,rgb(169, 87, 202), #d35de0);
      height: 50px;
      width: 300px;
      text-align: center;
      padding: 10px 40px 20px;
      border-radius: 10px 10px 0 0;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 0 0 10px 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      width: 300px;
      text-align: center;
      margin-top: 0px;
    }

    .login-container h1 {
      margin-bottom: 20px;
      color:rgb(178, 47, 202);
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 93%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.2);
      color: white;
    }

    .login-container input[type="text"]::placeholder,
    .login-container input[type="password"]::placeholder {
      color:rgb(108, 7, 79);
    }

    .login-container button {
      background-color: #7e57c2;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
    }

    .login-container button:hover {
      background-color: #9575cd;
    }

    .login-container a {
      color: #ce93d8;
      text-decoration: none;
      font-size: 14px;
    }

    .login-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container-head">
    <h1>Admin Login</h1>
  </div>
  <div class="login-container">
    <form action="<?= site_url('auth/login') ?>" method="post">
      <input type="text" name="username" placeholder="Masukkan Username">
      <input type="password" name="password" placeholder="Masukkan Password">
      <button type="submit">Sign In</button>
    </form>

  </div>
</body>

</html>
