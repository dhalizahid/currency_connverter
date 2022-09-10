<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '0ea0362965d8a68686181ffa1b90a2330095e8c4',
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '0ea0362965d8a68686181ffa1b90a2330095e8c4',
            'dev_requirement' => false,
        ),
        'heroku/heroku-buildpack-php' => array(
            'pretty_version' => 'v224',
            'version' => '224.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../heroku/heroku-buildpack-php',
            'aliases' => array(),
            'reference' => '2df7a440119b0c9468fbace658eb0d528b4d6971',
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.0.2',
            'version' => '5.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'reference' => '688bce4fa695cc360a0d084e34f029b0c192b223',
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.0.2',
            ),
        ),
    ),
);
