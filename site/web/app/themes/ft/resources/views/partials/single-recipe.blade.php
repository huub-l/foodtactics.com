<div class="fl w-40 pr4">
  <div class="entry-ingredients mt4">
    <h3>Ingredients</h3>
    <p><?= $recipe_ingredients; ?></p>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @php(the_category())
  </footer>
</div>
<div class="fl w-60 pl4">
  <div class="entry-tactic mt4">
    <h3>Tactic</h3>
    <p><?= $recipe_tactic; ?></p>
  </div>
</div>
<div class="entry-overview mt4">
  <p><?= $recipe_overview; ?></p>
</div>
