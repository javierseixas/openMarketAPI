<?php


// Creating a fixture set with own configuration,
$set = new h4cc\AliceFixturesBundle\Fixtures\FixtureSet(array(
    'locale' => 'es_ES',
    'seed' => 42,
    'do_drop' => true,
    'do_persist' => true,
    'order' => 5
));

$set->addFile(__DIR__.'/../Resources/config/fixtures/Users.yml', 'yaml');

return $set;