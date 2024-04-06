<?php

function getRequestType()
{
  return $_SERVER['REQUEST_METHOD'];
}
function postMethod()
{
  if (getRequestType() === 'POST') {
    return true;
  }
  return false;
}
function reciveInput($input)
{
  return htmlspecialchars(htmlentities(stripslashes(trim($input))));
}
function redirectPage($path)
{
  header("Location: $path");
  exit;
}