<div class="head-banner">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <style>
        .slide{
            text-align: center;
        }

        .slide>img{
            height:400px;
            width:80vw;
        }
        .tns-outer{
            padding:0px;
            margin:0px;
            position: relative;
        }
        .tns-nav{
            position: absolute;
            z-index:10;
            top:90%;
            left:48%;
        }
        .tns-nav>button{
            padding:4px;
            border:none;
            outline:none;
            background-color:var(--third);
            opacity:0.5;
            margin:1px;
            border-radius:50%;
        }
        .tns-nav>.tns-nav-active{
            opacity:1;
            background-color: var(--first);
        }

        @media screen and (max-width:1030px) {
            .slide>img{
                height:auto;
                width:100vw;
            }
        }

        @media screen and (max-width:830px) {
            .tns-nav{
                top:85%;
            }
        }

        @media screen and (max-width:600px){
            .tns-nav{
                top:80%;
            }
        }
    </style>

    <div class="bannerSlide">
        <div class="slide">
            <img src="{{url('images/logo.jpg')}}" alt="Banner">
        </div>
        <div class="slide">
            <img src="{{url('images/banner.jpg')}}" alt="Banner">
        </div>
        <div class="slide">
            <img src="{{url('images/logo.jpg')}}" alt="Banner">
        </div>
        <div class="slide">
            <img src="{{url('images/banner.jpg')}}" alt="Banner">
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script>
        $(document).ready(function(){
            var slider = tns({
                container: '.bannerSlide',
                items: 1,
                autoplay: true,
                controls:false,
                autoplayButtonOutput:false
            });
        });
    </script>
</div>