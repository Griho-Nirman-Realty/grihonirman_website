<style>
    .breadcumb-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        background-size: cover !important;
    }
    /* .container1{
        background-color:;
    } */

    * {
        box-sizing: border-box;
    }
.breadcumb-title{
    font-size: 80px;
}
    body {
        background-color: #c8ff8fde ;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        background-color: #fff;
        box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
        width: 94%;
        margin: 0 auto;
        padding: 10px;
    }

    .gallery-item {
        flex-basis: 32.7%;
        margin-bottom: 6px;
        opacity: .85;
        cursor: pointer;
    }

    .gallery-item:hover {
        opacity: 1;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        aspect-ratio: 1;
        object-fit: cover;
    }

    .lightbox {
        position: fixed;
        display: none;
        background-color: rgba(0, 0, 0, 0.9);
        width: 100%;
        height: 100%;
        overflow: auto;
        top: 0;
        left: 0;
        z-index: 10000;
    }

    .lightbox-content {
        position: relative;
        width: 70%;
        height: 80%;
        margin: auto;
        margin-top: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .lightbox-content img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 5px;
        border: 5px solid white;
    }

    .lightbox-prev,
    .lightbox-next {
        position: absolute;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 12px;
        top: 50%;
        cursor: pointer;
        font-size: 24px;
        user-select: none;
    }

    .lightbox-prev {
        left: 0;
        transform: translateY(-50%);
    }

    .lightbox-next {
        right: 0;
        transform: translateY(-50%);
    }

    .lightbox-prev:hover,
    .lightbox-next:hover {
        background-color: rgba(0, 0, 0, 1);
    }

    @media (max-width: 767px) {
        .gallery-container {
            width: 100%;
        }

        .gallery-item {
            flex-basis: 49.80%;
            margin-bottom: 3px;
        }

        .lightbox-content {
            width: 85%;
            height: 70%;
            margin-top: 15%;
        }
    }

    @media (max-width: 480px) {
        .gallery-item {
            flex-basis: 100%;
            margin-bottom: 1px;
        }

        .lightbox-content {
            width: 90%;
            height: 75%;
            margin-top: 20%;
        }
    }
</style>