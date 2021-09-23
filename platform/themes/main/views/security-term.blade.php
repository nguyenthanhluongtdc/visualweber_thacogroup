<section class="security mb-100">
    <div class="container-customize">
        <h1 class="security-title p-5">{{$page->name}}</h1>
        <div class="security-content">
        {!!$page->content!!}
        </div>
    </div>
</section>
<style>
    .list-social-sidebar {
    display: none;
}

.header {
    background-color: white !important;
    box-shadow: 0 5px 8px -5px #555;
    
    
}
.navbar .navbar-nav .nav-item a {
        color: rgb(38, 38, 38)!important;
    }
.header-top {

        background-color: #F6F6F7 !important;  
    }
    .header .header-top .list-item-top .item-top__link{
        color: rgb(38, 38, 38)!important;
    }
    .header .header-top::after{
        visibility: visible;
        opacity: 1;
    }
    
    .logo_link-white {
            display: none!important;
        }
        .logo_link-blue {
            display: block!important;
        }

</style>




