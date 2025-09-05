<?php

use Sunlight\User;														// odkazujeme na třídu user z důvodu acces práv

return function (array $args) {
    $args['admin']->modules['example-modul'] = [						// example-modul se objeví v adresním řádku prohlížeče
        'title' => _lang('modul.module.title'),							// Název menu
        'access' => User::hasPrivilege('adminart'),						// přístupová práva
        'menu' => true,													// True znamená, že se menu objeví, false ho nezobrazí
        'menu_order' => 25,												// pořadí menu položky
        'script' => __DIR__ . '../../../script/example-modul.php',		// cesta k výkonnému skriptu
    ];
};
