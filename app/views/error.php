<?php

$error_code = isset($error_code) ? (int) $error_code : 500;
$error_message = isset($error_message) ? (string) $error_message : 'Error';

?>
<!doctype html>
<html lang="<?php echo htmlspecialchars(\classicframework\core\Config::get('_app_locale', 'en'), ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="utf-8">
  <title><?php echo $error_code; ?> <?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="robots" content="noindex, nofollow">
</head>
<body>
<h1><?php echo $error_code; ?></h1>
<p><?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>