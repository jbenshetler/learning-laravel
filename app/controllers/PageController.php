<?php
/**
 * Created by PhpStorm.
 * User: jbenshetler
 * Date: 9/17/14
 * Time: 11:49 AM
 */

class PageController extends BaseController {
    public function home()
    {
        $name = 'Jeff';
        return View::make('hello')->with('name',$name);
    }

    public function about()
    {
        return View::make('about');
    }
}