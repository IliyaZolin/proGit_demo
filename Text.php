<?php

class Text
{
  private $title;
  private $description;
  private $date;


  public function __construct(array $post)
  {
    $this->title = $post['title'];
    $this->description = $post['description'];
    $this->date = date('d-m-Y H:i:s');
  }


  public function toArray() :array
  {
    return [
      'title' => $this->title,
      'description' => $this->description,
      'date' => $this->date,
    ];
  }


}