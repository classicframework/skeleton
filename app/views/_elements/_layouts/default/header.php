<h1>
  <?php echo htmlspecialchars((string)(isset($title) ? $title : \classicframework\core\Config::get('_app_name', '')), ENT_QUOTES, 'UTF-8'); ?>
</h1>