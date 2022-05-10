<div class="head-product-slide productList">
    <style>
        .productSlide{
            display:flex;
            flex-wrap: wrap;
            word-wrap: break-word;
            margin-top:20px;
            justify-content:center;
            position: relative;
            width:100%;
        }

        .productList>.tns-outer>.tns-controls>button{
            visibility: hidden;
        }

        .controllers{
            position: absolute;
            z-index:10;
            top:50%;
            display:flex;
            width:100%;
            font-size:20px;
        }

        .productList{
            position: relative;
        }

        .controllers>div{
            opacity:0.8;
            color:var(--forth);
            text-shadow:0px 0px 5px black;
            padding:10px;
            cursor: pointer;
            transition:all 0.2s;
        }

        .controllers>div:hover{
            transform: scale(1.3);
        }

        .controllers>.nextSlideBtn{
            position: absolute;
            left:10;
        }
        
        .controllers>.prevSlideBtn{
            position: absolute;
            right:10;
        }
    </style>

    <div class="productSlide">
        <div>
            <x-product-card/>
        </div>
        <div>
            <x-product-card/>
        </div>
        <div>
            <x-product-card/>
        </div>
        <div>
            <x-product-card/>
        </div>
        <div>
            <x-product-card/>
        </div>
        <div>
            <x-product-card/>
        </div>
        <div>
            <x-product-card/>
        </div>
        <div>
            <x-product-card/>
        </div>
    </div>
    <div class="controllers">
        <div class="nextSlideBtn" onclick="nextPrevClick('prev')">
            <i class="fa-solid fa-circle-arrow-left"></i>
        </div>

        <div class="prevSlideBtn" onclick="nextPrevClick('next')">
            <i class="fa-solid fa-circle-arrow-right"></i>
        </div>
    </div>
    <script>
        function nextPrevClick(click){
            var next = $('.productList>.tns-outer>.tns-controls>button:eq(1)');
            var prev = $('.productList>.tns-outer>.tns-controls>button:eq(0)');
            if(click == 'next'){
                $(next).click();
            }else if(click == 'prev'){
                $(prev).click();
            }

            // console.log(next);
            // console.log(prev);
        }
        $(document).ready(function(){
            var slider = tns({
                container: '.productSlide',
                items: 6,
                autoplay: true,
                controls:true,
                autoplayButtonOutput:false,
                loop:true,
                rewind:true,
            });
        });
    </script>
</div>