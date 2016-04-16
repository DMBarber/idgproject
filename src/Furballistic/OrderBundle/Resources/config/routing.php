<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('furballistic_order_homepage', new Route('/hello/{name}', array(
    '_controller' => 'FurballisticOrderBundle:Default:index',
)));

return $collection;
