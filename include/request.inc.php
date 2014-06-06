<?php
  function getParameterFromGet($name, $defaultValue = '')
  {
      return isset($_GET[$name])?
                $_GET[$name] :
                $defaultValue;
  }
    function getParameterFromPost($name, $defaultValue = '')
  {
      return isset($_POST[$name])?
                $_POST[$name] :
                $defaultValue;
  }