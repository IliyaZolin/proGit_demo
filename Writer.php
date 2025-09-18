<?php

class Writer
{
  private const FILE_DIR = 'data';
  private const FILE_EXT = 'txt';


  public function save($text)
  {
    file_put_contents( self::FILE_DIR . '/' . $this->getFilename(), serialize($text->toArray()));
  }

  private function getFilename(): string
  {
    $files = scandir(self::FILE_DIR);
    $i = 1;

    foreach ($files as $file) {
      if ($file == '..' || $file == '.') {
        continue;
      }

      $i++;
    }

    return $i . '.' . self::FILE_EXT;
  }
}
