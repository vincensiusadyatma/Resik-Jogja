<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Daftar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 400px;
      margin: auto;
      padding: 20px;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }
    .relative { position: relative; }
    .toggle-password {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: gray;
    }
    button {
      width: 100%;
      padding: 12px;
      background: black;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover { background: #333; }
    .hidden { display: none; }
  </style>
</head>
<body>

<h2>Daftar</h2>
<form action="#" method="POST">
  @csrf
  <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
  <input type="text" name="nama_user" placeholder="Nama User" required>
  <input type="email" name="email" placeholder="Email" id="email" required>
  <input type="number" name="umur" placeholder="Umur" id="umur" min="1" max="100" required>

  <!-- Password dengan toggle mata -->
  <div class="relative">
    <input type="password" id="password" name="password" placeholder="Password" required>
    <span id="togglePassword" class="toggle-password">
      <!-- Mata normal -->
      <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" 
           fill="none" viewBox="0 0 24 24" stroke="currentColor" width="22" height="22">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 
                 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
      </svg>
      <!-- Mata slash -->
      <svg id="eyeSlash" class="hidden" xmlns="http://www.w3.org/2000/svg" 
           fill="none" viewBox="0 0 24 24" stroke="currentColor" width="22" height="22">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7 
                 a10.05 10.05 0 012.724-4.362m3.623-2.476A9.956 9.956 0 0112 5
                 c4.477 0 8.268 2.943 9.542 7a9.953 9.953 0 01-4.294 5.13M15 12a3 3 0 11-6 0 
                 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M3 3l18 18" />
      </svg>
    </span>
  </div>

  <button type="submit">Daftar</button>
</form>

<script>
  const umurInput = document.getElementById("umur");
  const emailInput = doc  ument.getElementById("email");
  const passwordInput = document.getElementById("password");
  const togglePassword = document.getElementById("togglePassword");
  const eyeOpen = document.getElementById("eyeOpen");
  const eyeSlash = document.getElementById("eyeSlash");

  // Validasi umur
  umurInput.addEventListener("keydown", function (e) {
    if (["e", "E", "+", "-"].includes(e.key)) e.preventDefault();
  });
  umurInput.addEventListener("input", function () {
    if (this.value < 1) this.value = 1;
    if (this.value > 100) this.value = 100;
  });

  // Validasi email
  emailInput.addEventListener("input", function () {
    const allowedDomains = ["gmail.com", "yahoo.com", "outlook.com", "hotmail.com"];
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (pattern.test(this.value)) {
      const domain = this.value.split('@')[1].toLowerCase();
      if (allowedDomains.includes(domain)) {
        this.setCustomValidity("");
      } else {
        this.setCustomValidity("Gunakan email dengan domain profesional (misalnya: @gmail.com, @yahoo.com)");
      }
    } else {
      this.setCustomValidity("Format email tidak valid (contoh: user@gmail.com)");
    }
  });

  // Toggle password dengan ikon
  let showPassword = false;
  togglePassword.addEventListener("click", () => {
    showPassword = !showPassword;
    passwordInput.type = showPassword ? "text" : "password";
    eyeOpen.classList.toggle("hidden", showPassword);
    eyeSlash.classList.toggle("hidden", !showPassword);
  });
</script>

</body>
</html>
