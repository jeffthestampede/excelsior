<?php /* Smarty version 2.6.18, created on 2016-05-18 22:45:45
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/edit.tpl', 1, false),array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/edit.tpl', 6, false),)), $this); ?>
<?php echo smarty_function_ft_include(array('file' => 'header.tpl'), $this);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="./"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/icon_field_option_groups.gif" width="34" height="34" border="0" /></a></td>
    <td class="title"><a href="./">GROUP:</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['group_info']['group_name'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file' => 'tabset_open.tpl'), $this);?>


    <?php if ($this->_tpl_vars['page'] == 'main'): ?>
      <?php echo smarty_function_ft_include(array('file' => 'admin/forms/field_option_groups/tab_main.tpl'), $this);?>

    <?php elseif ($this->_tpl_vars['page'] == 'form_fields'): ?>
      <?php echo smarty_function_ft_include(array('file' => 'admin/forms/field_option_groups/tab_form_fields.tpl'), $this);?>

    <?php else: ?>
      <?php echo smarty_function_ft_include(array('file' => 'admin/forms/field_option_groups/tab_main.tpl'), $this);?>

    <?php endif; ?>

  <?php echo smarty_function_ft_include(array('file' => 'tabset_close.tpl'), $this);?>


<?php echo smarty_function_ft_include(array('file' => 'footer.tpl'), $this);?>