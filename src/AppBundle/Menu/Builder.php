<?php
/**
 * Created by PhpStorm.
 * User: vvs
 * Date: 13.12.17
 * Time: 16:28
 */

namespace AppBundle\Menu;


use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory, $option)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class','nav nav-tabs');
        $menu->addChild('Home',['route' => 'homepage']);
        $menu->addChild('Offer',['route' => 'offer']);

        return $menu;
    }
}