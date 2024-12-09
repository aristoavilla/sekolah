<?php

use App\Models\Post;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('index', function (BreadcrumbTrail $trail): void {
    $trail->push('Home', route('index'));
});

Breadcrumbs::for('show', function (BreadcrumbTrail $trail, Post $post): void {
    $trail->parent('index');

    $trail->push($post->slug, route('index', $post));
});

Breadcrumbs::for('principals.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('index');

    $trail->push('Principals', route('principals.index'));
});