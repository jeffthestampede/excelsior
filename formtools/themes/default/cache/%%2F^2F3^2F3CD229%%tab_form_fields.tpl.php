<?php /* Smarty version 2.6.18, created on 2016-05-18 22:45:48
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_form_fields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_form_fields.tpl', 1, false),array('modifier', 'count', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_form_fields.tpl', 3, false),array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_form_fields.tpl', 22, false),)), $this); ?>
  <?php echo smarty_function_ft_include(array('file' => "messages.tpl"), $this);?>


  <?php if (count($this->_tpl_vars['form_fields']) == 0): ?>

    <div class="notify margin_bottom_large">
      <div style="padding:6px">
        <?php echo $this->_tpl_vars['LANG']['text_unused_field_option_group']; ?>

      </div>
    </div>

  <?php else: ?>

	  <div class="margin_bottom_large">
	    <?php echo $this->_tpl_vars['LANG']['text_used_field_option_group']; ?>

	  </div>

	  <table cellspacing="1" cellpadding="0" class="list_table margin_bottom_large">
	  <tr>
	    <th width="40"> </th>
	    <th><?php echo $this->_tpl_vars['LANG']['word_field']; ?>
</th>
	    <th><?php echo $this->_tpl_vars['LANG']['word_form']; ?>
</th>
	    <th width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_edit_field'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
	  </tr>
	  <?php $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field_info']):
        $this->_foreach['row']['iteration']++;
?>
	    <?php $this->assign('count', $this->_foreach['row']['iteration']); ?>
		  <tr>
		    <td align="center" class="medium_grey"><?php echo $this->_tpl_vars['count']; ?>
</td>
		    <td class="pad_left_small"><?php echo $this->_tpl_vars['field_info']['field_title']; ?>
</td>
		    <td class="pad_left_small"><?php echo $this->_tpl_vars['field_info']['form_name']; ?>
</td>
		    <td align="center"><a href="../edit.php?page=field_options&field_id=<?php echo $this->_tpl_vars['field_info']['field_id']; ?>
&form_id=<?php echo $this->_tpl_vars['field_info']['form_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_edit_field'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</a></td>
		  </tr>
	  <?php endforeach; endif; unset($_from); ?>
	  </table>

	<?php endif; ?>