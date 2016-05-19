  <div class="previous_page_icon">
    <a href="index.php?page=themes"><img src="{$images_url}/up.jpg" title="{$LANG.phrase_previous_page}" alt="{$LANG.phrase_previous_page}" border="0" /></a>
  </div>

  <div class="subtitle underline margin_top_large">{$LANG.phrase_theme_info|upper}</div>

  {ft_include file='messages.tpl'}

  <table cellspacing="1" cellpadding="1" class="list_table">
  <tr>
    <td width="140" class="pad_left_small">{$LANG.word_theme}</td>
    <td class="pad_left_small bold">{$theme_info.theme_name}</td>
  </tr>
  <tr>
    <td class="pad_left_small">{$LANG.phrase_theme_description}</td>
    <td class="pad_left_small">{$theme_info.description}</td>
  </tr>
  <tr>
    <td class="pad_left_small">{$LANG.word_author}</td>
    <td class="pad_left_small">{$theme_info.author}
      {if $theme_info.author_email != ''}
        &#8212; <a href="mailto:{$theme_info.author_email}">{$theme_info.author_email}</a>
      {/if}
    </td>
  </tr>
  {if $theme_info.theme_link != ''}
    <tr>
      <td class="pad_left_small">{$LANG.phrase_author_link}</td>
      <td class="pad_left_small"><a href="{$theme_info.theme_link}" target="_blank">{$theme_info.theme_link}</a></td>
    </tr>
  {/if}
  <tr>
    <td class="pad_left_small">{$LANG.word_version}</td>
    <td class="pad_left_small">{$theme_info.theme_version}</td>
  </tr>
  <tr>
    <td class="pad_left_small">{$LANG.phrase_form_tools_compatibility}</td>
    <td class="pad_left_small">{$theme_info.supports_ft_versions}</td>
  </tr>
  </table>

  <p>
    <a href="index.php">{$LANG.word_back_leftarrow}</a>
  </p>
