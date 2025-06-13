<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
        background: url('car-background.jpg') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url(img/bg2.jpeg);
    }

    .login-container {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        width: 300px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .login-form {
        display: flex;
        flex-direction: column;
        color: grey;
    }

    .login-form h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .login-form label {
        margin-bottom: 5px;
        font-size: 14px;
    }

    .login-form input {
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 8px;
        background: #1a1a1a;
        color: grey;
    }

    .login-form input::placeholder {
        color: #aaa;
    }

    .login-form button {
        padding: 12px;
        background: rgb(15, 15, 15);
        color: grey;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .login-form button:hover {
        background: rgb(234, 247, 52);
        color: black;
        font-weight: bold;
    }
</style>