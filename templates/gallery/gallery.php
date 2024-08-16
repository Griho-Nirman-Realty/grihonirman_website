<!--==============================
Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src="linear-gradient(45deg, #000000cf, transparent),url(assets/images/gallery/convicity-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Gallery</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="./home">Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery section -->
<div class="gallery-container">
    <h2 style="text-align:center">Lightbox</h2>

    <div class="row1">
        <div class="column">
            <img src="assets/images/gallery/convicity-2.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="assets/images/gallery/convicity-1.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="assets/images/gallery/226.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="assets/images/gallery/villa-5.jpeg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="assets/images/gallery/villa-5.jpeg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
        </div>
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class="mySlides">
            <div class="numbertext">1 / 5</div>
            <img src="assets/images/gallery/convicity-2.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">2 / 5</div>
            <img src="assets/images/gallery/convicity-1.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">3 / 5</div>
            <img src="assets/images/gallery/226.jpeg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">4 / 5</div>
            <img src="assets/images/gallery/villa-5.jpeg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">5 / 5</div>
            <img src="assets/images/gallery/villa-5.jpeg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
        document.body.style.overflow = "hidden"; // Disable scroll on body when modal is open
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
        document.body.style.overflow = "auto"; // Re-enable scroll on body when modal is closed
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
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

    // Close modal when clicking outside of the content
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal")) {
            closeModal();
        }
    }
</script>