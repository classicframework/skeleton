<?php
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
  require __DIR__ . '/vendor/autoload.php';
  return;
}

spl_autoload_register(function ($class) {
  if (strpos($class, 'classicframework\\') !== 0 && strpos($class, 'app\\') !== 0) {
    return;
  }

  if (strpos($class, 'app\\') === 0) {
    $relative = substr($class, 4);
    $file = __DIR__ . '/app/' . str_replace('\\', '/', $relative) . '.php';

    if (file_exists($file)) {
      require $file;
    }

    return;
  }

  $parts = explode('\\', $class);

  if (count($parts) < 3) {
    return;
  }

  $package = $parts[1];

  $relative_parts = array_slice($parts, 2);
  $relative_path = implode('/', $relative_parts);

  $file = __DIR__ . '/classicframework/' . $package . '/src/' . $relative_path . '.php';

  if (file_exists($file)) {
    require $file;
  }
});