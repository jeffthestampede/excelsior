<?php /* Smarty version 2.6.18, created on 2016-05-18 22:45:46
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_main.tpl', 2, false),array('modifier', 'escape', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_main.tpl', 18, false),array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_main.tpl', 43, false),array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/forms/field_option_groups/tab_main.tpl', 4, false),)), $this); ?>
  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post" onsubmit="return sf_ns.submit_update_field_option_group_page()">
    <input type="hidden" name="num_rows" id="num_rows" value="<?php echo count($this->_tpl_vars['group_info']['options']); ?>
" />

    <?php echo smarty_function_ft_include(array('file' => 'messages.tpl'), $this);?>


    <?php if ($this->_tpl_vars['num_fields_using_group'] > 1): ?>
	    <div class="notify margin_bottom">
	      <div style="padding:6px">
	        <?php echo $this->_tpl_vars['text_field_option_group_used_by_fields']; ?>

	      </div>
	    </div>
	  <?php endif; ?>

    <table cellspacing="1" cellpadding="1">
    <tr>
      <td valign="top" width="130" class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['phrase_group_name']; ?>
</td>
      <td>
        <input type="text" name="group_name" id="group_name" style="width:300px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['group_info']['group_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
        <div class="light_grey"><?php echo $this->_tpl_vars['LANG']['text_group_name_explanation']; ?>
</div>
      </td>
    </tr>
    <tr>
      <td valign="top" class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['phrase_field_orientation']; ?>
</td>
      <td>
        <input type="radio" name="field_orientation" id="o1" value="horizontal" <?php if ($this->_tpl_vars['group_info']['field_orientation'] == 'horizontal'): ?>checked<?php endif; ?> />
          <label for="o1"><?php echo $this->_tpl_vars['LANG']['word_horizontal']; ?>
</label>
        <input type="radio" name="field_orientation" id="o2" value="vertical" <?php if ($this->_tpl_vars['group_info']['field_orientation'] == 'vertical'): ?>checked<?php endif; ?> />
          <label for="o2"><?php echo $this->_tpl_vars['LANG']['word_vertical']; ?>
</label>
        <input type="radio" name="field_orientation" id="o3" value="na" <?php if ($this->_tpl_vars['group_info']['field_orientation'] == 'na'): ?>checked<?php endif; ?> />
          <label for="o3"><?php echo $this->_tpl_vars['LANG']['word_na']; ?>
</label>

        <div class="light_grey"><?php echo $this->_tpl_vars['LANG']['text_field_orientation_explanation']; ?>
</div>
      </td>
    </tr>
    </table>

    <table cellspacing="1" cellpadding="0" id="field_options_table" class="list_table margin_bottom_large">
    <tbody>
      <tr>
        <th width="40"> </th>
        <th><?php echo $this->_tpl_vars['LANG']['phrase_field_value']; ?>
</th>
        <th><?php echo $this->_tpl_vars['LANG']['phrase_display_text']; ?>
</th>
        <th class="del" width="70"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_delete'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
      </tr>
      <?php $_from = $this->_tpl_vars['group_info']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['row']['iteration']++;
?>
        <?php $this->assign('count', $this->_foreach['row']['iteration']); ?>
	      <tr id="row_<?php echo $this->_tpl_vars['count']; ?>
">
	        <td class="medium_grey" align="center" id="field_option_<?php echo $this->_tpl_vars['count']; ?>
_order"><?php echo $this->_tpl_vars['count']; ?>
</td>
	        <td><input type="text" style="width:98%" name="field_option_value_<?php echo $this->_tpl_vars['count']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['option_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
	        <td><input type="text" style="width:98%" name="field_option_text_<?php echo $this->_tpl_vars['count']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['option_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
	        <td align="center" class="del"><a href="#" onclick="sf_ns.delete_field_option(<?php echo $this->_tpl_vars['count']; ?>
)"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_delete'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</a></td>
	      </tr>
      <?php endforeach; endif; unset($_from); ?>
    </tbody>
    </table>

    <div class="margin_bottom_large">
      <input type="button" value="<?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
" onclick="sf_ns.add_field_option(null, null)" />
      <input type="submit" name="update" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" />
    </div>

  </form>

    <div class="box">
      <div id="smart_fill_messages"></div>

	    <table cellspacing="1" cellpadding="0" width="100%" class="margin_bottom_large" height="40">
	    <tr>
	      <td> </td>
	      <td class="light_grey"><?php echo $this->_tpl_vars['LANG']['phrase_form_field_name']; ?>
</td>
	      <td class="light_grey"><?php echo $this->_tpl_vars['LANG']['phrase_form_url']; ?>
</td>
	      <td colspan="2"> </td>
	    </tr>
	    <tr>
	      <td nowrap><?php echo $this->_tpl_vars['LANG']['phrase_smart_fill_fields_from_c']; ?>
</td>
	      <td><input type="text" id="smart_fill_source_form_field" style="width:150px" /></td>
	      <td><input type="text" id="smart_fill_source_url" style="width:250px" /></td>
	      <td><input type="button" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_smart_fill'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" onclick="sf_ns.smart_fill_field()" /></td>
	      <td width="50" align="center">
	        <div id="ajax_activity" style="display:none"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/ajax_activity_yellow.gif" /></div>
	        <div id="ajax_no_activity"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/ajax_no_activity_yellow.gif" /></div>
	      </td>
	    </tr>
	    </table>
    </div>

    <div class="margin_top_large">
      <div style="float:right"><a href="http://docs.formtools.org/userdoc/index.php?page=fog_editing" target="_blank"><?php echo $this->_tpl_vars['LANG']['phrase_smart_fill_user_documentation']; ?>
</a></div>
    </div>



  <div id="upload_files_text" style="display:none">
    We were unable to Smart Fill your field options. However, as an alternative, you can try uploading
    a copy of your form page in the field below. Note: do <b>not</b> upload raw PHP pages (or other
    server-side code) - just upload the HTML version. To get this, view and save the page from your web browser.

    <form action="<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/code/actions.php?action=upload_scraped_page_for_smart_fill"
      target="hidden_iframe" method="post" enctype="multipart/form-data"
      onsubmit="return sf_ns.validate_upload_file(this)">
      <input type="hidden" name="num_pages" value="1" />

	    <table cellspacing="0" cellpadding="0" class="margin_top margin_bottom">
	    <tr>
	      <td width="90"><?php echo $this->_tpl_vars['LANG']['word_page']; ?>
</td>
	      <td><input type="file" name="form_page_1" /></td>
	    </tr>
	    <tr>
	      <td> </td>
	      <td><input type="submit" value="<?php echo $this->_tpl_vars['LANG']['phrase_upload_file']; ?>
" class="margin_top_small" /></td>
	    </tr>
	    </table>
	  </form>
  </div>


  <iframe name="hidden_iframe" id="hidden_iframe" src="" style="width: 0px; height: 0px" frameborder="0"
    onload="sf_ns.log_form_page_as_loaded()"></iframe>

