<style>
    body{
        background:var(--third);
    }

    .card{
        position: relative;
        border-radius:10px;
        min-width:14vw;
        min-height:43vh;
        overflow: hidden;
        box-shadow:0px 0px 10px;
        margin:10px;
    }

    .card>.image{
        position: absolute;
        height:100%;
        width:100%;
        border-radius:10px;
        background:var(--second);
    }

    .card>.image>img{
        width:100%;
        height:100%;
    }

    .card>.detail{
        position: absolute;
        height:100%;
        width:100%;
        top:87%;
        border-radius:10px;
        background:var(--first);
        opacity:0.95;
        box-shadow:0px 0px 5px;
        transition:all 0.2s ease-in-out;
    }

    .card:hover > .detail{
        top:40%;
    }

    .card>.detail>div{
        font-size:12px;
        margin:5px 20px;
        color:var(--forth);
    }

    .card>.detail>div>i{
        margin:2px 2px 0px 5px;
    }

    .card>.detail>.name{
        margin:10px 20px;
        margin-bottom:25px;
        font-size:16px;
        font-weight:700;
    }
   
    .card>.detail>.description{
        margin:5px 20px;
        font-size:12px;
        opacity:0.7;
    }

    .card>.detail>.mrp{
        /* margin-right:5px; */
        display:inline-flex;
    }

    .card>.detail>.save{
        /* margin-left:0px; */
        text-decoration:line-through;
        display:inline-flex;
    }

    .card>.detail>.price{
        font-size:16px;
        font-weight:700;
        display:block;
    }

</style>
<div class="card">
    <div class="image">
        <img src="{{url('images/bookCover.jpg')}}" alt="book cover">
    </div>
    <div class="detail">
        <div class="name">
            Book Store
        </div>
        <div class="description">
            The Hollow Woods, Story Telling Card Game, First Edition.
        </div>
        <div class="mrp">
            Mrp : <i class="fa-solid fa-indian-rupee-sign"></i> 100
        </div>
        <div class="save">
            Save : <i class="fa-solid fa-indian-rupee-sign"></i> 20
        </div>
        <div class="price"> 
            Price : <i class="fa-solid fa-indian-rupee-sign"></i> 80
        </div>
    </div>
</div>