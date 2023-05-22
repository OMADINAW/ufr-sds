<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFR-SDS</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <style>
         html{
    overflow-y: auto;
    overflow-x: hidden;
    width: 100%;
    height: 100%;
}
body{
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
    background-color: rgb(104, 201, 141);
}
.section1{
    height: 600px;
    width: 800px;
      border-radius: 25%;
      background-color: rgb(138, 141, 138);
      border: 5px solid black;
      position: relative;
      top: 5px;
      left: 300px;
}
.h1{
    position: relative;
    left: 100px;

}
input{
    position: relative;
    top: -40px;
    left: 200px;
}
.div1{
    position: relative;
  left: 100px;
  top: 20px;
}
select{
    position: relative;
    top: -40px;
    left: 200px;
}


    </style>


<section class="section1">
    <h1 class="h1">ESPACE ENREGISTREMENT</h1>

    <form action="enregistrement.php" method="post">
    <div class="div1">
        <div class="col-md-4">
            <label for="inputState" class="form-label">NOM</label>
            <input type="nom" class="form-control" id="inputnom">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">PRENOM</label>
                <input type="prenom" class="form-control" id="inputprenom">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">DATE DE NAISSANCE</label>
                    <input type="date" class="form-control" id="inputdate">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">DATE D'ENTREE</label>
                        <input type="date" class="form-control" id="inputdate">
                        </div>

      <div class="col-md-4">
        <label for="inputState" class="form-label">GENRE</label>
        <select id="inputState" class="form-select">
          <option selected>Choisir...</option>
          <option>FEMININ</option>
          <option>MASCULIN</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">PERSONNE A PREVENIR</label>
        <input type="nom" class="form-control" id="inputnom">
        </div>
        <button class="custom-button2">ENREGISTRER</button>
    </div>
      



   
       
          
          
    </section>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>