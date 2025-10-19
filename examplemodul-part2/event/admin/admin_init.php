<?php

use Sunlight\Router;													// odkazujeme na třídu Router pro zobrazení ikony tlačítka menu
use Sunlight\User;														// odkazujeme na třídu user z důvodu acces práv

return function (array $args) {
    $args['admin']->modules['example-modul-other'] = [					// example-modul-other se objeví v adresním řádku prohlížeče
        'title' => _lang('modulother.module.title.other'),					// Název menu v záložce Ostatní
        'parent' => 'other',											// Parent ukazuje, že se má naše menu zobrazit v záložce Ostatní, když je povoleno
        'access' => User::hasPrivilege('adminother'),					// přístupová práva do záložky Ostatní
        'script' => __DIR__ . '../../../script/example-modul-other.php',// cesta k výkonnému skriptu
        'other' => true,												// True povolí zobrazení menu, false zakáže zobrazení menu v záložce Ostatní
        'other_icon' => Router::file(__DIR__ . '../../../public/images/icons/big-cog.png') // nastavená cesta k ikoně tlačítka menu
    ];
};
