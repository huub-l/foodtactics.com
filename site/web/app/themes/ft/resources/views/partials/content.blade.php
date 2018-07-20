<article @php(post_class())>
  <header class="tc mb5">
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
  @if (has_post_thumbnail())
  <div class="entry-image mt4">
    <a href="{{ get_permalink() }}">{!! the_post_thumbnail('large') !!}</a>
  </div>
  @endif
</article>
