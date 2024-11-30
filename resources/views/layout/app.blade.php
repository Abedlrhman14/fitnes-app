<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="payment.html">
    <!-- <link rel="stylesheet" href="payment.css"> -->


    <link rel="stylesheet" href="sccs/fa-solid">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: -apple-system, sans-serif;
    font-size: x-large;
    font-size: 30px;
}

:root{
    --bg-color: #000;
    --snd-bg-color: #040404;
    --text-color:#fff;
    --main-color:#45ffca;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

body{
    background: var(--bg-color);
    color: var(--text-color);
}

section{
    min-height: 100vh;
    padding: 10rem 8% 2rem;
}

/* header section code */

header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem 9%;
    background: rgba(0, 0, 0 ,0.5);
    backdrop-filter: blur(10px);
    transition: all 0,5s ease;
}

.logo{
    font-size: 3rem;
    color: var(--text-color);
    font-weight: 800;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.logo:hover{
    transform: scale(1.1);
}

span{
    color: var(--main-color);
}

.navbar{
    display: flex;
}

.navbar a{
    font-size: 1.8rem;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 4rem;
    transition: all 0.5s ease;
    border-bottom: 3px solid transparent;
}

.navbar a:hover,
.navbar a.avtive {
    color: var(--main-color);
    border-bottom: 3px solid var(--main-color);
}

.nav-btn{
    display: inline-block;
    padding: 1rem 2.8rem;
    background: transparent;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    border-radius: 1rem;
    font-size: 1.6rem;
    font-weight: 600;
    transition: all 0.5s ease;
}

.nav-btn:hover{
    background: var(--main-color);
    color: var(--text-color);
    box-shadow: 0 0 18px var(--main-color);
}

#menu-icon{
    font-size: 3.6rem;
    color: var(--main-color);
    cursor: pointer;
    display: none;
}

/* home section code */

.home{
    display: flex;
    justify-content: center;
    align-items: center;
}

.home-content h3{
    font-size: 5rem;
    font-weight: 700;
}

.home-content span{
    font-size: 4rem;
    font-weight: 550;
}

span{
    color: var(--main-color);
    font-size: 50px;
}


.home-content h1{
    font-size: 5.6rem;
    font-weight: 700;
    line-height: 1.3;
}

.home-img img{
    width: 35vw;
}

.home-img::before{
    content: 'fitnees';
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translateX(-50%);
    font-size: 20rem;
    font-weight: 400;
    line-height: 20rem;
    color: var(--text-color);
    opacity: 0.1;
    /* z-index: -1; */
}

.home-content p{
    font-size: 1.6rem;
    margin-bottom: 2rem;
    margin-top: 2rem;
}

.btn{
    display: inline-block;
    padding: 1rem 2.8rem;
    background: var(--main-color);
    border-radius: 1rem;
    box-shadow: none;
    font-size: 1.6rem;
    color: var(--bg-color);
    letter-spacing: 0.1rem;
    font-weight: 600;
    transition: 0.5s ease;
}

.btn:hover{
    color: var(--text-color);
    box-shadow: 0 0 1.6rem var(--main-color);
}

/* services section code */

.services{
    background: var(--snd-bg-color);
}

.heading{
    text-align: center;
    font-size: 6.5rem;
}

.services-content{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(350px,1fr));
    align-items: center;
    gap: 2.3rem;
    margin-top: 4.1rem;
}

.row{
    background: var(--bg-color);
    border-radius: 27px;
    border: 1px solid transparent;
    box-shadow: 0 0 5px var(--main-color);
    padding: 20px;
    transition: all 0.5s ease;
    /* display: flex;  */
}
.row img{
    /* display: flex; */
    height: auto;
    width: 100%;
    border-radius: 27px;
    margin-bottom: 1.4rem;
}

.row h4{
    font-size: 25px;
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1.4;
}

.row:hover{
    border: 1px solid var(--main-color);
    transform: translateY(-5px)scale(1.04);
    cursor: pointer;
}

/* about section code */

.about{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 3rem;
}

.about-img img{
    width: 50vw;
    border: 2px solid var(--text-color);
    border-radius: 1rem;
    transition: 0.5s ease;
}

.about-img img:hover{
    transform: scale(1.01);
    border: 2px solid var(--main-color);
}

.headingg{
    text-align: center;
    font-size: 4.5rem;
}

.about-content.headingg{
    padding: 0 3rem;
    font-size: 6rem;
}

.about-content h2{
    text-align: left;
    line-height: 1.2;
}

.about-content p{
    font-size: 1.6rem;
    margin: 2rem 0 2rem;
}

/* pricing section code */

.plans{
    background: var(--snd-bg-color);
}

.plans-content{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(300px,auto));
    align-items: center;
    gap: 2.3rem;
    margin-top: 4,2rem;
}

.box{
    padding: 30px 30px 50px 30px;
    height: 40rem;
    background: var(--bg-color);
    border-radius: 28px;
    border: 1px solid transparent;
    box-shadow: 0 0 5px var(--main-color);
    transition: all 0.5s ease;
    cursor: pointer;
}

.heading{
    margin-bottom: 40px;
}

.box h3{
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 10px;
}

.box h2{
    font-size: 43px;
    font-weight: 700;
    margin-bottom: 20px;
}

.box ul li{
    list-style: disc;
    font-size: 1.7rem;
    padding-bottom: 1.2rem;
}

.box a{
    display: inline-block;
    font-size: 22px;
    line-height: 1.2em;
    font-weight: 700;
    padding: 7px 0;
    color: var(--text-color);
    border-bottom: 2px sold #e0293f;
    transition: all 0.5s ease;
}

.box i{
    vertical-align: middle;
    font-size: 25px;
    color: var(--main-color);
    margin-left: 5px;
}

.box a:hover{
    border-bottom: 2px solid var(--main-color);
}

.box:hover{
    border: 1px solid var(--main-color);
    transform: translateY(-5px) scale(1.03);
}

/* review section code */

.review{
    background: var(--bg-color);
}

.review-box{
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.review.heading{
    margin-bottom: 5rem;
}

.review-item img{
    width: 15rem;
    border-radius: 50%;
    border: 2px solid var(--main-color);
}

.wrapper{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 3rem;
    /* background-color: #45ffca; */
}

.review-item{
    min-height: 450px;
    min-width: 280px;
    background: var(--snd-bg-color);
    border: 3px solid rgba(238, 238, 238, 0.3);
    border-radius: 2rem;
    margin: 0 2rem;
    padding: 30px 40px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    color: #fff;
    transition: 0.5s ease-in-out;
    /* background-color: #e0293f; */
}

.review-item:hover{
    border: 3px solid var(--main-color);
    transform: translateY(-5px) scale(1.03);
}

.review-item h2{
    font-size: 2.8rem;
}

.review-item p{
    font-size: 1.5rem;
    line-height: 1.3;
    text-align: center;
}

#star{
    color: gold;
    font-size: 2rem;
}

/* footer section code */

.footer{
    position: relative;
    bottom: 0;
    width: 100%;
    padding: 40px 0;
    background: var(--snd-bg-color);
}

.footer .social{
    text-align: center;
    padding-bottom: 20px;
    color: var(--main-color);
}


.footer .social a{
    font-size: 25px;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    width: 42px;
    height: 42px;
    line-height: 42px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    margin: 0 10px;
    transition: 0.5s ease-in-out;

}

.footer .social a:hover{
    transform: scale(1.2) translateY(-10px);
    background: var(--main-color);
    color: #131313;
    box-shadow: 0 0 25px var(--main-color);
}

.footer .cobyright{
    margin-top: 20px;
    text-align: center;
    font-size: 16px;
    color: var(--text-color);
}

::-webkit-scrollbar{
    width: 15px;
}

::-webkit-scrollbar-thumb{
    width: 50px;
    background: var(--main-color);
}

/* responsive design code */

@media(max-width:1200px){
    html{
        font-size: 55%;
    }
    span{
        font-size: 35px;
    }
}


@media(max-width:991px){
    #menu-icon{
        display: block;
    }

    .navbar{
        position: absolute;
        top: 100%;
        right: -100%;
        width: 255px;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background: var(--bg-color);
        transition: all 0.5s ease;
    }

    .navbar a{
        display: block;
        padding: 17px;
        font-size: 22px;
    }

    .navbar.active{
        right: 0;
    }

    header{
        padding: 2rem 3%;
    }

    section{
        padding: 10rem 3%;
    }

    .services{
        padding: 7rem;
    }

    .about-content h2{
        margin-top: 2rem;
        text-align: center;
        font-size: 5rem;
    }

    .review .wrapper{
        grid-template-columns: repeat(1,1fr);
    }


    .footer{
        padding: 40px 0;
    }


}


@media(max-width:786px){
    .home{
        flex-direction: column;
    }

    .home-content h3{
        font-size: 4.5rem;
        margin-top: 1.5rem;
    }

    .home-content h1{
        font-size: 5rem;
        margin-top: 1.5rem;
    }

    .home-content{
        order: 2;
    }

    .home-img img{
        width: 70vw;
        margin-top: 4rem;
    }

    .about{
        flex-direction: column;
    }

    .about-img img{
        width: 70vw;
        margin-top: 4rem;
    }

    .about-content{
        text-align: center;
    }

    .about-content h2{
        text-align: center;
    }

    .services h2{
        margin-bottom: 3rem;
    }
}

@media(max-width:617px){
    .home-img img{
        width: 80vw;
        margin-top: 8rem;
    }

    .about-img img{
        width: 70vw;
        margin-top: 4rem;
    }
}

@media(max-width:450px){
    html{
        font-size: 50%;
    }
}


</style>


    <title>Document</title>
</head>
<body>
    <header>
        <a href="#" class="logo">A M R<span> Fitness</span></a>
        <div class='bx bx-menu' id="menu-icon"></div>
        <ul class="navbar" id="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#pricing">pricing</a></li>
            <li><a href="#review">review</a></li>
            <li><a href="payment.html" onclick="">payment</a></li>

        </ul>

        <div class="top-btn">
            <a href="{{route('login')}}" class="nav-btn">join us</a>
        </div>
    </header>

    <!-- home section code -->

    <section class="home" id="home">
        <div class="home-content" data-aos="zoom-in">
            <h3>build your</h3>
            <h1>dream shape</h1>
            <h3><span class="multiple-text">bodybuilding</span></h3>
            <p>"Every workout is a step toward the best version of yourself.
                In this journey, consistency is your greatest ally.
                Let’s unlock your potential together!"</p>
            <a href="{{route('login')}}" class="btn">join us</a>
        </div>
        <div class="home-img">
            <img src="https://wallpaperaccess.com/full/834264.jpg">
        </div>
    </section>

    <!-- service section code -->

    <section class="services" id="services">
        <h2 class="heading"  data-aos="zoom-in-down">our <span> services</span></h2>
        <div class="services-content" data-aos="zoom-in-up">
            <div class="row">
                <img src="img/image1 p f .png">
                <h4>physical fitness</h4>
            </div>
            <div class="row">
                <img src="img/weighy fit.png">
                <h4>wegiht lifting</h4>
            </div>
            <div class="row">
                <img src="img/cardio.png">
                <h4>cardio</h4>
            </div>
            <div class="row">
                <img src="img/fat lose.png">
                <h4>lose fat</h4>
            </div>
            <div class="row">
                <img src="img/wigh gain.png">
                <h4>workout plan</h4>
            </div>
            <div class="row">
                <img src="img/s tra.png">
                <h4>nutiration plan</h4>
            </div>
        </div>
    </section>

    <!-- about section code -->

    <section class="about" id="about">
        <div class="about-img" data-aos="zoom-in-down">
            <img src="img/wigh gain.png">
        </div>

        <div class="about-content" data-aos="zoom-in-up">
            <h2 class="headingg">why choose us ?</h2>
            <!-- <p> our diverse membership base create healhy life style</p> -->
            <p>We’re not just another online training platform – we’re your dedicated partners in growth. Our approach blends cutting-edge techniques with personalized attention, ensuring every session is tailored to your unique goals and pace. Whether you're just starting out or refining your skills, we provide a supportive, interactive environment that goes beyond traditional learning. With expert guidance, flexible schedules, and an engaging community, we don’t just train bodies or minds – we transform lives. When you choose us, you’re choosing a journey to the best version of yourself.</p>
            <a href="#" class="btn">book a free class</a>
        </div>
    </section>


<!-- pricing section code -->

<section class="pricing" id="pricing">
    <h2 class="heading" data-aos="zoom-in-down">Our <span> plans</span></h2>
    <div class="plans-content"data-aos="zoom-in-up">
        <div class="box">
            <h3>Basic</h3>
            <h2><span>$100/month</span></h2>
            <ul>
                <li>Customized workout plan</li>
                <li>Customized Advanced plan</li>
                <li>Customized cardio routine</li>

            </ul>
            <a href="#"> Join now<i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="box">
            <h3>Pro</h3>
            <h2><span>$150/month</span></h2>
            <ul>
                <li>Customized workout plan</li>
                <li>Customized Advanced plan</li>
                <li>Customized cardio routine</li>
                <li>Weekly follow up via the coach (no team)</li>
            </ul>
            <a href="#">
                Join now
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="box">
            <h3>premium</h3>
            <h2><span>$300/month</span></h2>
            <ul>
                <li>Customized workout plan</li>
                <li>Customized Advanced plan</li>
                <li>Customized cardio routine</li>
                <li>Video Call to assist the clients performance</li>
                <li>Higher rate for response on Whatsapp</li>

            </ul>
            <a href="#">
                Join now
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- review section code -->
<section class="review" id="review">
    <div class="review-box">
        <h2 class="heading" data-aos="zoom-in-down">Clint <span> Review</span></h2>
        <div class="wrapper" data-aos="zoom-in-up">
            <div class="review-item">
                <img src="img/person03.png">
                <h2>darlin</h2>
                <div class="rating">
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>

                </div>
                <p>Training with islam has been life-changing. Not only did I achieve my fitness goals, but I also gained confidence and a new outlook on health. Every session is challenging yet fun, and islam always knows how to push me just the right amount. Their personalized approach made me feel like I was truly cared for, and I’ve never felt stronger or more motivated. If you’re serious about transforming your body and mindset, islam is the one to trust!" </p>
            </div>
            <div class="review-item">
                <img src="img/ppp.jpg">
                <h2>jasmine</h2>
                <div class="rating">
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                </div>
                <p>"Since I started training with islam, my life has completely changed. I used to struggle with staying consistent and following a healthy lifestyle, but islam made everything feel easier and more enjoyable. Their positive and motivating approach had me looking forward to every session, and with each workout, I felt closer to my goals. Now, I’m fitter, more confident, and I wouldn't have reached this level without their guidance and expertise. If you're looking for guaranteed results, [Trainer's Name] is the perfect choice."</p>
            </div>
            <div class="review-item">
                <img src="img/person02.png">
                <h2>marly</h2>
                <div class="rating">
                    <i class='bx bx-star' id="star"></i>
                    <i class='bx bx-star' id="star"></i>
                    <i class='bx bx-star' id="star"></i>
                    <i class='bx bx-star' id="star"></i>
                    <i class='bx bx-star' id="star"></i>
                </div>
                <p>"Working with islam has been an incredible experience. Their personalized approach and constant motivation helped me achieve results I never thought possible. I feel stronger, more confident, and healthier than ever!"</p>
            </div>
        </div>
    </div>
</section>

<!-- foter section code -->

<footer class="footer">
    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-linkedin-square'></i></a>
    </div>
    <p class="cobyright">
        &copy; Amr fitnees 2024 - all right reserved
    </p>
</footer>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
         AOS.init({
            offset: 300,
            duration: 1400
         });
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="index.js"></script>
</body>
</html>
