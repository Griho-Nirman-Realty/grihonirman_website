<style>
    .sec-title {
        font-size: 22px;
    }

    .project-card:hover .project-card-details {
        background-color: #fff6f6d6;
        visibility: visible;
        width: 86%;
    }

    .project-card-img {
        height: 250px;
        transition: all 1s;
    }
    .project-card:hover .project-card-img{
        filter: saturate(8.5);
        transition: all 1s;
    }

    .project-area-2 {
        background-color: #c8ff8fde;
        padding: 35px 0px;
    }

    .project-area-2 .project-card {
        background-color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        margin-top: 15px;
    }

    .project-area-2 .sec-title {
        padding-left: 10px;
        margin: 0;
    }

    .project-card .project-card-details {
        background: var(--white-color);
        position: absolute;
        bottom: 58px;
        border-left: 5px solid var(--theme-color);
        padding: 25px 30px;
        border-radius: 0 15px 15px 0;
        opacity: 0;
        visibility: hidden;
        transition: 0.4s;
        width: 100%;
    }
</style>