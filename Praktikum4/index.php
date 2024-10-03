<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Mahasiswa</title>
  </head>
  <body>
    <div class= "container">
      <div class="row">
        <div class="cot">
          <h1 class ="">Form Mahasiswa</h1>
          <hr>
          <?php
             require_once "BsForm.php" ;
             $formMhs = new BsForm();
             $formMhs->setInputText('nama' , 'nama' , 'Nama') ;
             $formMhs->setInputText('nim', 'nim', 'NIM');
             $formMhs->setInputText('prodi', 'prodi', 'Program Studi');
             $formMhs->setInputText('fakultas', 'fakultas', 'Fakultas');
             $formMhs->setButton('Simpan');
             $formMhs->showForm();
          ?>
              
        </div>
      </div>
    </div>
    
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>