<style>
    .bgEffectContainer{
        border-top:1px solid black;
        padding:20px;
    }
    .image{
            height:40vh;
            width:100%;
            color:white;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-repeat: no-repeat;
            background-size:30vw 40vh;
            background-attachment:fixed;
        }
    .details{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    /* .details>div{
        margin:20px;
    } */

    @media screen and (max-width: 992px) {
        .image{
            height:40vh;
            width:100%;
            background-size:100vw 40vh;
        }
        .details{
            font-size:12px;
        }
    }    
</style>

<div ng-repeat="parallax in parallaxProducts track by $index" class="parallelSection">
    <a href="" style="text-decoration:none;color:black">
        <div class="container-fluid row m-0 p-0 bgEffectContainer" ng-if="$index %2 == 0">
            <div class="col-lg-6 m-0 p-0 image" style="background-image:url({{url('images/logo.jpg')}});background-position:left;">
            </div>
            <div class="col-lg-6 p-0 m-0 details">
                <div>
                    <h4>Parallel Section</h4>
                    <div class="desc">
                        This is a parallel section where one part contain image and second part contain details of section.
                    </div>
                </div>
            </div> 
        </div>
    </a>
</div>
<div ng-repeat="parallax in parallaxProducts track by $index" class="parallelSection">
    <a href="" style="text-decoration:none;color:black">
        <div class="container-fluid row m-0 p-0 bgEffectContainer" ng-if="$index %2 == 0">
            <div class="col-lg-6 m-0 p-0 image" style="background-image:url({{url('images/banner.jpg')}});background-position:right;">
            </div>
            <div class="col-lg-6 p-0 m-0 details">
                <div>
                    <h4>Parallel Section</h4>
                    <div class="desc">
                        This is a parallel section where one part contain image and second part contain details of section.
                    </div>
                </div>
            </div> 
        </div>
    </a>
</div>