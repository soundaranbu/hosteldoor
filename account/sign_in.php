<?php
require_once('../config.php');
global $C;
\manager\page::header();
\manager\page::title('Sign In');
\manager\page::backgroud_img(true);
include('../forms/sign_in_form.php');
\manager\page::add_style($C->wwwroot.'/account/style/sign_in.css');
\manager\page::footer();
\manager\page::add_script($C->wwwroot.'/account/script/sign_in.js');