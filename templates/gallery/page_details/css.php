<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .breadcumb-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        background-size: cover !important;
    }

    .gallery-container {
        margin-top: 20px;
        margin-bottom: 40px;
    }

    .row1>.column {
        padding: 0 8px;
    }

    .row1:after {
        content: "";
        display: table;
        clear: both;
    }

    .column {
        float: left;
        width: 100%;
        margin-bottom: 16px;
    }

    @media (min-width: 768px) {
        .column {
            width: 50%;
        }
    }

    @media (min-width: 992px) {
        .column {
            width: 25%;
        }
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        overflow: hidden;
        cursor: default;
    }

    .modal-content {
        position: relative;
        margin: auto;
        padding: 0;
        width: 90%;
        height: 90%;
        max-width: 100%;
        max-height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        pointer-events: none;
    }

    .modal-content img {
        width: 100%;
        height: auto;
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        pointer-events: auto;
    }

    .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        pointer-events: auto;
        background-color: black;
        padding: 10px;
        border-radius: 50%;
    }

    .close:hover,
    .close:focus {
        color: #ccc;
        text-decoration: none;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        user-select: none;
        -webkit-user-select: none;
        pointer-events: auto;
        z-index: 1001;
        background-color: black;
        border-radius: 50%;
    }

    .prev {
        left: 10px;
        transform: translateY(-50%);
    }

    .next {
        right: 10px;
        transform: translateY(-50%);
    }

    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        pointer-events: none;
    }

    .caption-container {
        text-align: center;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 8px 16px;
        color: white;
        width: 100%;
        position: absolute;
        bottom: 0;
        pointer-events: none;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    /* Mobile-specific styles */
    @media (max-width: 767px) {
        .modal-content {
            width: 100%;
            height: 100%;
        }

        .close {
            top: 5px;
            right: 10px;
            font-size: 30px;
            padding: 5px;
        }

        .prev,
        .next {
            padding: 10px;
            font-size: 18px;
        }
    }
</style>