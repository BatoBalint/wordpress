<?php return array(
    'root' => array(
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '4415941e1e1f048d31f8cc4d2c485da40c1d5d1b',
        'name' => 'admin/02.15',
        'dev' => true,
    ),
    'versions' => array(
        'admin/02.15' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '4415941e1e1f048d31f8cc4d2c485da40c1d5d1b',
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress' => array(
            'pretty_version' => '5.9.0',
            'version' => '5.9.0.0',
            'type' => 'package',
            'install_path' => __DIR__ . '/../johnpbloch/wordpress',
            'aliases' => array(),
            'reference' => '6ada7243daf56881a1a09b5fbba60b993e38fa74',
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core' => array(
            'pretty_version' => '5.9.0',
            'version' => '5.9.0.0',
            'type' => 'wordpress-core',
            'install_path' => __DIR__ . '/../../wordpress',
            'aliases' => array(),
            'reference' => '51241ed9138dd1fb552f6b85fc2025e6135fc03f',
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core-installer' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../johnpbloch/wordpress-core-installer',
            'aliases' => array(),
            'reference' => '237faae9a60a4a2e1d45dce1a5836ffa616de63e',
            'dev_requirement' => false,
        ),
        'wordpress/core-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '5.9.0',
            ),
        ),
    ),
);
