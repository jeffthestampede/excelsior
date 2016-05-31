<?php /* Smarty version 2.6.18, created on 2016-05-30 21:54:19
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step5.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step5.tpl', 1, false),array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step5.tpl', 28, false),array('modifier', 'count', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step5.tpl', 321, false),)), $this); ?>
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

  <table cellpadding="0" cellspacing="0" width="100%" class="add_form_nav">
  <tr>
    <td class="selected"><a href="step1.php"><?php echo $this->_tpl_vars['LANG']['word_start']; ?>
</a></td>
    <td class="selected"><a href="step2.php"><?php echo $this->_tpl_vars['LANG']['phrase_form_info']; ?>
</a></td>
    <td class="selected"><a href="step3.php"><?php echo $this->_tpl_vars['LANG']['phrase_test_submission']; ?>
</a></td>
    <td class="selected"><a href="step4.php"><?php echo $this->_tpl_vars['LANG']['phrase_database_setup']; ?>
</a></td>
    <td class="selected"><?php echo $this->_tpl_vars['LANG']['phrase_field_types']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_finalize_form']; ?>
</td>
  </tr>
  </table>

  <br />

  <div class="subtitle underline margin_bottom_large">
    5. <?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_field_types'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

  </div>

  <div>
    <span style="float: right">
      <table cellspacing="0" cellpadding="0" style="height:40px">
      <tr>
        <td class="pad_left" align="center">
          <input type="button" id="smart_fill_button" value="<?php echo $this->_tpl_vars['LANG']['phrase_smart_fill']; ?>
" class="light_grey bold"
            onclick="sf_ns.smart_fill()" disabled /><br />
        </td>
        <td width="40" align="right">
          <div id="ajax_activity"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/ajax_activity.gif" /></div>
          <div id="ajax_no_activity" style="display:none"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/ajax_no_activity.gif" /></div>
        </td>
      </tr>
      </table>
    </span>
    <p>
      <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types1']; ?>

    </p>
    <p>
      <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types2']; ?>

    </p>
  </div>

  <?php echo smarty_function_ft_include(array('file' => "messages.tpl"), $this);?>


  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
    <input type="hidden" name="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
" />

    <div id="main_field_table">

      <table class="list_table" width="100%" cellpadding="0" cellspacing="1">
      <tr>
        <th><?php echo $this->_tpl_vars['LANG']['phrase_display_name']; ?>
</th>
        <th><?php echo $this->_tpl_vars['LANG']['phrase_field_type']; ?>
</th>
        <th><?php echo $this->_tpl_vars['LANG']['phrase_field_size']; ?>
</th>
        <th class="nowrap"><?php echo $this->_tpl_vars['LANG']['phrase_action_needed']; ?>
</th>
        <th width="100" class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_options'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
      </tr>

      <?php $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['row']['iteration']++;
?>
        <?php $this->assign('row_count', $this->_foreach['row']['iteration']); ?>
        <?php $this->assign('field_id', $this->_tpl_vars['field']['field_id']); ?>

        <?php if ($this->_tpl_vars['field']['is_system_field'] == 'no'): ?>
          <tr style="<?php echo $this->_tpl_vars['style']; ?>
">
            <td class="blue pad_left_small" width="180" id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_title"><?php echo $this->_tpl_vars['field']['field_title']; ?>
</td>
            <td class="pad_left_small">
                            <input type="hidden" id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_name" value="<?php echo $this->_tpl_vars['field']['field_name']; ?>
" />
              <div id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_type_div" class="light_grey"><?php echo $this->_tpl_vars['LANG']['word_unknown']; ?>
</div>
            </td>
            <td>
              <div id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_size_div" class="light_grey"><?php echo $this->_tpl_vars['LANG']['word_unknown']; ?>
</div>
            </td>
            <td align="center" class="pad_left_small"><span id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_action" class="light_grey">&#8212;</span></td>
            <td align="center"><span id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_options" class="light_grey">&#8212;</span></td>
          </tr>
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
      </table>

      <table cellspacing="0" cellpadding="0" width="100%" class="margin_top_large">
      <tr>
        <td width="150" valign="top"><input type="button" id="refresh_page_button" value="<?php echo $this->_tpl_vars['LANG']['phrase_refresh_page']; ?>
" onclick="sf_ns.refresh_page()" /></td>
        <td>
          <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types3']; ?>

        </td>
      </tr>
      <tr>
        <td width="150" valign="top"><input type="button" id="refresh_page_button" value="<?php echo $this->_tpl_vars['LANG']['phrase_skip_step']; ?>
" onclick="sf_ns.skip_step()" /></td>
        <td>
          <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types4']; ?>

        </td>
      </tr>
      </table>

      <div class="margin_top">
        <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
          <td valign="top" width="100">
            <input type="button" name="next_step" class="light_grey bold margin_top_small margin_right_large" id="next_step"
              value="<?php echo $this->_tpl_vars['LANG']['word_next_step_rightarrow']; ?>
" onclick="sf_ns.submit_form()" disabled />
          </td>
          <td width="10"> </td>
          <td width="40" valign="top">
            <div id="ajax_activity_bottom" style="display:none"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/ajax_activity.gif" /></div>
            <div id="ajax_no_activity_bottom"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/ajax_no_activity.gif" /></div>
          </td>
          <td valign="top">
            <div id="next_step_message"></div>
          </td>
        </tr>
        </table>
      </div>

    </div>

    <div id="review_field_options" style="display:none">
      <div class="margin_bottom_large pad_left_small pad_right_small" style="background-color: #efefef; border-top: 2px solid #cccccc; border-bottom: 2px solid #cccccc;">
        <span style="float:right">
          <span class="previous_field_link" id="review_field_options_previous_field_link"></span> |
          <span class="next_field_link" id="review_field_options_next_field_link"></span>
        </span>
        <a href="#" onclick="return sf_ns.show_page('main_field_table', null)"><?php echo $this->_tpl_vars['LANG']['phrase_back_to_field_list']; ?>
</a>
      </div>

      <p>
        <span class="blue large_text" id="review_field_options_field_title"></span>
      </p>

        <table cellpadding="1" cellspacing="1" width="100%">
        <tr>
          <td valign="top" class="bold" width="140"><?php echo $this->_tpl_vars['LANG']['phrase_action_needed']; ?>
</td>
          <td><div id="review_field_options_action_needed"></div></td>
        </tr>
        <tr>
          <td class="bold" valign="top"><?php echo $this->_tpl_vars['LANG']['phrase_field_options']; ?>
</td>
          <td>
            <div id="field_option_buttons"></div>

            <div class="sortable review_field_options" id="<?php echo $this->_tpl_vars['sortable_id']; ?>
">
              <ul class="header_row">
                <li class="col1"><?php echo $this->_tpl_vars['LANG']['word_order']; ?>
</li>
                <li class="col2"><?php echo $this->_tpl_vars['LANG']['phrase_field_value']; ?>
</li>
                <li class="col3"><?php echo $this->_tpl_vars['LANG']['phrase_display_value']; ?>
</li>
                <li class="col4 colN del"></li>
              </ul>
              <div class="clear"></div>
              <ul class="rows">
              </ul>
            </div>
            <div class="clear"></div>

            <p>
              <span style="float:right"><input type="button" value="<?php echo $this->_tpl_vars['LANG']['phrase_update_field']; ?>
"
                onclick="sf_ns.update_field('review_field_options_action_needed')" /></span>
              <input type="button" value="<?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
" onclick="sf_ns.add_field_option()" />
              <span id="review_options_values_to_text"><input type="button" value="<?php echo $this->_tpl_vars['LANG']['phrase_field_values_to_display_values']; ?>
"
                onclick="sf_ns.set_display_values_from_field_values()" /></span>
            </p>

          </td>
        </tr>
        </table>

        <div class="margin_bottom_large pad_left_small pad_right_small" style="background-color: #efefef; border-top: 2px solid #cccccc; border-bottom: 2px solid #cccccc;">
          <span style="float:right">
            <span class="previous_field_link" id="review_field_options_previous_field_link2"></span> |
            <span class="next_field_link" id="review_field_options_next_field_link2"></span>
          </span>
          <a href="#" onclick="return sf_ns.show_page('main_field_table', null)"><?php echo $this->_tpl_vars['LANG']['phrase_back_to_field_list']; ?>
</a>
        </div>

      </div>


      <div id="multiple_fields_found" style="display:none">

        <div class="margin_bottom_large pad_left_small pad_right_small" style="background-color: #efefef; border-top: 2px solid #cccccc; border-bottom: 2px solid #cccccc;">
          <span style="float:right">
            <span class="previous_field_link" id="multiple_fields_found_previous_field_link"></span> |
            <span class="next_field_link" id="multiple_fields_found_next_field_link"></span>
          </span>
          <a href="#" onclick="return sf_ns.show_page('main_field_table', null)"><?php echo $this->_tpl_vars['LANG']['phrase_back_to_field_list']; ?>
</a>
        </div>

        <p>
          <span class="blue large_text" id="multiple_fields_found_field_title"></span>
        </p>

        <table cellpadding="1" cellspacing="1" width="100%">
        <tr>
          <td valign="top" class="bold" width="140"><?php echo $this->_tpl_vars['LANG']['phrase_action_needed']; ?>
</td>
          <td><div id="multiple_fields_found_action_needed"></div></td>
        </tr>
        </table>

        <table cellpadding="0" cellspacing="1" class="list_table margin_top margin_bottom" style="width:100%" id="multiple_fields_found_table">
        <tbody>
          <tr><td></td></tr>
        </tbody>
        </table>

        <br />

        <div class="margin_bottom_large pad_left_small pad_right_small" style="background-color: #efefef; border-top: 2px solid #cccccc; border-bottom: 2px solid #cccccc;">
          <span style="float:right">
            <span class="previous_field_link" id="multiple_fields_found_previous_field_link2"></span> |
            <span class="next_field_link" id="multiple_fields_found_next_field_link2"></span>
          </span>
          <a href="#" onclick="return sf_ns.show_page('main_field_table', null)"><?php echo $this->_tpl_vars['LANG']['phrase_back_to_field_list']; ?>
</a>
        </div>

      </div>

      <div id="not_found" style="display:none">

        <div class="margin_bottom_large pad_left_small pad_right_small" style="background-color: #efefef; border-top: 2px solid #cccccc; border-bottom: 2px solid #cccccc;">
          <span style="float:right">
            <span class="previous_field_link" id="not_found_previous_field_link"></span> |
            <span class="next_field_link" id="not_found_next_field_link"></span>
          </span>
          <a href="#" onclick="return sf_ns.show_page('main_field_table', null)"><?php echo $this->_tpl_vars['LANG']['phrase_back_to_field_list']; ?>
</a>
        </div>

        <p>
          <span class="blue large_text" id="not_found_field_title"></span>
        </p>

        <table cellpadding="1" cellspacing="1" width="100%">
        <tr>
          <td valign="top" class="bold" width="140"><?php echo $this->_tpl_vars['LANG']['phrase_action_needed']; ?>
</td>
          <td><div id="not_found_action_needed"></div></td>
        </tr>
        <tr>
          <td><?php echo $this->_tpl_vars['LANG']['phrase_field_type']; ?>
</td>
          <td>
            <select id="not_found_field_type">
              <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select']; ?>
</option>
              <option value="textbox"       ><?php echo $this->_tpl_vars['LANG']['word_textbox']; ?>
</option>
              <option value="textarea"      ><?php echo $this->_tpl_vars['LANG']['word_textarea']; ?>
</option>
              <option value="password"      ><?php echo $this->_tpl_vars['LANG']['word_password']; ?>
</option>
              <option value="file"          ><?php echo $this->_tpl_vars['LANG']['word_file']; ?>
</option>
              <option value="select"        ><?php echo $this->_tpl_vars['LANG']['word_dropdown']; ?>
</option>
              <option value="multi-select"  ><?php echo $this->_tpl_vars['LANG']['phrase_multi_select_dropdown']; ?>
</option>
              <option value="radio-buttons" ><?php echo $this->_tpl_vars['LANG']['phrase_radio_buttons']; ?>
</option>
              <option value="checkboxes"    ><?php echo $this->_tpl_vars['LANG']['word_checkboxes']; ?>
</option>
            </select>
          </td>
        </tr>
        <tr>
          <td> </td>
          <td>
            <p>
              <input type="button" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" onclick="sf_ns.choose_field_type()" />
              <input type="button" value="<?php echo $this->_tpl_vars['LANG']['phrase_skip_field']; ?>
" onclick="sf_ns.skip_field()" />
            </p>
          </td>
        </tr>
        </table>

        <div class="margin_bottom_large pad_left_small pad_right_small" style="background-color: #efefef; border-top: 2px solid #cccccc; border-bottom: 2px solid #cccccc;">
          <span style="float:right">
            <span class="previous_field_link" id="not_found_previous_field_link2"></span> |
            <span class="next_field_link" id="not_found_next_field_link2"></span>
          </span>
          <a href="#" onclick="return sf_ns.show_page('main_field_table', null)"><?php echo $this->_tpl_vars['LANG']['phrase_back_to_field_list']; ?>
</a>
        </div>
      </div>

    </form>

    <?php $_from = $this->_tpl_vars['form_urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['url']):
        $this->_foreach['row']['iteration']++;
?>
      <?php $this->assign('row_count', $this->_foreach['row']['iteration']); ?>
      <iframe name="form_<?php echo $this->_tpl_vars['row_count']; ?>
_iframe" id="form_<?php echo $this->_tpl_vars['row_count']; ?>
_iframe" src="<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/code/actions.php?action=smart_fill&scrape_method=<?php echo $this->_tpl_vars['scrape_method']; ?>
&url=<?php echo $this->_tpl_vars['url']; ?>
" style="width: 0px; height: 0px" frameborder="0" onload="sf_ns.log_form_page_as_loaded(<?php echo $this->_tpl_vars['row_count']; ?>
)"></iframe>
    <?php endforeach; endif; unset($_from); ?>


    <div id="multiple_fields_not_found_single_page_form" style="display:none">
      <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found']; ?>

      <ol>
        <li><?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found2']; ?>
<br />
          <b><?php echo $this->_tpl_vars['LANG']['word_solution']; ?>
</b>: <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found3']; ?>
</li>
        <li><?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found4']; ?>
<br />
          <b><?php echo $this->_tpl_vars['LANG']['word_solution']; ?>
</b>: <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found5']; ?>
</li>
        <li><?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found6']; ?>
<br />
          <b><?php echo $this->_tpl_vars['LANG']['word_solution']; ?>
</b>: <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found7']; ?>
</li>
      </ol>
      <?php echo $this->_tpl_vars['text_add_form_field_types_multiple_fields_found8']; ?>

    </div>

    <div id="multiple_fields_not_found_multi_page_form" style="display:none">
      <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found9']; ?>

      <ol>
        <li><?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found10']; ?>
<br />
          <b><?php echo $this->_tpl_vars['LANG']['word_solution']; ?>
</b>: <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found3']; ?>
</li>
        <li><?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found4']; ?>
<br />
          <b><?php echo $this->_tpl_vars['LANG']['word_solution']; ?>
</b>: <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found5']; ?>
</li>
        <li><?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found11']; ?>
<br />
          <b><?php echo $this->_tpl_vars['LANG']['word_solution']; ?>
</b>: <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_multiple_fields_found7']; ?>
</li>
      </ol>
      <?php echo $this->_tpl_vars['text_add_form_field_types_multiple_fields_found8']; ?>

    </div>

    <div id="upload_files_text" style="display:none">
      <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_manual_upload']; ?>


      <form action="<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/code/actions.php?action=upload_scraped_pages_for_smart_fill"
        target="upload_files_iframe" method="post" enctype="multipart/form-data"
        onsubmit="return sf_ns.validate_upload_files(this)">
        <input type="hidden" name="num_pages" value="<?php echo count($this->_tpl_vars['form_urls']); ?>
" />

        <table cellspacing="0" cellpadding="0" class="margin_top margin_bottom">
        <?php $_from = $this->_tpl_vars['form_urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['url']):
        $this->_foreach['row']['iteration']++;
?>
          <?php $this->assign('row_count', $this->_foreach['row']['iteration']); ?>
          <tr>
            <td width="90"><?php echo $this->_tpl_vars['LANG']['phrase_form_page']; ?>
 <?php echo $this->_tpl_vars['row_count']; ?>
</td>
            <td><input type="file" name="form_page_<?php echo $this->_tpl_vars['row_count']; ?>
" /></td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr>
          <td> </td>
          <td><input type="submit" value="<?php echo $this->_tpl_vars['LANG']['phrase_upload_files']; ?>
" class="margin_top_small" /></td>
        </tr>
        </table>
      </form>
      <?php echo $this->_tpl_vars['LANG']['text_add_form_field_types_manual_upload2']; ?>

    </div>

  <iframe name="upload_files_iframe" id="upload_files_iframe" src="" style="width: 0px; height: 0px" frameborder="0"
    onload="sf_ns.log_files_as_uploaded()"></iframe>

<?php echo smarty_function_ft_include(array('file' => 'footer.tpl'), $this);?>
