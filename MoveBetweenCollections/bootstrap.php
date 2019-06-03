<?php

$app->path('movebetweencollections', __DIR__);

/**
 * register routes
 */
require_once(__DIR__ . '/Controller/MoveBetweenCollections.php');
$app->bindClass('Cockpit\\Controller\\MoveBetweenCollections', 'movebetweencollections');

$this->on('collections.entry.aside', function() {
    $current_collection = explode('/', $this->module('cockpit')->app->registry['route'])[3]; // TODO
    $this->renderView("movebetweencollections:views/ce-aside.php", [
        'collections' => $this->module('collections')->collections(),
        'current_collection' => $current_collection
    ]);
});

$app('admin')->init();