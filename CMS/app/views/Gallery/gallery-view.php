 <!--------------------------------------header starts---------------------------->

 <section>
     <div class="container-fulid">
         <img src="assets/frontend/img/image_6.jpg" alt="Snow" style="width:100%; height: 500px; opacity: .4;">
         <div id="centered">
             <h1>Gallery</h1>
         </div>
         <div class="centered"><a href="indexx.html">Home<span><a href="gallery.html">/Gallery</a></span></a></div>
     </div>
 </section>

 <!----------------------------------header ends---------------------------------->

 <!----------------------------gallery starts-------------------------->
 <section class="gallery pt-3">
     <div class="row bg-light">
         <div class="col-sm-12  text-center">
             <h1 style="font-family:cooperblack; font-weight:bold;font-size:60;">Image Gallery</h1>
         </div>
     </div>
     <div class="row bg-white">
         <div class="col-sm-12">
             </br>
             <div class="row">
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-1.jpg"> <img src="assets/frontend/img/course-1.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-2.jpg"><img src="assets/frontend/img/course-2.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-3.jpg"><img src="assets/frontend/img/course-3.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-4.jpg"><img src="assets/frontend/img/course-4.jpg"
                             height="350px" width="350px" /></a>
                 </div>
             </div></br>

             <div class="row">
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-1.jpg"> <img src="assets/frontend/img/course-1.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-2.jpg"><img src="assets/frontend/img/course-2.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-3.jpg"><img src="assets/frontend/img/course-3.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-4.jpg"><img src="assets/frontend/img/course-4.jpg"
                             height="350px" width="350px" /></a>
                 </div>
             </div></br>

             <div class="row">
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-1.jpg"> <img src="assets/frontend/img/course-1.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-2.jpg"><img src="assets/frontend/img/course-2.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-3.jpg"><img src="assets/frontend/img/course-3.jpg"
                             height="350px" width="350px" /></a>
                 </div>
                 <div class="col-sm-3">
                     <a href="assets/frontend/img/course-4.jpg"><img src="assets/frontend/img/course-4.jpg"
                             height="350px" width="350px" /></a>
                 </div>
             </div></br>
         </div>

     </div>

     <h2 style="text-align:center">Slideshow Gallery</h2>

     <div class="container">
         <div class="mySlides">
             <div class="numbertext">1 / 6</div>
             <img src="assets/frontend/img/course-5.jpg" style="width:100%" height="500px">
         </div>

         <div class="mySlides">
             <div class="numbertext">2 / 6</div>
             <img src="assets/frontend/img/course-6.jpg" style="width:100%" height="500px">
         </div>

         <div class="mySlides">
             <div class="numbertext">3 / 6</div>
             <img src="assets/frontend/img/course-7.jpg" style="width:100%" height="500px">
         </div>

         <div class="mySlides">
             <div class="numbertext">4 / 6</div>
             <img src="assets/frontend/mg/course-8.jpg" style="width:100%" height="500px">
         </div>

         <div class="mySlides">
             <div class="numbertext">5 / 6</div>
             <img src="assets/frontend/img/image_2.jpg" style="width:100%" height="500px">
         </div>

         <div class="mySlides">
             <div class="numbertext">6 / 6</div>
             <img src="assets/frontend/mg/image_3.jpg" style="width:100%" height="500px">
         </div>

         <a class="prev" onclick="plusSlides(-1)">❮</a>
         <a class="next" onclick="plusSlides(1)">❯</a>

         <div class="caption-container">
             <p id="caption"></p>
         </div>

         <div class="row">
             <div class="column">
                 <img class="demo cursor" src="assets/frontend/img/course-5.jpg" style="width:100%" height="150px"
                     onclick="currentSlide(1)" alt="The Woods">
             </div>
             <div class="column">
                 <img class="demo cursor" src="assets/frontend/img/course-6.jpg" style="width:100%" height="150px"
                     onclick="currentSlide(2)" alt="Cinque Terre">
             </div>
             <div class="column">
                 <img class="demo cursor" src="assets/frontend/img/course-7.jpg" style="width:100%" height="150px"
                     onclick="currentSlide(3)" alt="Mountains and fjords">
             </div>
             <div class="column">
                 <img class="demo cursor" src="assets/frontend/img/course-8.jpg" style="width:100%" height="150px"
                     onclick="currentSlide(4)" alt="Northern Lights">
             </div>
             <div class="column">
                 <img class="demo cursor" src="assets/frontend/img/image_2.jpg" style="width:100%" height="150px"
                     onclick="currentSlide(5)" alt="Nature and sunrise">
             </div>
             <div class="column">
                 <img class="demo cursor" src="assets/frontend/img/image_3.jpg" style="width:100%" height="150px"
                     onclick="currentSlide(6)" alt="Snowy Mountains">
             </div>
         </div>
     </div>

     <script>
     var slideIndex = 1;
     showSlides(slideIndex);

     function plusSlides(n) {
         showSlides(slideIndex += n);
     }

     function currentSlide(n) {
         showSlides(slideIndex = n);
     }

     function showSlides(n) {
         var i;
         var slides = document.getElementsByClassName("mySlides");
         var dots = document.getElementsByClassName("demo");
         var captionText = document.getElementById("caption");
         if (n > slides.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides.length
         }
         for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
             dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[slideIndex - 1].style.display = "block";
         dots[slideIndex - 1].className += " active";
         captionText.innerHTML = dots[slideIndex - 1].alt;
     }
     </script>
 </section>
 <!------------------------------gallery ends=----------------------------->