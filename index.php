<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFR-SDS</title>
    <link rel="stylesheet" href="script/swiper.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-5.3.0-alpha3-dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <section>
  <div class="circle"> 
    
    <h1 class="h1">UNIVERSITE JOSEPH KI-ZERBO</h1>
    <h1 class="h11">UFR-SDS</h1>
    <P class="p">(Unité de Formation et de Recherche en Science de la Santé)</P>
    <img class="img1" src="images/logo .png" alt="img">
    <img class="img2" src="images/am.png" alt="img">
  </div>
</section>


  
<section>
  <div class="circle1">
    <img class="img5" src="images/d.jpg" alt="">
    <img class="img3" src="images/f.jpg" alt="">
    <img class="img4" src="images/b.jpg" alt="">
    
    <img class="img6" src="images/e.jpg" alt="">
  </div>

  
</section>

<button class="custom-button" onclick="redirectToPage()">ENREGISTRER UN ETUDIANT</button>

<button class="custom-button1" onclick="redirectToPage1()">LISTE DES ETUDIANTS</button>




<script>
  function redirectToPage() {
  window.location.href = "ajout.html";
}
function redirectToPage1() {
  window.location.href = "liste.html";
}
</script>



  <script src="script/jquery-3.6.4.js"></script>
  <script src="script/query.js"></script>
</body>
</html>