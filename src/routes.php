<?php

    $app->get('/', function ($request, $response, $args) {
        header("Location: /hu");
        die();
    });

    $app->map(['GET', 'POST'], '/{page}', function ($request, $response, $args) {
        $tpl = "index.php";
        $renderParams = [
            "c"        => "acac",
            "page"     => $args['page'],
        ];

        return $this->renderer->render($response, $tpl, $renderParams);

    })->setName('random');

    // $app->group('/', function() {
    //     $tpl = 'index.php';

    //     $this->render($tpl, [
    //         "page"  => "mainpage",
    //         "slug"  => "",
    //         "template" => "template",
    //     ]);
    //     // $this->get('', function($request, $response, $args) {
    //     //     var_dump($response);
    //     //     var_dump($args);
    //     //     return $this->renderer->render($response, 'template_mainpage.php', $args);
    //     // })->setName('mainpage');

    //     // $this->get('/gallery', function($request, $response, $args) {
    //     //     return $this->renderer->render($response, 'template_mainpage.php', $args);
    //     // })->setName('gallery');
    // });
