<?php 
$errors = [];


if(!array_key_exists('name',$_POST) || $_POST['name'] == '' || !filter_var($_POST['name'], FILTER_SANITIZE_STRING)
{
    $errors['name'] = "il y a un probleme avec votre: nom ";
}
if(!array_key_exists('mail',$_POST) || $_POST['mail'] == '' || !filter_var($_POST['mail'], FILTER_SANITIZE_STRING)
{
    $errors['mail'] = "il y a un probleme avec votre: mail";
}
if(!array_key_exists('phone',$_POST) || $_POST['phone'] == '' || !filter_var($_POST['phone'], FILTER_SANITIZE_STRING)
{
    $errors['phone'] = "il y a un probleme avec votre: numéro de téléphone";
}
if(!array_key_exists('postcode',$_POST) || $_POST['postcode'] == '' || !filter_var($_POST['postcode'], FILTER_SANITIZE_STRING)
{
    $errors['postcode'] = "il y a un probleme avec votre: code postale";
}
if(!array_key_exists('message',$_POST) || $_POST['message'] == '' || !filter_var($_POST['message'], FILTER_SANITIZE_STRING)
{
    $errors['message'] = "il y a un probleme avec votre: message";
}

if(!empty($errors))
{
    header();
}
else
{
    header();
}