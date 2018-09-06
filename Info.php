<?php

/**
* @author       Piotr Płaczek <piotr@pplczek.pl>
* @copyright    2018 PłaceekDevelopment
* @link         https://pplaczek.pl
*/

return [
    'name'          =>  $core->lang['prismjs']['module_name'],
    'description'   =>  $core->lang['prismjs']['module_desc'],
    'author'        =>  'p.dev',
    'version'       =>  '1.1',
    'compatibility' =>  '1.3.*',
    'icon'          =>  'code',
    'install'       =>  function () use ($core) {
        $core->db()->pdo()->exec("CREATE TABLE IF NOT EXISTS `pdev_prismjs` (
            `id` integer NOT NULL PRIMARY KEY AUTOINCREMENT,
            `name` text NOT NULL,
            `path` text NOT NULL
            )");
            $def_url = url("inc/modules/prismjs/prismjs/style/default.css");
            $core->db()->pdo()->exec("INSERT INTO pdev_prismjs (id, name, path) VALUES (0, 'Default' , '".$def_url."')");
    },
    'uninstall'     =>  function () use ($core) {
        $core->db()->pdo()->exec("DROP TABLE `pdev_prismjs`;");
    }
];
