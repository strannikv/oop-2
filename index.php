<?php

class Page {
	
	public $title;
	public $content;
	public $footer;
	
	public function __construct($t,$c,$f) {
		$this->title = $t;
		$this->content = $c;
		$this->footer = $f;
		
	}
	
	public function render_body() {
		$str = '<h1>'.$this->title.'</h1>';
		$str .= '<p>'.$this->content."</p>";
		$str .= "<p style='font-size=8px'>".$this->footer."</p>";
		
		return $str;
	}
	
	public function test() {
		return $this->render_body();
	} 
	
	
}

class Index extends Page {
	public $slide;
	public $news;
	
	public function __construct($t,$c,$f,$s,$n) {
		parent::__construct($t,$c,$f);
		$this->slide = $s;
		$this->news = $n;
		
	}
	
	public function render_body() {
		$str = parent::render_body();
		$str.="<p>".$this->slide."</p>";
		$str.="<p>".$this->news."</p>";
		
		return $str;
	}
	
	
}

//$page = new Page("Прувеет!", "Я страница", "Футер");
//echo $page->render_body();
//
//$index = new Page("Прувеет!", "Я индекс", "Футер2");
//echo $index->render_body();

//exit();

class Poly {
	public $ob;
	
	public function get_ob(Page $var) {
		$this->ob[] = $var;
	}
	
	public function get_result() {
		foreach($this->ob as $item) {
			echo $item->test();
		}
	}
}


//exit();

class X {
	public function get() {
		echo 'This is X';
	}
	
	public function render() {
		$this->get();
	}
}

class Y extends X {
	public function get() {
		echo 'This is Y';
	}
}

$x = new X();
$y = new Y();

$x->get();
$x->render();
$y->get();
$y->render();


class spec {
	public $a;
	protected $_b='spec';
	private $_c = 'private';
	private $db;
	
	protected function connect() {
		$this->db = mysql_connect('host','iser','123');
	}
}

class test extends spec {
	public function get2() {
		echo $this->c;
	}
}

$spec = new spec();
$test  = new test();

//$spec->get();
//echo '1';
$test->get2();
//echo '1'; 

//$poly = new Poly();
//
//$page = new Page('Page','hello i am page','footer');
//echo $page->render_body();
//
//$index = new Index ('INDEX','HELLO I am index','footer','slide_show','news');
//echo $index->render_body();
//
//$poly->get_ob($page);
//$poly->get_ob($index);

//$poly->get_result();

//echo $index->render_body();


?>