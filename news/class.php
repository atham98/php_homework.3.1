<?php 

class News
{
	public $title;
	public $date;
	public $content;
	public $source;

	public function __construct($title, $date, $content, $source)
	{
		$this->title = $title;
		$this->date = $date;
		$this->content = $content; 
		$this->source = $source;
	}
	public function getTitle(){
		return $this->title;
	}
	public function getDate(){
		return $this->date;
	}
	public function getContent(){
		return $this->content;
	}
	public function getSource(){
		return $this->source;
	}
}