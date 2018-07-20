<?php // @ app/controllers/single.php

namespace App;

use Sober\Controller\Controller;

class Single extends Controller
{
    /**
     * Return recipe fields from Advanced Custom Fields
     *
     * @return array
     */

    public function recipe_overview() {
        return get_field('recipe_overview');
    }

    public function recipe_ingredients() {
        return get_field('recipe_ingredients');
    }

    public function recipe_tactic() {
        return get_field('recipe_tactic');
    }

    /* Return image fields from Advanced Custom Fields */

    public function post_image_1() {
        return get_field('post_image_1');
    }

    public function post_image_2() {
        return get_field('post_image_2');
    }

    public function post_image_3() {
        return get_field('post_image_3');
    }

    public function post_image_4() {
        return get_field('post_image_4');
    }

    public function post_image_5() {
        return get_field('post_image_5');
    }

    public function post_image_6() {
        return get_field('post_image_6');
    }

}
