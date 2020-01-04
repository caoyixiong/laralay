<?php
/**
 * Created by PhpStorm.
 * User: Will
 * Date: 2019/12/31
 * Time: 17:35
 */

namespace App\Http\Controllers;


class DemoController extends Controller
{
    public function index()
    {
        return view('demo.index');
    }

    public function main()
    {
        return view('demo.welcome_1');
    }

    public function welcome_1()
    {
        return view('demo.welcome_1');
    }

    public function welcome_2()
    {
        return view('demo.welcome_2');
    }

    public function menu()
    {
        return view('demo.menu');
    }

    public function setting()
    {
        return view('demo.setting');
    }

    public function table()
    {
        return view('demo.table');
    }

    public function form()
    {
        return view('demo.form');
    }

    public function form_step()
    {
        return view('demo.form_step');
    }

    public function login_1()
    {
        return view('demo.login_1');
    }

    public function login_2()
    {
        return view('demo.login_2');
    }

    public function page_404()
    {
        return view('demo.page_404');
    }

    public function button()
    {
        return view('demo.button');
    }

    public function layer()
    {
        return view('demo.layer');
    }

    public function icon()
    {
        return view('demo.icon');
    }

    public function icon_picker()
    {
        return view('demo.icon_picker');
    }

    public function color_select()
    {
        return view('demo.color_select');
    }

    public function table_select()
    {
        return view('demo.table_select');
    }

    public function upload()
    {
        return view('demo.upload');
    }

    public function editor()
    {
        return view('demo.editor');
    }

    public function user_password()
    {
        return view('demo.user_password');
    }

    public function user_setting()
    {
        return view('demo.user_setting');
    }
}
