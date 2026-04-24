<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo isset($title) ? htmlspecialchars($title, ENT_QUOTES, 'UTF-8') : 'Skeleton'; ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php echo $this->fetch('script'); ?>
  <?php echo $this->fetch('meta'); ?>
  <?php echo $this->fetch('css'); ?>
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

<?php echo $this->fetch('script', true); ?>
</body>
</html>