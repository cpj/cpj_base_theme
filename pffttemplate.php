<?php
function cpj_base_theme_preprocess_node($variables) {
  $variables['submitted'] = t('!username || !datetime', array('!username' => $variables['name'], '!datetime' => $variables['date']));
}

function cpj_base_theme_preprocess_comment($variables) {
  $variables['submitted'] = t('!username || !datetime', array('!username' => $variables['name'], '!datetime' => $variables['date']));
}
