<!DOCTYPE html>
<html lang="en">
<head ><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
  <style>
      font-family: Arial, sans-serif;{
      margin: 0;
      padding: 0;
      }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"], select {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 20px;
    }
    .hobbies-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 20px;
    }
    .hobbies-container label {
      display: inline-block;
      margin-right: 20px;
      margin-bottom: 10px;
    }
    button {
      background-color: #5cc5ee;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 30%;
    }
  </style>
</head>
<body><form name="f1" method="post" action="tugastask5.php">
  <div class="container">
    <h2>Form Registrasi</h2>
    <form>
      <label for="name">Nama Lengkap:</label>
      <input type="text" id="name" name="name" value="Bedu">
      <label for="age">Umur:</label>
      <input type="text" id="age" name="age" value="17">
      <label for="gender">Gender:</label>
      <select id="gender" name="gender">
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan" selected>Perempuan</option>
      </select>
      <label for="education">Pendidikan:</label>
      <select id="education" name="education">
        <option value="s1" selected>S1</option>
      </select>
      <label for="hobbies">Hobi:</label>
      <div class="hobbies-container">
        <div>
          <input type="checkbox" id="hobbies-membaca-buku" name="hobbies[]" value="membaca buku" checked>
          <label for="hobbies-membaca-buku">Membaca Buku</label>
        </div>
        <div>
          <input type="checkbox" id="hobbies-travelling" name="hobbies[]" value="travelling" checked>
          <label for="hobbies-travelling">Travelling</label>
        </div>
        <div>
          <input type="checkbox" id="hobbies-olah-raga" name="hobbies[]" value="olah raga" checked>
          <label for="hobbies-olah-raga">Olah raga</label>
        </div>
        <div>
          <input type="checkbox" id="hobbies-nonton" name="hobbies[]" value="nonton">
          <label for="hobbies-nonton">Nonton</label>
        </div>
        <div>
          <input type="checkbox" id="hobbies-hiking" name="hobbies[]" value="hiking">
          <label for="hobbies-hiking">Hiking</label>
        </div>
        <div>
          <input type="checkbox" id="hobbies-mancing" name="hobbies[]" value="mancing">
          <label for="hobbies-mancing">Mancing</label>
        </div>
      </div>
      <button type="submit" href="p_get.php">back</a>>Daftar</button>
    </form>
  </div>
</body>
</html>
  
<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
    harset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        /* Gaya CSS sama dengan sebelumnya */
    </style>
</head>
<body>
<table class="table table-dark">
  <thead>
    
  </thead>
  <tbody>
    <tr class="table-active">
    <tr>
      <td>Nama</td>
      <td>Umur</td>
      <td>Gender</td>
      <td>Pendidikan</td>
      <td>Hobi</td>

    </tr>
    <tr>
      <td>Bedu</td>
      <td>17 tahun</td>
      <td>Laki-Laki</td>
      <td>S1</td>
      <td>Membaca Buku|Travelling|Olahraga</td>
      
    </tr>
  </tbody>
</table>
</body>
</html>




