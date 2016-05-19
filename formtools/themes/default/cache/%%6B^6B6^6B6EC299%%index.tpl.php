<?php /* Smarty version 2.6.18, created on 2016-05-18 22:45:29
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/index.tpl', 1, false),array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/index.tpl', 6, false),)), $this); ?>
<?php echo smarty_function_ft_include(array('file' => 'header.tpl'), $this);?>


  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/icon_field_option_groups.gif" width="34" height="34" /></td>
    <td class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_field_option_groups'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</td>
  </tr>
  </table>

  <div class="margin_top_large">
    <?php echo $this->_tpl_vars['text_field_option_group_page']; ?>

  </div>

  <?php echo smarty_function_ft_include(array('file' => 'messages.tpl'), $this);?>


  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
    <input type="hidden" name="page" value="views" />

    <?php if ($this->_tpl_vars['num_field_option_groups'] == 0): ?>

      <div class="notify" class="margin_bottom_large">
        <div style="padding:8px">
          <?php echo $this->_tpl_vars['LANG']['notify_no_field_option_groups']; ?>

        </div>
      </div>

    <?php else: ?>

      <?php echo $this->_tpl_vars['pagination']; ?>


      <table class="list_table" cellspacing="1" cellpadding="1">
      <tr>
        <th width="40"><?php echo $this->_tpl_vars['LANG']['word_id']; ?>
</th>
        <th><?php echo $this->_tpl_vars['LANG']['phrase_group_name']; ?>
</th>
        <th width="140" nowrap><?php echo $this->_tpl_vars['LANG']['phrase_num_field_options']; ?>
</th>
        <th width="140" nowrap><?php echo $this->_tpl_vars['LANG']['phrase_used_by_num_form_fields']; ?>
</th>
        <th width="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_edit'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
        <th width="60" class="del"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_delete'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
      </tr>

      <?php $_from = $this->_tpl_vars['field_option_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group_info']):
        $this->_foreach['row']['iteration']++;
?>
        <?php $this->assign('index', ($this->_foreach['row']['iteration']-1)); ?>
        <?php $this->assign('count', $this->_foreach['row']['iteration']); ?>
        <?php $this->assign('group_id', $this->_tpl_vars['group_info']['group_id']); ?>

        <tr>
          <td class="medium_grey" align="center"><?php echo $this->_tpl_vars['group_info']['group_id']; ?>
</td>
          <td class="pad_left_small"><?php echo $this->_tpl_vars['group_info']['group_name']; ?>
</td>
          <td class="pad_left_small" align="center"><?php echo $this->_tpl_vars['group_info']['num_field_group_options']; ?>
</td>
          <td class="pad_left_small" align="center">
            <?php if ($this->_tpl_vars['group_info']['num_fields'] == 0): ?>
              <span class="light_grey"><?php echo $this->_tpl_vars['LANG']['word_none']; ?>
</span>
              <?php $this->assign('may_delete_group', 'true'); ?>
            <?php else: ?>
              <?php echo $this->_tpl_vars['group_info']['num_fields']; ?>

              <?php $this->assign('may_delete_group', 'false'); ?>
            <?php endif; ?>
          </td>
          <td align="center"><a href="edit.php?group_id=<?php echo $this->_tpl_vars['group_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_edit'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</a></td>
          <td class="del"><a href="#" onclick="return page_ns.delete_field_option_group(<?php echo $this->_tpl_vars['group_id']; ?>
, <?php echo $this->_tpl_vars['may_delete_group']; ?>
)"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_delete'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</a></td>
        </tr>

      <?php endforeach; endif; unset($_from); ?>

      </table>

    <?php endif; ?>

    <p>
      <?php if ($this->_tpl_vars['num_field_option_groups'] > 0): ?>
        <select name="create_field_option_group_from_group_id">
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_new_blank_field_option_group']; ?>
</option>
          <optgroup label="<?php echo $this->_tpl_vars['LANG']['phrase_copy_settings_from']; ?>
">
            <?php $_from = $this->_tpl_vars['all_field_option_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group_info']):
?>
              <option value="<?php echo $this->_tpl_vars['group_info']['group_id']; ?>
"><?php echo $this->_tpl_vars['group_info']['group_name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </optgroup>
        </select>
      <?php endif; ?>
      <input type="submit" name="add_field_option_group" value="<?php echo $this->_tpl_vars['LANG']['phrase_create_new_field_option_group']; ?>
" />
    </p>

  </form>

<?php echo smarty_function_ft_include(array('file' => 'footer.tpl'), $this);?>