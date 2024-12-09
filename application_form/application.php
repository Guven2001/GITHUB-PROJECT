<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle Form Example</title>
  <style>
    body {
        background-color: #0a3a3d;
        color: #edf6fc;
    }
    .form-container {
      display: none; /* Initially hide the form */
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      width: 300px;
    }

    .form-title {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .form-container input {
      width: 100%;
      padding: 8px;
      margin: 10px 0;
      box-sizing: border-box;
    }

    .form-actions {
      text-align: center;
    }

    button {
      padding: 10px 20px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">
</head>
<body>
    <section class="section hero" style="background-image: url('./assets/images/hero-bg.png')" aria-label="home">

  <button id="toggleFormButton">Show Appointment Form</button>
  
  <div class="form-container" id="formContainer"> 
    <h1 class="form-title">Appointment Form</h1>
    <hr>
    <form action="function.php" method="post">
  <label for="registration-number">Registration Number</label>
  <input type="text" id="registration-number" name="registration-number" placeholder="Enter your registration number" required>
  
  <label for="full-name">Full Name</label>
  <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
  
  <label for="mobile-number">Mobile Number</label>
  <input type="tel" id="mobile-number" name="mobile-number" placeholder="10-digit number" pattern="[0-9]{10}" required>
  
  <label for="email-id">Email ID</label>
  <input type="email" id="email-id" name="email-id" placeholder="Enter your email" required>
  
  <label for="appointment-date">Appointment Date</label>
  <input type="date" id="appointment-date" name="appointment-date" required>
  
  <label>
    <input type="checkbox" id="already-registered" name="already-registered"> I have already registered
  </label>
  
  <div class="form-actions">
    <button type="submit">Book Appointment</button>
  </div>
</form>
  </div>

  <script>
    const toggleButton = document.getElementById('toggleFormButton');
    const formContainer = document.getElementById('formContainer');

    toggleButton.addEventListener('click', () => {
      if (formContainer.style.display === 'none' || formContainer.style.display === '') {
        formContainer.style.display = 'block';
        toggleButton.textContent = 'Hide Appointment Form';
      } else {
        formContainer.style.display = 'none';
        toggleButton.textContent = 'Show Appointment Form';
      }
    });
  </script>
  
</section>
</body>
</html>
