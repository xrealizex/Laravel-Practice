<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > レシピ一覧
Breadcrumbs::for('index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('レシピ一覧', route('recipe.index'));
});

Breadcrumbs::for('show', function (BreadcrumbTrail $trail, $recipe) {
    $trail->parent('index');
    $trail->push($recipe['title'], route('recipe.show', $recipe['id']));
});
