<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Submitted</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: white;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
      text-align: center;
      max-width: 400px;
      width: 90%;
    }

    h1 {
      font-size: 2em;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.2em;
    }

    .checkmark {
      font-size: 4em;
      color: #00ffb7;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="checkmark">✔️</div>
    <h1>Form Submitted Successfully</h1>
    <p>Thank you! We’ve received your submission.</p>
    <a href="./index.php" class="btn btn-warning">back to form</a>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>
