<?php /* Smarty version 2.6.18, created on 2016-05-30 21:44:14
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step2.tpl', 1, false),array('function', 'clients_dropdown', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step2.tpl', 191, false),array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step2.tpl', 27, false),array('modifier', 'escape', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step2.tpl', 40, false),array('modifier', 'count', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step2.tpl', 113, false),)), $this); ?>
<?php echo smarty_function_ft_include(array('file' => 'header.tpl'), $this);?>


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

  <table cellpadding="0" cellspacing="0" width="100%" class="add_form_nav margin_bottom_large">
  <tr>
    <td class="selected"><a href="step1.php"><?php echo $this->_tpl_vars['LANG']['word_start']; ?>
</a></td>
    <td class="selected"><?php echo $this->_tpl_vars['LANG']['phrase_form_info']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_test_submission']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_database_setup']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_field_types']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_finalize_form']; ?>
</td>
  </tr>
  </table>

  <div>
    <div class="subtitle underline" style="position:relative">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_form_info_2'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

    </div>

    <?php echo smarty_function_ft_include(array('file' => 'messages.tpl'), $this);?>


    <form method="post" id="add_form" name="add_form" action="<?php echo $this->_tpl_vars['same_page']; ?>
" onsubmit="return rsv.validate(this, rules)">
      <?php echo $this->_tpl_vars['page_values']['hidden_fields']; ?>

      <input type="hidden" id="form_type" value="external" />
      <input type="hidden" id="submission_type" value="<?php echo $this->_tpl_vars['submission_type']; ?>
" />

      <table width="100%" class="list_table">
      <tr>
        <td class="pad_left_small" width="200"><?php echo $this->_tpl_vars['LANG']['phrase_form_name']; ?>
</td>
        <td><input type="text" name="form_name" id="form_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_values']['form_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="width: 99%" /></td>
      </tr>
      <?php if ($this->_tpl_vars['submission_type'] == 'code'): ?>
      <tbody>
        <tr>
          <td class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['phrase_is_multi_page_form_q']; ?>
</td>
          <td>
            <input type="radio" name="is_multi_page_form" class="is_multi_page_form" id="impf1" value="yes"
              <?php if ($this->_tpl_vars['page_values']['is_multi_page_form'] == 'yes'): ?>checked<?php endif; ?> />
              <label for="impf1"><?php echo $this->_tpl_vars['LANG']['word_yes']; ?>
</label>
            <input type="radio" name="is_multi_page_form" class="is_multi_page_form" id="impf2" value="no"
              <?php if ($this->_tpl_vars['page_values']['is_multi_page_form'] == 'no'): ?>checked<?php endif; ?> />
              <label for="impf2"><?php echo $this->_tpl_vars['LANG']['word_no']; ?>
</label>
          </td>
        </tr>
      </tbody>
      <?php endif; ?>
      <tr>
        <td valign="top" class="pad_left_small">
          <?php if ($this->_tpl_vars['submission_type'] == 'direct'): ?>
            <input type="hidden" name="is_multi_page_form" value="no" />
            <?php echo $this->_tpl_vars['LANG']['phrase_form_url']; ?>

          <?php else: ?>
            <span id="form_label_single" <?php if ($this->_tpl_vars['page_values']['is_multi_page_form'] == 'yes'): ?>style="display:none"<?php endif; ?>><?php echo $this->_tpl_vars['LANG']['phrase_form_url']; ?>
</span>
            <span id="form_label_multiple" <?php if ($this->_tpl_vars['page_values']['is_multi_page_form'] == 'no'): ?>style="display:none"<?php endif; ?>><?php echo $this->_tpl_vars['LANG']['phrase_form_urls']; ?>
</span>
          <?php endif; ?>
        </td>
        <td>
          <?php if ($this->_tpl_vars['submission_type'] == 'direct'): ?>
            <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td><input type="text" name="form_url" id="form_url" value="<?php echo $this->_tpl_vars['page_values']['form_url']; ?>
" style="width: 98%" /></td>
              <td width="60"><input type="button" class="check_url" id="check_url__form_url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_check_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
            </tr>
            </table>
          <?php else: ?>
            <div id="form_url_single" <?php if ($this->_tpl_vars['page_values']['is_multi_page_form'] == 'yes'): ?>style="display:none"<?php endif; ?>>
              <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td><input type="text" name="form_url" id="form_url" value="<?php echo $this->_tpl_vars['page_values']['form_url']; ?>
" style="width: 98%" /></td>
                <td width="60"><input type="button" class="check_url" id="check_url__form_url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_check_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
              </tr>
              </table>
            </div>
            <div id="form_url_multiple" <?php if ($this->_tpl_vars['page_values']['is_multi_page_form'] == 'no'): ?>style="display:none"<?php endif; ?>>
              <div class="sortable multi_page_form_list" id="<?php echo $this->_tpl_vars['sortable_id']; ?>
">
                <ul class="header_row">
                  <li class="col1"><?php echo $this->_tpl_vars['LANG']['word_page']; ?>
</li>
                  <li class="col2"><?php echo $this->_tpl_vars['LANG']['phrase_form_url']; ?>
</li>
                  <li class="col3"></li>
                  <li class="col4 colN del"></li>
                </ul>
                <div class="clear"></div>
                <ul class="rows">
                  <?php $this->assign('previous_item', ""); ?>
                  <?php $_from = $this->_tpl_vars['page_values']['multi_page_form_urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i']):
        $this->_foreach['row']['iteration']++;
?>
                    <?php $this->assign('count', $this->_foreach['row']['iteration']); ?>
                    <li class="sortable_row<?php if (($this->_foreach['row']['iteration'] == $this->_foreach['row']['total'])): ?> rowN<?php endif; ?>">
                      <div class="row_content">
                        <div class="row_group<?php if (($this->_foreach['row']['iteration'] == $this->_foreach['row']['total'])): ?> rowN<?php endif; ?>">
                          <input type="hidden" class="sr_order" value="<?php echo $this->_tpl_vars['count']; ?>
" />
                          <ul>
                            <li class="col1 sort_col"><?php echo $this->_tpl_vars['count']; ?>
</li>
                            <li class="col2"><input type="text" name="multi_page_urls[]" id="mp_url_<?php echo $this->_tpl_vars['count']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['form_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></li>
                            <li class="col3"><input type="button" class="check_url" id="check_url__mp_url_<?php echo $this->_tpl_vars['count']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_check_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></li>
                            <li class="col4 colN del"></li>
                          </ul>
                          <div class="clear"></div>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </li>
                  <?php endforeach; endif; unset($_from); ?>
                  <?php if (count($this->_tpl_vars['page_values']['multi_page_form_urls']) == 0): ?>
                    <li class="sortable_row">
                      <div class="row_content">
                        <div class="row_group rowN">
                          <input type="hidden" class="sr_order" value="1" />
                          <ul>
                            <li class="col1 sort_col">1</li>
                            <li class="col2"><input type="text" name="multi_page_urls[]" id="mp_url_0" /></li>
                            <li class="col3"><input type="button" class="check_url" id="check_url__mp_url_0" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_check_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></li>
                            <li class="col4 colN del"></li>
                          </ul>
                          <div class="clear"></div>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="clear"></div>
              <div>
                <a href="#" onclick="return mf_ns.add_multi_page_form_page()"><?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
</a>
              </div>
            </div>
          <?php endif; ?>
        </td>
      </tr>
      <?php if ($this->_tpl_vars['submission_type'] == 'direct'): ?>
      <tr>
        <td valign="top" class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['phrase_redirect_url']; ?>
</td>
        <td>
          <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td><input type="text" name="redirect_url" id="redirect_url" value="<?php echo $this->_tpl_vars['page_values']['redirect_url']; ?>
" style="width: 98%" /></td>
            <td width="60"><input type="button" class="check_url" id="check_url__redirect_url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_check_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
          </tr>
          </table>
          <div class="medium_grey">
            <?php echo $this->_tpl_vars['LANG']['text_add_form_step_2_text_2']; ?>

          </div>
        </td>
      </tr>
      <?php endif; ?>

      <tr>
        <td class="pad_left_small" valign="top"><?php echo $this->_tpl_vars['LANG']['phrase_who_can_access']; ?>
</td>
        <td>

          <table cellspacing="1" cellpadding="0" >
          <tr>
            <td>
              <input type="radio" name="access_type" id="at1" value="admin" <?php if ($this->_tpl_vars['page_values']['access_type'] == 'admin'): ?>checked<?php endif; ?> />
                <label for="at1"><?php echo $this->_tpl_vars['LANG']['phrase_admin_only']; ?>
</label>
            </td>
          </tr>
          <tr>
            <td>
              <input type="radio" name="access_type" id="at2" value="public" <?php if ($this->_tpl_vars['page_values']['access_type'] == 'public'): ?>checked<?php endif; ?> />
                <label for="at2"><?php echo $this->_tpl_vars['LANG']['word_public']; ?>
 <span class="light_grey"><?php echo $this->_tpl_vars['LANG']['phrase_all_clients_have_access']; ?>
</span></label>
            </td>
          </tr>
          <tr>
            <td>
              <input type="radio" name="access_type" id="at3" value="private" <?php if ($this->_tpl_vars['page_values']['access_type'] == 'private'): ?>checked<?php endif; ?> />
                <label for="at3"><?php echo $this->_tpl_vars['LANG']['word_private']; ?>
 <span class="light_grey"><?php echo $this->_tpl_vars['LANG']['phrase_only_specific_clients_have_access']; ?>
</span></label>
            </td>
          </tr>
          </table>

          <div id="custom_clients" <?php if ($this->_tpl_vars['page_values']['access_type'] != 'private'): ?>style="display:none"<?php endif; ?> class="margin_top">
            <table cellpadding="0" cellspacing="0" class="subpanel">
            <tr>
              <td class="medium_grey"><?php echo $this->_tpl_vars['LANG']['phrase_available_clients']; ?>
</td>
              <td></td>
              <td class="medium_grey"><?php echo $this->_tpl_vars['LANG']['phrase_selected_clients']; ?>
</td>
            </tr>
            <tr>
              <td>
                <?php echo smarty_function_clients_dropdown(array('name_id' => "available_client_ids[]",'multiple' => 'true','multiple_action' => 'hide','clients' => $this->_tpl_vars['selected_client_ids'],'size' => '4','style' => "width: 220px"), $this);?>

              </td>
              <td align="center" valign="middle" width="100">
                <input type="button" value="<?php echo $this->_tpl_vars['LANG']['word_add_uc_rightarrow']; ?>
"
                  onclick="ft.move_options(this.form['available_client_ids[]'], this.form['selected_client_ids[]']);" /><br />
                <input type="button" value="<?php echo $this->_tpl_vars['LANG']['word_remove_uc_leftarrow']; ?>
"
                  onclick="ft.move_options(this.form['selected_client_ids[]'], this.form['available_client_ids[]']);" />
              </td>
              <td>
                <?php echo smarty_function_clients_dropdown(array('name_id' => "selected_client_ids[]",'multiple' => 'true','multiple_action' => 'show','clients' => $this->_tpl_vars['selected_client_ids'],'size' => '4','style' => "width: 220px"), $this);?>

              </td>
            </tr>
            </table>
          </div>

        </td>
      </tr>
      </table>

      <?php if ($this->_tpl_vars['submission_type'] == 'direct'): ?>
        <p>
          <?php echo $this->_tpl_vars['LANG']['text_form_contains_file_fields']; ?>

          <input type="radio" name="uploading_files" id="uploading_files1" value="yes" <?php if ($this->_tpl_vars['SESSION']['uploading_files'] == 'yes'): ?>checked<?php endif; ?> />
            <label for="uploading_files1"><?php echo $this->_tpl_vars['LANG']['word_yes']; ?>
</label>
          <input type="radio" name="uploading_files" id="uploading_files2" value="no" <?php if ($this->_tpl_vars['SESSION']['uploading_files'] == 'no'): ?>checked<?php endif; ?> />
            <label for="uploading_files2"><?php echo $this->_tpl_vars['LANG']['word_no']; ?>
</label>
        </p>
      <?php endif; ?>

      <p>
        <input type="submit" name="submit" class="next_step" value="<?php echo $this->_tpl_vars['LANG']['word_next_step_rightarrow']; ?>
" />
      </p>

    </form>

  </div>

<?php echo smarty_function_ft_include(array('file' => 'footer.tpl'), $this);?>
