<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        /* Mengatur font dan background dasar */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container utama form */
        .register-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 1.5rem;
            text-transform: capitalize;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        input {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.2);
        }

        /* Tombol styling */
        button {
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.1s, background-color 0.3s;
        }

        /* Tombol Daftar (Utama) */
        .btn-register {
            background-color: #28a745;
            color: white;
        }

        .btn-register:hover {
            background-color: #218838;
        }

        /* Tombol Login (Sekunder) */
        .btn-login {
            background-color: transparent;
            color: #007bff;
            text-decoration: underline;
            font-size: 0.9rem;
        }

    </style>
</head>
<body>

<div class="register-container">
  <h2>Register</h2>
  <form action="">
    <input type="text" placeholder="Nama Lengkap" required>
    <input type="email" placeholder="Email" required>  
    <input type="password" placeholder="Password" required>  
    
    <button type="submit" class="btn-register">Daftar Akun</button>
    <button type="button" class="btn-login">Sudah punya akun? Login</button>
  </form>
</div>

</body>
</html>