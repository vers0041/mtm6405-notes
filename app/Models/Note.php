<?php

namespace App\Models;

class Note
{
  private static $notes = [
      [
          'id' => 1,
          'title' => 'Note 1',
          'text' => 'This is note 1',
          'created_at' => '2022-02-28 16:56:03',
          'updated_at' => '2022-02-28 16:56:03'
      ],
      [
          'id' => 2,
          'title' => 'Note 2',
          'text' => 'This is note 2',
          'created_at' => '2022-02-28 17:01:13',
          'updated_at' => '2022-02-28 17:01:13'
      ]
  ];

  public static function all () {
      return self::$notes;
  }

  public static function find ($id) {
      return array_values(array_filter(self::$notes, 
          fn($note) => $note['id'] == $id))[0];
  }
}