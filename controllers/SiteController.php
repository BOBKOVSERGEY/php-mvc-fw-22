<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home(): bool|array|string
    {
        $param = [
            'name' => 'BobkovS'
        ];
        return $this->render('home', $param);
    }

    public function contact(Request $request): bool|array|string
    {
        if($request->isPost()) {
            return  'Handle for submitted';
        }
        return $this->render('contact');
    }
}