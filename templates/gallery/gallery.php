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
<div class="process-area-3 overflow-hidden">
    <div class="service-shape1_1 shape-mockup jump-reverse d-lg-block d-none" data-top="0" data-right="0">
        <img src="assets/img/service/service-shape1-1.png" alt="img">
    </div>
    <div class="service-shape1_2 shape-mockup jump-reverse d-lg-block d-none" data-top="0" data-left="0">
        <img src="assets/img/service/service-shape1-2.png" alt="img">
    </div>
    <div class="leaf-shape-animation" data-bg-src="url(assets/img/icon/leaf.svg)">
    </div>
    <div class="container container1">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="title-area text-center">
                    <h2 class="sec-title mt-4 ">Our Projects in Pictures</h2>
                </div>
            </div>
        </div>

        <div class="gallery-container px-4 py-4 mb-4">
            <div class="gallery-item" data-index="1">
                <img src="assets/images/gallery/convicity-2.jpg" alt="image" >
            </div>
            <div class="gallery-item" data-index="2">
                <img src="assets/images/gallery/convicity-1.jpg" alt="image">
            </div>
            <div class="gallery-item" data-index="3">
                <img src="assets/images/gallery/226.webp" alt="image">
            </div>
            <div class="gallery-item" data-index="4">
                <img src="assets/images/gallery/23.jpeg" alt="image">
            </div>
            <div class="gallery-item" data-index="5">
                <img src="assets/images/gallery/24.jpeg" alt="image">
            </div>
            <div class="gallery-item" data-index="6">
                <img src="assets/images/gallery/25.jpeg" alt="image">
            </div>
            <div class="gallery-item" data-index="7">
                <img src="assets/images/gallery/villa-1.webp" alt="image">
            </div>
            <div class="gallery-item" data-index="8">
                <img src="assets/images/gallery/27.webp" alt="image">
            </div>
            <div class="gallery-item" data-index="9">
                <img src="assets/images/gallery/22.jpeg" alt="image">
            </div>
            <div class="gallery-item" data-index="10">
                <img src="assets/images/gallery/villa-2.webp" alt="image">
            </div>
            <div class="gallery-item" data-index="11">
                <img src="assets/images/gallery/villa-3.webp" alt="image">
            </div>
            <div class="gallery-item" data-index="12">
                <img src="assets/images/gallery/villa-4.webp" alt="image">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    const galleryItem = document.getElementsByClassName("gallery-item");
    const lightBoxContainer = document.createElement("div");
    const lightBoxContent = document.createElement("div");
    const lightBoxImg = document.createElement("img");
    const lightBoxPrev = document.createElement("div");
    const lightBoxNext = document.createElement("div");

    lightBoxContainer.classList.add("lightbox");
    lightBoxContent.classList.add("lightbox-content");
    lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
    lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

    lightBoxContainer.appendChild(lightBoxContent);
    lightBoxContent.appendChild(lightBoxImg);
    lightBoxContent.appendChild(lightBoxPrev);
    lightBoxContent.appendChild(lightBoxNext);
    document.body.appendChild(lightBoxContainer);

    let index = 1;

    function showLightBox(n) {
        if (n > galleryItem.length) {
            index = 1;
        } else if (n < 1) {
            index = galleryItem.length;
        }
        let imageLocation = galleryItem[index - 1].children[0].getAttribute("src");
        lightBoxImg.setAttribute("src", imageLocation);
    }

    function currentImage() {
        lightBoxContainer.style.display = "block";

        let imageIndex = parseInt(this.getAttribute("data-index"));
        showLightBox(index = imageIndex);
    }
    for (let i = 0; i < galleryItem.length; i++) {
        galleryItem[i].addEventListener("click", currentImage);
    }

    function slideImage(n) {
        showLightBox(index += n);
    }

    function prevImage() {
        slideImage(-1);
    }

    function nextImage() {
        slideImage(1);
    }
    lightBoxPrev.addEventListener("click", prevImage);
    lightBoxNext.addEventListener("click", nextImage);

    function closeLightBox() {
        if (this === event.target) {
            lightBoxContainer.style.display = "none";
        }
    }
    lightBoxContainer.addEventListener("click", closeLightBox);
</script>