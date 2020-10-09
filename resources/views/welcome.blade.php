@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<div class="container" style="height: auto;">
<script>
    // Variables globales
let compteur = 0 // Compteur qui permettra de savoir sur quelle slide nous sommes
let timer, elements, slides, slideWidth

window.onload = () => {
    // On récupère le conteneur principal du diaporama
    const diapo = document.querySelector(".diapo")

    // On récupère le conteneur de tous les éléments
    elements = document.querySelector(".elements")

    // On récupère un tableau contenant la liste des diapos
    slides = Array.from(elements.children)

    // On calcule la largeur visible du diaporama
    slideWidth = diapo.getBoundingClientRect().width

    // On récupère les deux flèches
    let next = document.querySelector("#nav-droite")
    let prev = document.querySelector("#nav-gauche")

    // On met en place les écouteurs d'évènements sur les flèches
    next.addEventListener("click", slideNext)
    prev.addEventListener("click", slidePrev)

    // Automatiser le diaporama
    timer = setInterval(slideNext, 4000)

    // Gérer le survol de la souris
    diapo.addEventListener("mouseover", stopTimer)
    diapo.addEventListener("mouseout", startTimer)

    // Mise en oeuvre du "responsive"
    window.addEventListener("resize", () => {
        slideWidth = diapo.getBoundingClientRect().width
        slideNext()
    })
}

/**
 * Cette fonction fait défiler le diaporama vers la droite
 */
function slideNext(){
    // On incrémente le compteur
    compteur++

    // Si on dépasse la fin du diaporama, on "rembobine"
    if(compteur == slides.length){
        compteur = 0
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur
    elements.style.transform = `translateX(${decal}px)`
}

/**
 * Cette fonction fait défiler le diaporama vers la gauche
 */
function slidePrev(){
    // On décrémente le compteur
    compteur--

    // Si on dépasse le début du diaporama, on repart à la fin
    if(compteur < 0){
        compteur = slides.length - 1
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur
    elements.style.transform = `translateX(${decal}px)`
}

/**
 * On stoppe le défilement
 */
function stopTimer(){
    clearInterval(timer)
}

/**
 * On redémarre le défilement
 */
function startTimer(){
    timer = setInterval(slideNext, 4000)
}

</script>

<style> body{
  margin: 0;
}

main{
  width: 80%;
  margin: auto;
}

.diapo{
  position: relative;
  overflow: hidden;
}

#nav-droite, #nav-gauche{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  color: white;
  font-size: 3em;
}

#nav-droite{
  right: 20px;
}
#nav-gauche{
  left: 20px;
}

.elements{
  display: flex;
  transition: 1s linear;
}

.element{
  flex: 1 0 100%;
  position: relative;
}

.element > img{
  width: 100%;
}

.caption{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  background-color: rgba(255,255,255,0.4);
  padding: 30px;
}</style>
    <main>
    </br></br>
        <h1>This weeks Events </h1>
  <!-- Conteneur principal de tout le diaporama -->
  <div class="diapo">
            <!-- Conteneur des "diapos" -->
            <div class="elements">
              <!-- premiere  diapo -->
                  <div class="element">
                  <img src="https://i.ibb.co/NL63Xt2/Starry-night.jpg" alt="Starry-night" border="0">
                   <div class="caption">
                        <h2>Hitoire de l'arte </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, saepe.</p>
                         <a href=""> more details</a>
                    </div>
                </div>

                <!-- Deuxième diapo -->
                <div class="element">
               <img src="https://i.ibb.co/bmgGxHp/img1.jpg" alt="img1" border="0"></a>
               <div class="caption">
                        <h2> cloudevents</h2>
                        <p>A specification for describing event data in a common way</p>
                         <a href=""> more details</a>
                    </div>
                </div>
                <div class="element">
                 <img src="https://i.ibb.co/QDwWMMJ/1-d3-Yu-Ur-Dj8c0c-F0l4-MIbh-Q.png" alt="1-d3-Yu-Ur-Dj8c0c-F0l4-MIbh-Q" border="0">
                    <div class="caption">
                        <h2> Computational Neuroscience </h2>
                        <p> introduction to basic computational methods.</p>
                           <a href=""> more details</a>
                    </div>
                </div>
                <!-- Troisième diapo -->
                <div class="element">
                <img src="https://i.ibb.co/qJ1j7yC/do-php-programing-for-your-website.jpg" alt="do-php-programing-for-your-website" border="0"></a>
                    <div class="caption">
                        <h2> Hello world</h2>
                        <p> introduction to world of codes .</p>
                           <a href=""> more details</a>
                    </div>
                </div>

            <!-- Flèches de navigation -->
            <i id="nav-gauche" class="las la-chevron-left"></i>
            <i id="nav-droite" class="las la-chevron-right"></i>
        </div>

            <!-- Flèches de navigation -->
            <i id="nav-gauche" class="las la-chevron-left"></i>
            <i id="nav-droite" class="las la-chevron-right"></i>
        </div>
    </main>

</div>
@endsection
