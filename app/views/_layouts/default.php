<!doctype html>
<html lang="<?php echo htmlspecialchars(\classicframework\core\Config::get('_app_locale', 'en'), ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars((string)(isset($title) ? $title : \classicframework\core\Config::get('_app_name', '')), ENT_QUOTES, 'UTF-8'); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php echo $this->fetch('meta'); ?>
  <?php echo $this->fetch('css'); ?>
  <?php echo $this->fetch('script_head'); ?>
</head>
<body class="<?php echo isset($body_class) ? htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8') : ''; ?>">

<header>
  <?php echo $this->element('_layouts/default/header'); ?>
</header>

<main>
  <?php echo $content; ?>
</main>

<footer>
  <?php echo $this->element('_layouts/default/footer'); ?>
</footer>

<?php echo $this->fetch('script_body'); ?>
</body>
</html>