<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name ="viewport" content="width_device-widht,
  initial-scale=1.0">
  <link rel="stylesheet" herf="../css/style.css">
  <link rel ="stylesheet" href =" ../css/bootstrap.min.css">

    <title> Gestion produit</title >

<head><!--navbar.php-->
  <?PHP
   require_once("../inculdes/navbar.php");

  ?>
 
</head>
<body>

 

<section>
  <img src="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2168&q=80" data-color="#f1bace" />
  <img src="https://images.unsplash.com/photo-1516085216930-c93a002a8b01?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" data-color="#ffbc00" />
  <img src="https://images.unsplash.com/photo-1458819714733-e5ab3d536722?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=933&q=80" data-color="#cfdfde" />
  <img src="https://images.unsplash.com/photo-1520013817300-1f4c1cb245ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2287&q=80" data-color="#3c94c5" />
  <img src="https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2247&q=80" data-color="#99aba0" />
  <img src="https://images.unsplash.com/photo-1559181567-c3190ca9959b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80" data-color="#b0e6db" />
  <img src="https://images.unsplash.com/photo-1560393464-5c69a73c5770?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1301&q=80" data-color="#fe6f62" />
  <img src="https://images.unsplash.com/photo-1506619216599-9d16d0903dfd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2249&q=80" data-color="#eed2b7" />
  <img src="https://images.unsplash.com/photo-1481349518771-20055b2a7b24?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2309&q=80" data-color="#f8bbc6" />
  <img src="https://images.unsplash.com/photo-1579613832111-ac7dfcc7723f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" data-color="#08bac3" />
  <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2189&q=80" data-color="#dcdcdc" />
<STYLE>
  body {
  overscroll-behavior-x: none;
  scroll-behavior: smooth;

  height: 100vh;
  

  overflow: hidden;
  
}

section {
  width: 100%;
  box-sizing: border-box;
  transition: 0.3s;
  background-color: #f1bace;
  white-space: nowrap;
  position: right;
  height: 100%;
  overflow: auto;
}

img {
  transition: 0.3s;
  width: 30%;
  margin-right: 10vw;
  height: 45vh;
  margin-top: 25vh;
  object-fit: cover;
  object-position: center;
  border-radius: 6px;
  flex-shrink: 0;
  box-shadow: 0 40px 100px rgba(0, 0, 0, 0.4);
}

img:first-child {
  margin-left: 10vw;
}

</STYLE>
<SCript>
  const section = document.querySelector("section");
const images = document.querySelectorAll("img");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = "scale(1)";
        section.style.backgroundColor = entry.target.getAttribute("data-color");
      } else {
        entry.target.style.opacity = 0;
        entry.target.style.transform = "scale(.65)";
      }
    });
  },
  {
    threshold: 0.25
  }
);

images.forEach((el, i) => {
  observer.observe(el);
});

</SCript>







</section>







  <!-- panel01--
  <div class="container">
  <div class="panel panel-success">
  <div class="panel-heading">Rechercher Un Produit</div>
  <div class="panel-body">Formulaire de recherche</div>
</div>
</div>
<div class="container">
  <div class="panel panel-warning">
  <div class="panel-heading">Liste des Produits</div>
  <div class="panel-body"> continu des Produits</div>
</div>
</div>
  panel00--> 
   
</body>
</html>
