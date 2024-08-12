<style>
 

    .breadcumb-title {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .breadcumb-menu {
        list-style: none;
        padding: 0;
    }

    .breadcumb-menu li {
        display: inline;
        margin: 0 5px;
    }

    .breadcumb-menu li a {
        color: #fff;
        text-decoration: none;
    }

    .breadcumb-menu li.active {
        font-weight: bold;
    }

    /* Service Area */
    .service-area-3 {
        padding: 60px 0;
        background: linear-gradient(to bottom, #000000f5, #621414a3);
    }

    .service-card {
        display: flex;
        flex-direction: column;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        height: 100%;
    
        min-height: 300px;
        
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        
        box-sizing: border-box;
        
    }

    .service-card-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    .service-card_content {
        padding: 20px;
        flex: 1;
    }

    .service-card_title a {
        font-size: 1.25rem;
        color: #333;
        text-decoration: none;
    }

    .service-card_text {
        font-size: 1rem;
        color: #666;
        margin: 10px 0;
    }

    .link-btn {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 4px;
        /* background-color: #007bff; */
        color: black;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .link-btn:hover {
        background-color: green;
        transform: scale(1.05);
    }

    /* Responsive Styles */
 

    @media (max-width: 767px) {
        .service-area-3 .container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin: 0 auto;
            /* Add gap between cards */
        }

        .service-card {
            flex: 1 1 100%;
            /* Ensure each card takes full width on small screens */
            box-sizing: border-box;
            margin: 0 auto;
            /* Include padding and border in the element’s total width */
        }
    }
</style>