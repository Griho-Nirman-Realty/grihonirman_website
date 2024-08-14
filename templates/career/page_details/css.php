<style>
    .breadcumb-wrapper {
        position: relative;
        width: 100%;
        background-size: cover !important;
        background-repeat: no-repeat;
        margin: 0;
    }
    .container2{
        margin-bottom: 10px;
        margin-top: 20px;
        padding-bottom: 5%;
        justify-items: center;
    }
    .about-img-3 img {
        border-radius: 10px;
        width: 100%;
        max-width: 100%;
        height: auto;
    }
    .sec-title{
        font-weight: lighter;
        font-size: small;
        margin-top: 10px;
    }
    
    .sec-text {
        font-size: 1rem;
        color: #333;
        text-align: justify;
    }
    .sec-text1{
        font-size: 1rem;
        color: #333;
        text-align: center;
    }
  

    .service-area-2 {
        position: relative;
        padding: 60px 20px;
        background-color: #c8ff8fde;
        justify-content: center;
        /* Added padding for better spacing on mobile */
    }

 

    .feature {
        border: 2px solid #ddd;
        background-color: #f8f8f8;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
        margin: 15px;
        /* Added margin for better spacing */
    }

    .feature:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .feature h3 {
        margin-top: 20px;
        margin-bottom: 15px;
    }

    .feature-icon {
        margin-bottom: 15px;
        background-color: green;
        padding: 10px;
        border-radius: 50%;
    }

    #featured-3 .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #featured-3 .feature {
        max-width: 350px;
     
        
    }


    .link-btn {
        display: inline-block;
        margin-top: 15px;
        text-decoration: none;
        color: #4BAF47;
        font-weight: bold;
        transition: color 0.3s;
    }

    .link-btn:hover {
        color: #388E3C;
    }

    /* Form  */
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #f8f8f8;
    }

    .title-area {
        text-align: center;
        margin-bottom: 30px;
    }

    .sub-title {
        display: block;
        font-size: 16px;
        color: black;
        margin-bottom: 2px;
    }

    .sec-title {
        font-size: 60px;
        color: black;
    }

    form.career-main {
        width: 100%;
        max-width: 1000px;
        background: #0f172a;
        padding: 30px;
        /* Increased padding for better form layout */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        color: #fff;
    }

    .career-main .form-row {
        display: contents;
    }

    .career-main .form-group {
        padding: 10px;
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .full-width {
        grid-column: span 2;
    }

    .career-main .form-group label {
        margin-bottom: 5px;
        font-weight: bold;
        color: #fff;
    }

    .career-main .form-group input,
    .form-group select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: #fff;
        background-color: #555;
    }

    .career-main .form-group input[type="file"] {
        padding: 3px;
    }

    .career-main .form-group button {
        width: 100%;
        padding: 15px;
        /* Increased button padding for better touch targets */
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .career-main .form-group button:hover {
        background-color: #218838;
    }

    @media (max-width: 600px) {
        form.career-main {
            grid-template-columns: 1fr;
            padding: 20px;
            /* Reduced padding for small screens */
        }

        .full-width {
            grid-column: span 1;
        }
    }
</style>