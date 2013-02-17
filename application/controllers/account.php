<?php
// application/controllers/account.php
class Account_Controller extends Base_Controller
{
    public function action_index()
    {
        echo "Welcome to";
    }
    public function action_login($name, $place)
    {
        echo "This is the login form. {$name} +  {$place}";
        return View::make('hello');
    }
    public function action_logout()
    {
        echo "This is the logout action.";
    }
}
