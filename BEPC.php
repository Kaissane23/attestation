<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ATTESTATION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " aria-current="page" href="index.php">6ème</a>
        <a class="nav-link" href="BEPC.php">BEPC</a>
        <a class="nav-link" href="BAC.php">BAC</a>
        <a class="nav-link " href="licence.php" >Licence</a>
      </div>
    </div>
  </div>
</nav>
<form style="margin-left:20%;margin-right:20%; margin-top:30px;"method="POST" action="pdf_bepc.php" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom et Prenom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Telecharger le pdf</button>
</form>
</body>
</html>