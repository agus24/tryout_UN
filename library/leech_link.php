<?php
/*
	need install tidy first, because too many invalid html
*/
require("simple_html_dom.php");
$link = "test.html";
$html = file_get_contents($link);

$config = array(
   'indent'         => true,
   //'output-xhtml'   => true,
   'wrap'           => 200);
$tidy = new tidy;
$tidy->parseString($html, $config, 'utf8');
$tidy->cleanRepair();
//echo ($tidy);
$html = str_get_html($html); 
//$html = file_get_html("clean.html"); 
//var_dump( $html);
$data = array();
foreach($html->find('div[class="collapse navbar-collapse main-nav"]') as $e) 
{
	$tmp = array("bidstudi"=>'','smp'=>0);
	foreach($e->find('li') as $f)
	{
		$tmp['bidstudi'] = trim($f->find('a',0)->plaintext);
		$tab = str_replace("#","",$f->find('a',0)->href);
		
	}
}
foreach($html->find('#1') as $e)
{
	foreach($e->find('div[class="col-md-3"]')->$f)
	{
		
	}
}
   // print_r($soal);
?>
