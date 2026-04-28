<?php

namespace app\controllers;

class PagesController extends _AppController
{
  public function index()
  {
    $entries = $this->db->rows("SELECT id FROM " . $this->db->table('entries'));

    return $this->render('pages/index', compact('entries'));
  }
}