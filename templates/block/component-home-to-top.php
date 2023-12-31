<div class="top-down">
    <div class="heart">
        <span>
            <a target="_blank" href="http://m.me/100629231775942">
                <i class="fab fa-facebook-messenger"></i>
            </a>
        </span>
    </div>
    <div class="heart">
        <span>
            <a class="zalo" target="_blank" href="https://zalo.me/091.553.1379" style="font-size: 14px;">
                Zalo
            </a>
        </span>
    </div>
    <div class="heart">
        <span>
            <a href="Tel: 039.954.9903"> <i class="fal fa-phone"></i></a>
            <p></p>
        </span>
    </div>

    <div id="bottom_to_top" onclick="topFunction()">
        <div class="h-100 d-flex justify-content-center align-items-center">
            <i class="fal fa-chevron-up"></i>
        </div>
    </div>
</div>

<script>
    //bottom to top
    window.onscroll = function() {
        topFunction();
    };

    var toTop = document.getElementById("bottom_to_top");



    function topFunction() {
        if (window.scrollY >= 300) {
            if (window.innerWidth >= 1200) {
                // Laptop or larger screen
                toTop.style.bottom = "20px";
            } else {
                // Mobile or smaller screen
                toTop.style.bottom = "70px";
            }
        } else {
            toTop.style.bottom = "-100px";
        }
    }

    toTop.addEventListener('click', () => {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    })
</script>

<style>
    .top-down {
        position: fixed;
        bottom: 60px;
        right: 30px;
        z-index: 9;
    }


    @keyframes beat {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }
    }

    .heart {
        position: relative;
        width: 40px;
        height: 40px;
        background: linear-gradient(to bottom, #3193F6, #c74449);
        margin-bottom: 25px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
        box-shadow: 0px 7px 20px rgba(0, 0, 0, .2);
        animation: beat 1.5s ease 0s infinite;
    }

    i {
        text-decoration: none;
        list-style: none;

    }

    a {
        color: #fff;
        text-decoration: none;
    }

    a:hover {
        color: #fff;
        text-decoration: none;
    }

    #bottom_to_top {
        z-index: 10;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: transparent;
        border: 2px solid #3193F6;
        color: #3193F6;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        bottom: -100px;
        right: 30px;
        transition: 0.5s ease;
    }

    @media(max-width: 576px) {
        #bottom_to_top {
            right: 15px !important;
            width: 35px !important;
            height: 35px !important;
        }
    }

    #bottom_to_top:hover {
        background: #3193F6;
        border: 2px solid #3193F6;
        color: white;
        cursor: pointer;
    }


    .heart:before {
        content: "";
        position: absolute;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #c1272d;
        opacity: .4;
        border-radius: inherit;
    }

    .heart:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #3193F6;
        opacity: .4;
        border-radius: inherit;
    }

    @keyframes beat-before {
        0% {
            transform: scale(1);
        }

        60% {
            transform: scale(1.2);
        }
    }

    .heart:before {
        z-index: -2;
        animation: beat-before 1.5s ease 0.1s infinite alternate;
    }

    @keyframes beat-after {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.8);
        }
    }

    .heart:after {
        z-index: -1;
        animation: beat-after 1.5s ease 0.1s infinite alternate;
    }

    @media screen and (max-width: 990px) {
        .top-down {
            bottom: 100px;
            right: 30px;
        }
    }

    @media screen and (max-width: 420px) {
        .top-down {
            bottom: 95px;
            right: 12px;
        }
    }
</style>