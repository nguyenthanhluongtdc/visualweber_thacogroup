@includeIf('theme.main::views.components.banner-qhcd')
<script>
    const getShareholderUrl = "{{route('api-investor.sharehoder')}}";
</script>
<!--breadcrumb-->
<!---end breadcrumb---->

<section class="media-newspapers mb-60">
    <div class="media-newspapers-wrapper">
        <div class="container-customize"> 
            <div class="shareholder-infomation mb-100">
                <div class="shareholder-infomation_left render-html">
                    @includeIf("theme.main::partials.templates.".$category->template)
                </div>

                {!!
                    Menu::renderMenuLocation('menu-investor-relations', [
                        'options' => [$category->id],
                        'theme' => true,
                        'view' => 'menu-investor-relations'
                    ])
                !!}

            </div>
        </div>
    </div>
</section>

<script>
    let year = "{{Request::get('year')}}";
    $('select > option').each(function() {
        if($(this).val()==year) {
            $(this).attr('selected', true);
        }
    })
</script>