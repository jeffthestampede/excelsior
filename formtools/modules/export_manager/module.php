<?php

/*
 * Module file: Export Manager
 */

$MODULE["author"]          = "Encore Web Studios";
$MODULE["author_email"]    = "formtools@encorewebstudios.com";
$MODULE["author_link"]     = "http://www.encorewebstudios.com";
$MODULE["version"]         = "1.0.3";
$MODULE["date"]            = "2010-10-02";
$MODULE["origin_language"] = "en_us";
$MODULE["supports_ft_versions"] = "All versions";

// define the module navigation - the keys are keys defined in the language file. This lets
// the navigation - like everything else - be customized to the users language. The paths are always built
// relative to the module's root, so help/index.php means: /[form tools root]/modules/export_manager/help/index.php
$MODULE["nav"] = array(
  "module_name"              => array('{$module_dir}/index.php', false),
  "word_settings"            => array('{$module_dir}/settings/', false),
  "word_help"                => array('{$module_dir}/help/', false)
    );