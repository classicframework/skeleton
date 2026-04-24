<?php

namespace app\controllers;

use classicframework\core\Controller;

class _AppController extends Controller
{
  protected function _before_filter()
  {
    if ($this->config('database_enabled', false) !== true) {
      return null;
    }

    $db = $this->service('db');

    if (!is_object($db) || !method_exists($db, 'connect')) {
      return $this->system_error('Database service is missing. Please check your database configuration.');
    }

    try {
      $db->connect();
    } catch (\Exception $e) {
      return $this->system_error(
        'MySQL connection failed. Please set the database configuration variables correctly.'
      );
    }

    if ($this->config('migration_enabled', false) === true) {
      try {
        if (method_exists($db, 'table_exists') && !$db->table_exists('migrations')) {
          $migration = $this->service('migration');

          if (!is_object($migration) || !method_exists($migration, 'up')) {
            return $this->system_error('Migration service is missing.');
          }

          $migration->up($db);
        }
      } catch (\Exception $e) {
        return $this->system_error('Migration failed: ' . $e->getMessage());
      }
    }

    return null;
  }

  protected function system_error($message)
  {
    if (!headers_sent()) {
      http_response_code(500);
      header('X-Robots-Tag: noindex, nofollow', true);
    }

    return htmlspecialchars((string) $message, ENT_QUOTES, 'UTF-8');
  }
}