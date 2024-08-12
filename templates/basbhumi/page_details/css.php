<style>
/* */

@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap');

.breadcumb-wrapper {
    background-size: cover !important;
    background-position: center;
    background-repeat: no-repeat;
    /* width: 100%;
    height: auto;
    padding: 20px 0; */
}

@media (min-width: 992px) {
    .breadcumb-wrapper {
        background-position: right;
    }
}

/*Overview area css */ 
.basbhumi {
   
   background-color: #c8ff8fde !important;
}

.overflow-hidden {
    padding: 2rem; 
    
}

/* Image styling */
.about-img-3 img {
    border-radius: 10px; 
    max-width: 100%; 
    height: auto; 
}

/* Content wrap styling */
.about-content-wrap {
    padding: 1rem; 
}

/* Title area styling */
.title-area {
    margin-bottom: 1.5rem; 
}

/* Button styling */
.btn-wrap {
    display: flex;
    flex-direction: row;
    gap: 1rem; 
    align-items: center; 
    margin-top: 2rem; 
}

.btn {
    padding: 0.75rem 1.5rem; 
    border-radius: 8px;
    text-align: center; 
    font-size: 1rem; 
    font-weight: bold; 
}

@media (max-width: 768px) {
    .btn-wrap {
        flex-direction: column;
        margin: 2 auto; /* Center buttons horizontally on mobile */
    }

    .about-content-wrap {
        text-align: center; 
    }
}


/* Counter and site plan styling */
/* Counter Area */
.counter-area-2 {
    padding: 60px 0;
    background-size: cover;
    background-position: center;
}

.counter-card {
    border-radius: 10px;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.counter-card:hover {
    transform: translateY(-10px);
}

.counter-card-icon svg {
    width: 40px;
    height: 40px;
    fill: #333;
}

.counter-card_number {
    font-size: 2rem;
    font-weight: bold;
    margin: 10px 0;
}

.counter-card_text {
    font-size: 1rem;
}

/* Why Area */
.why-area-2 {
    padding: 60px 0;
}

.why-img-wrap {
    position: relative;
}

.why-bg-img-1 {
    border-radius: 10px;
    width: 100%;
    height: auto;
}

.why-wrap {
    padding: 20px;
}

.title-area {
    margin-bottom: 30px;
}

.sub-title {
    font-size: 1.25rem;
    color: #555;
}

.sec-text {
    font-size: 1rem;
    color: #333;
}

.list-wrapper {
    margin-top: 20px;
}

.list-container {
    list-style: none;
    padding: 0;
}

.list-container li {
    margin-bottom: 10px;
    font-size: 1rem;
    color: #333;
}

.btn.style4 {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    background-color: #28a745;
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.btn.style4:hover {
    background-color: #218838;
}

.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    border-radius: 10px;
}

.close {
    position: absolute;
    top: 20px;
    right: 25px;
    color: #fff;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .counter-card {
        padding: 15px;
    }

    .counter-card_number {
        font-size: 1.5rem;
    }

    .sec-text {
        font-size: 0.875rem;
    }

    .btn.style4 {
        font-size: 0.875rem;
    }
}

.why-bg-img-1 {
    background-size: cover !important;
    height: auto;
    cursor: pointer;
}

.container3 {
    margin-bottom: 10px;
    padding-top: 5%;
    padding-bottom: 5%;
    justify-items: center;

}



.list-container {
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
    padding: 0;
    margin: 0;
    color: black;
}

.sec-text {
    color: black;
}

.list-container li {
    width: 45%;
    margin: 0 2.5% 10px 0;
    box-sizing: border-box;
}

.list-container li:nth-child(2n) {
    margin-right: 0;
}


.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.9);
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

#caption,
#caption1 {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}



@media only screen and (max-width: 700px) {
    .modal-content {
        width: 100%;
        justify-content: center;
    }
}



/* General container styling */



.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    margin-top:20px;
    margin-bottom: 50px;
    padding: auto;
}

/* Card styling */
.card {
    overflow: visible;
    width: 190px;
    height: 254px;
    margin: 10px;
    background: linear-gradient(75.7deg, rgb(34, 126, 34) 3.8%, rgb(99, 162, 17) 87.1%);
}

.content {
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 300ms;
    box-shadow: 0px 0px 10px 1px #000000ee;
    border-radius: 5px;
}

.front,
.back {
    background: linear-gradient(75.7deg, rgb(34, 126, 34) 3.8%, rgb(99, 162, 17) 87.1%);
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    border-radius: 5px;
    overflow: hidden;
}

.back {
    width: 100%;
    height: 100%;
    justify-content: center;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.back::before {
    position: absolute;
    content: ' ';
    display: block;
    width: 160px;
    height: 160%;
    background: linear-gradient(90deg, transparent, #ff9966, #ff9966, #ff9966, #ff9966, transparent);
    animation: rotation_481 5000ms infinite linear;
}

.back-content {
    position: absolute;
    width: 99%;
    height: 99%;
    background: linear-gradient(75.7deg, rgb(34, 126, 34) 3.8%, rgb(99, 162, 17) 87.1%);
    border-radius: 5px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

.card:hover .content {
    transform: rotateY(180deg);
}

@keyframes rotation_481 {
    0% {
        transform: rotateZ(0deg);
    }
    100% {
        transform: rotateZ(360deg);
    }
}

.front {
    transform: rotateY(180deg);
    color: white;
}

.front .front-content {
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.front-content .badge {
    background-color: #00000055;
    padding: 2px 10px;
    border-radius: 10px;
    backdrop-filter: blur(2px);
    width: fit-content;
}

.description {
    box-shadow: 0px 0px 10px 5px #00000088;
    width: 100%;
    padding: 10px;
    background-color: #00000099;
    backdrop-filter: blur(5px);
    border-radius: 5px;
}

.title {
    color: white;
    font-size: 13px;
    max-width: 100%;
    display: flex;
    justify-content: space-between;
}

.title p {
    width: 50%;
}

.card-footer {
    color: #ffffff88;
    margin-top: 5px;
    font-size: 9px;
}

.front .img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.circle {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background-color: #ffbb66;
    position: relative;
    filter: blur(15px);
    animation: floating 2600ms infinite linear;
}

#bottom {
    background-color: #ff8866;
    left: 50px;
    top: 0px;
    width: 150px;
    height: 150px;
    animation-delay: -800ms;
}

#right {
    background-color: #3a640a9f;
    left: 160px;
    top: -80px;
    width: 30px;
    height: 30px;
    animation-delay: -1800ms;
}

@keyframes floating {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(10px);
    }
    100% {
        transform: translateY(0px);
    }
}

/* Responsive styling */
@media (max-width: 768px) {
    .card-container {
        flex-direction: column;
        align-items: center;
        
    }
    .card {
        width: 100%; /* Increase the width to 100% */
      
    }
  
}

.why-area-2 .why-wrap {
    padding: 0px;
   
}
.why-area-2 .why-wrap a{
    width: 250px;
    transition: all 500ms ease-out;
}
.why-area-2 .why-wrap a:hover{
    width: 100%;
    transition: all 500ms ease;
}

.sub-title{
    margin: 20px 0px 0px;
}
.sec-text{
    margin: 10px 0px 0px;
}
</style>