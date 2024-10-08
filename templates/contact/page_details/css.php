<style>
    .breadcumb-wrapper {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        /* height: 100%; */
        background-size: cover !important;
        background-position: center;
        background-repeat: no-repeat;
    }



    .contact-info_text {

        color: black
    }

    .contact-area {
        padding: 30px 0px;
        background-color: var(--theme-back-color);
    }

    .contact-area .contact-info {
        display: flex;
        gap: 20px;
        border-radius: 0px;
        padding: 17px 28px;
        box-shadow: 0px 0px 2px #4bad47;
        border-bottom: 2px solid #4bad47;
        margin-top: 10px;
        border-radius: 5px;
        background-color: #fff;
    }

    .contact-area .contact-info-img img {
        border-radius: 5px;
    }



    @media (max-width: 767px) {
        .contact-area .contact-info-img {
            margin-top: 10px;
        }
    }



    .contact-quick-con .form-control,
    .contact-quick-con .form-select {
        border: 1px solid #1b9603;
        border-radius: 5px;
        height: auto;
        line-height: 1;
        padding: 15px 10px;
        color: #000;

    }

    .contact-quick-con .form-control::placeholder {
        color: #000;
    }

    .contact-quick-con .form-control:focus {
        box-shadow: #000 0px 0px 2px;
    }

    .contact-quick-con .title-area {
        margin-bottom: 15px;
    }
    .contact-quick-con .sec-title {
        font-size: 17px;
        margin-bottom: 0px;
    }

    @media (max-width: 575px) {
        .contact-quick-con{
            margin-top: 0px !important;
        }
        .contact-quick-con .contact-form-wrap {
            margin-top: 10px;
            width: 100%;
        }

        .contact-quick-con .sec-title {
            font-size: 15px;
        }
    }
</style>