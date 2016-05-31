<?php /* Smarty version 2.6.18, created on 2016-05-30 21:54:09
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step4.tpl', 1, false),array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step4.tpl', 28, false),array('modifier', 'default', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step4.tpl', 83, false),)), $this); ?>
<?php echo smarty_function_ft_include(array('file' => "header.tpl"), $this);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="../"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/icon_forms.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../"><?php echo $this->_tpl_vars['LANG']['word_forms']; ?>
</a> <span class="joiner">&raquo;</span>
      <a href="./"><?php echo $this->_tpl_vars['LANG']['phrase_add_form']; ?>
</a> <span class="joiner">&raquo;</span>
      <?php echo $this->_tpl_vars['LANG']['phrase_external_form']; ?>

    </td>
  </tr>
  </table>

  <table cellpadding="0" cellspacing="0" width="100%" class="add_form_nav">
  <tr>
    <td class="selected"><a href="step1.php"><?php echo $this->_tpl_vars['LANG']['word_start']; ?>
</a></td>
    <td class="selected"><a href="step2.php"><?php echo $this->_tpl_vars['LANG']['phrase_form_info']; ?>
</a></td>
    <td class="selected"><a href="step3.php"><?php echo $this->_tpl_vars['LANG']['phrase_test_submission']; ?>
</a></td>
    <td class="selected"><?php echo $this->_tpl_vars['LANG']['phrase_database_setup']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_field_types']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_finalize_form']; ?>
</td>
  </tr>
  </table>

  <br />

  <div>
    <div class="subtitle underline"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_db_setup_page_4'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</div>

    <?php echo smarty_function_ft_include(array('file' => "messages.tpl"), $this);?>


    <div class="margin_bottom_large">
      <?php echo $this->_tpl_vars['LANG']['text_add_form_step_3_para_1']; ?>

    </div>
    <div class="margin_bottom_large">
      <?php echo $this->_tpl_vars['LANG']['text_add_form_step_3_para_2']; ?>

    </div>

    <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post" id="step4_form">
      <input type="hidden" name="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
" />

      <div class="sortable groupable add_form_step4" id="<?php echo $this->_tpl_vars['sortable_id']; ?>
">
        <input type="hidden" class="tabindex_col_selectors" value=".rows .col3 input|.rows .col5 select" />
        <ul class="header_row">
          <li class="col1"><?php echo $this->_tpl_vars['LANG']['word_order']; ?>
</li>
          <li class="col2"><?php echo $this->_tpl_vars['LANG']['phrase_form_field_name']; ?>
</li>
          <li class="col3"><?php echo $this->_tpl_vars['LANG']['phrase_display_name']; ?>
<span class="pad_right">&nbsp;</span><input type="button" class="bold" value="<?php echo $this->_tpl_vars['LANG']['phrase_smart_fill']; ?>
" onclick="page_ns.smart_fill()" /></li>
          <li class="col4"><?php echo $this->_tpl_vars['LANG']['phrase_sample_data']; ?>
</li>
          <li class="col5 colN del"></li>
        </ul>
        <div class="clear"></div>

        <ul class="rows">
        <?php $this->assign('previous_item', ""); ?>
        <?php $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['row']['iteration']++;
?>
          <?php $this->assign('row_count', $this->_foreach['row']['iteration']); ?>
          <?php $this->assign('field_id', $this->_tpl_vars['field']['field_id']); ?>
          <?php $this->assign('style', ""); ?>

          <?php if ($this->_tpl_vars['field']['is_new_sort_group'] == 'yes'): ?>
            <?php if ($this->_tpl_vars['previous_item'] != ""): ?>
              </div>
              <div class="clear"></div>
            </li>
            <?php endif; ?>
            <li class="sortable_row<?php if (($this->_foreach['row']['iteration'] == $this->_foreach['row']['total'])): ?> rowN<?php endif; ?>">
              <?php $this->assign('next_item_is_new_sort_group', $this->_tpl_vars['form_fields'][$this->_foreach['row']['iteration']]['is_new_sort_group']); ?>
              <div class="row_content<?php if ($this->_tpl_vars['next_item_is_new_sort_group'] == 'no'): ?> grouped_row<?php endif; ?>">
          <?php endif; ?>

          <?php $this->assign('previous_item', $this->_tpl_vars['i']); ?>

            <div class="row_group<?php if ($this->_tpl_vars['field']['is_system_field'] == 'yes'): ?> system_field<?php endif; ?><?php if (($this->_foreach['row']['iteration'] == $this->_foreach['row']['total'])): ?> rowN<?php endif; ?>">
              <input type="hidden" class="sr_order" value="<?php echo $this->_tpl_vars['field_id']; ?>
" />
              <ul>
                <li class="col1 sort_col"><?php echo $this->_tpl_vars['row_count']; ?>
</li>
                <li class="col2 blue"><?php echo $this->_tpl_vars['field']['field_name']; ?>
</li>
                <li class="col3"><input type="text" name="field_<?php echo $this->_tpl_vars['field_id']; ?>
_display_name" id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_display_name" value="<?php echo $this->_tpl_vars['field']['field_title']; ?>
" /></li>
                <li class="col4 ellipsis">
                  <?php if ($this->_tpl_vars['field']['is_system_field'] == 'yes'): ?>
                    <span class="light_grey">&#8212;</span>
                  <?php else: ?>
                    <?php echo ((is_array($_tmp=@$this->_tpl_vars['field']['field_test_value'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>

                  <?php endif; ?>
                </li>
                <li class="col5 colN<?php if ($this->_tpl_vars['field']['is_system_field'] == 'no'): ?> del<?php endif; ?>"></li>
              </ul>
              <div class="clear"></div>
            </div>

          <?php if (($this->_foreach['row']['iteration'] == $this->_foreach['row']['total'])): ?>
            </div>
            <div class="clear"></div>
          </li>
          <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>
        </ul>
        <div class="clear"></div>
      </div>

      <p>
        <input type="submit" name="next_step" class="next_step" value="<?php echo $this->_tpl_vars['LANG']['word_next_step_rightarrow']; ?>
"
          onclick="return page_ns.validate_fields()"/>
      </p>

    </form>

  </div>

<?php echo smarty_function_ft_include(array('file' => "footer.tpl"), $this);?>
