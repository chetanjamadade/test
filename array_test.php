<?php
$p="product_listItem[889]=435&product_listItem[868]=434&product_listItem[888]=433&product_listItem[869]=432&product_listItem[890]=431&product_listItem[867]=430&product_listItem[866]=429&product_listItem[863]=428&";
$product_listItem=@explode("&",$p);
/*$product_listItem=array(
	'product_listItem[889]=435',
    'product_listItem[868]=434',
    'product_listItem[888]=433',
    'product_listItem[869]=432',
    'product_listItem[890]=431',
    'product_listItem[867]=430',
    'product_listItem[866]=429',
    'product_listItem[863]=428'
    );*/
echo "<pre>";print_r($product_listItem); 
$product_list_key=array();
foreach($product_listItem as $key=>$value){
	if($value==""){continue;}
	$key_val=str_replace("[","",substr(strstr($value, '['), 0, strpos(strstr($value, '['),']=')));
	$product_list_key[$key_val]=str_replace(']=','',strstr($value, ']='));
	
}
echo "<pre>";print_r($product_list_key);
?>
