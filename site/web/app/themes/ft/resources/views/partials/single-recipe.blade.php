<div class="recipe mt4">
  <input id="tab-one" type="radio" name="grp" checked="checked"/>
  <label class="recipe-label" for="tab-one">Ingredients</label>
  <div class="recipe-content">
    <p><?= $recipe_ingredients; ?></p>
  </div>

  <input id="tab-two" type="radio" name="grp" />
  <label class="recipe-label" for="tab-two">Tactic</label>
  <div class="recipe-content">
    <?= $recipe_tactic; ?>
  </div>

  <div class="entry-overview mt4">
    <p><?= $recipe_overview; ?></p>
  </div>
</div>

<!-- If desktop then show recipeDesktop -->
<div class="recipeDesktop">
  <div class="recipeDesktop-content">
    <p><?= $recipe_overview; ?></p>
    <h3>Ingredients</h3>
    <p><?= $recipe_ingredients; ?></p>
  </div>
  <div class="recipeDesktop-content">
    <h3>Tactic</h3>
    <?= $recipe_tactic; ?>
  </div>
</div>

<div>
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @php(the_category())
</div>

