<article @php(post_class())>
  <header class="tc">
    <h1 class="entry-title">{{ get_the_title() }}</h1>
  </header>
  @if (has_post_thumbnail())
  <div class="entry-image mt4">
    {!! the_post_thumbnail('large') !!}
  </div>
  @endif
  <div class="entry-content mt4">
    @php(the_content())
  </div>
    @include('partials/single-image')
    @include('partials/single-recipe')
</article>
