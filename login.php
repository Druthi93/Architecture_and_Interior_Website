<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <style>
        *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}


body {
    font-family: Arial, sans-serif;
    background-image:url("./interiorimage.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
}

.container {
    background-color: rgba(255, 166, 0, 0.438);
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin-top: 10%;
    width: 100%;
}

.form-container {
    padding: 20px;
    text-align: center;
    transition: transform 0.3s;
    transform: scale(0.8);
    animation-delay: 2s;
  animation: bounce 3s ease;
}
@keyframes bounce {
  0% { transform: scale(0.8); }
  100% { transform: scale(1); }
}

  

h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.input-container {
    margin: 20px 0;
}

label {
    display: block;
    font-size: 14px;
    text-align: left;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
}

#b1 {
    width: 100%;
    background-color: hsl(154, 88%, 27%);
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#b1:hover {
    background-color: #0056b3;
}
#a1{
    border: none;
    background-color: rgba(255, 166, 0, 0.002);
    font-size: 100%;
}
#a1:hover{
    cursor: pointer;
}
.container.show-form {
    transform: translateX(0);
}

    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Login</h1>
                <form id="login-form" action="loginConnect.php" method="POST" style="text-align: center;">
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <button id="b1" type="submit" name="submit" id="submit">Sign Up</button>
                <h3>Don't have an account ? <button id="a1" formaction="./register.php" style="color: rgb(242, 242, 170);">Sign Up</button></h3>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>