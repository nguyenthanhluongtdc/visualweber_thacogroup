@includeIf("theme.main::views.pages.post.slide")

<script>
    const getMediaUrl = '{{route('getMedia')}}'
</script>
@php
// $posts = get_posts_by_category($category->id ?? 16, 3);
// $postSlider = get_featured_posts_by_category($category->id ?? 19, 6);

@endphp
   <section> 
       <div class="media_content-wrapper mb-100">
           <div class="container-customize">
               <div class="media-content ">
                <div class="loading d-none">
                    <img src="{{ Theme::asset()->url('images/media/loading.gif') }}" alt="Loading">
                </div>
                   <div class="content-left render-media">
                      
                        @includeIf("theme.main::partials.templates.".$category->template)
                   </div>
                   @includeIf("theme.main::views.pages.post.post-sidebar")
               </div>
              
           </div>
       </div>
   </section>