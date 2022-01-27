<?php include ('config.php'); ?>
<!-- PAGE START -->
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo STYLEPATH; ?>style.css">
    <title>Galerie</title>
</head>

<body>
    <div id="main">
        <div class="header-container">
            <div class="h1-container">
                <h1>Galerie</h1>
            </div>
            <div class="text-content">
                <div class="row">
                    <div class="column-lightbox">
                        <img src="images/1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                    </div>
                    <div class="column-lightbox">
                        <img src="images/2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    </div>
                    <div class="column-lightbox">
                        <img src="images/3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                    </div>
                    <div class="column-lightbox">
                        <img src="images/4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                    </div>
                </div><br />

                <div class="row">
                    <div class="column-lightbox">
                        <img src="images/5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                    </div>
                    <div class="column-lightbox">
                        <img src="images/6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                    </div>
                    <div class="column-lightbox">
                        <img src="images/7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                    </div>
                    <div class="column-lightbox">
                        <img src="images/8.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                    </div>
                </div>

                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 8</div>
                            <img src="images/1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 8</div>
                            <img src="images/2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 8</div>
                            <img src="images/3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 8</div>
                            <img src="images/4.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 8</div>
                            <img src="images/5.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">6 / 8</div>
                            <img src="images/6.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">7 / 8</div>
                            <img src="images/7.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">8 / 8</div>
                            <img src="images/8.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>


                        <div class="row" style="background-color: #000; padding-bottom: 15px;">
                            <div class="column-lightbox">
                                <img class="demo cursor" src="images/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="1">
                            </div>
                            <div class="column-lightbox">
                                <img class="demo cursor" src="images/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="2">
                            </div>
                            <div class="column-lightbox">
                                <img class="demo cursor" src="images/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="3">
                            </div>
                            <div class="column-lightbox">
                                <img class="demo cursor" src="images/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="4">
                            </div>
                        </div>
                        <div class="row" style="background-color: #000; padding-bottom: 15px;">
                            <div class="column-lightbox">
                                <img class="demo cursor" src="images/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="5">
                            </div>
                            <div class="column-lightbox">
                                <img class="demo cursor" src="images/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="6">
                            </div>
                            <div class="column-lightbox">
                                <img class="demo cursor" src="images/7.jpg" style="width:100%" onclick="currentSlide(7)" alt="7">
                            </div>
                            <div class="column-lightbox">
                                <img class="demo cursor" src="images/8.jpg" style="width:100%" onclick="currentSlide(8)" alt="8">
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function openModal() {
                        document.getElementById("myModal").style.display = "block";
                    }

                    function closeModal() {
                        document.getElementById("myModal").style.display = "none";
                    }

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
            </div>
            <br />
            <a href="index.php" class="button success-page-button">Inapoi Acasa</a>
        </div>
    </div>
</body>

</html>
<!-- PAGE END -->
