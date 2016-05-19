<?php

$STRUCTURE = array();
$STRUCTURE = array();
$STRUCTURE["tables"] = array();
$STRUCTURE["tables"]["module_export_groups"] = array(
  array(
    "Field"   => "export_group_id",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "group_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "access_type",
    "Type"    => "enum('admin','public','private')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "public"
  ),
  array(
    "Field"   => "visibility",
    "Type"    => "enum('show','hide')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "show"
  ),
  array(
    "Field"   => "icon",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "action",
    "Type"    => "enum('file','popup','new_window')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "popup"
  ),
  array(
    "Field"   => "action_button_text",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "{\$LANG.word_display}"
  ),
  array(
    "Field"   => "popup_height",
    "Type"    => "varchar(5)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "popup_width",
    "Type"    => "varchar(5)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "headers",
    "Type"    => "text",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "smarty_template",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "tinyint(4)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["tables"]["module_export_group_clients"] = array(
  array(
    "Field"   => "export_group_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["tables"]["module_export_types"] = array(
  array(
    "Field"   => "export_type_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "export_type_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "export_type_visibility",
    "Type"    => "enum('show','hide')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "show"
  ),
  array(
    "Field"   => "filename",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "export_group_id",
    "Type"    => "smallint(6)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "smarty_template",
    "Type"    => "text",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "tinyint(3) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
