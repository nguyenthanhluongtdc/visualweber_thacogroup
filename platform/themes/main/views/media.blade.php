
<script>
    window.trans = {};
</script>

@if(!blank($category) && isset($category))
    <div id="app">
        @includeIf("theme.main::views.breadcrumb")
        <page-media category-id="{{$category->id}}"> </page-media>
    </div>
    <script src="themes/main/js/app.js"></script>
@endif

<style>
    .ps__thumb-y {
        background-color: #fff !important;
        width: 2px;
        border-radius:unset; 
    }

    .ps__rail-y {
        background-color: gray !important;
        width: 4px;
    }

    .list-social-sidebar {
        display: none;
    }

    .page-content {
        padding-top: 7%;
       
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


