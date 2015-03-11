<?php
session_start();
//echo $_SERVER['HTTP_REFERER']."----";

$timesjobs="http://www.timesjobs.com/candidate/JobDetailView.html?adId=LFqPJZ06wMhzpSvf__PLUS__uAgZw==&bc=INT&from=submit&searchName=inner&fnm=TJAJD&utm_source=ja_jd&utm_medium=email&utm_campaign=tj_jobAlert";

$facebook="http://lm.facebook.com/l.php?u=http%3A%2F%2Fwww.mithi.com%2Fapply-now.html&h=aAQGWDQbP&enc=AZPxaPVuwoKskj85IBPWm6DN9B1_XheonyKE2EQLBbELJF-5RBJ9gyp8KGTjw6ZGrjJtL_zmh5uWyN4i1gYhmkis&s=1";

$mailer="http://www.mithi.com/fileadmin/template/mailers/press_release_mailer_jul14.html";

$searchengine="http://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0CB8QFjAA&url=http%3A%2F%2Fwww.mithi.com%2Fproduct-overview.html&ei=6jQZVPeJIsePuAS9toCYAg&usg=AFQjCNF-AE7rcTdAw6w5s-9Mn-h_IVUYhQ&bvm=bv.75558745,d.c2E&cad=rja";

/*$chksite=strpos($_SERVER['HTTP_REFERER'],'//www.mithi.com/');
$chkblog=strpos($_SERVER['HTTP_REFERER'],'blog');
$chkgoogle=strpos($_SERVER['HTTP_REFERER'],'google');
$chkfacebook=strpos($_SERVER['HTTP_REFERER'],'facebook');
$chkyoutube=strpos($_SERVER['HTTP_REFERER'],'youtube');
$chklinkedin=strpos($_SERVER['HTTP_REFERER'],'linkedin');
$chkslideshare=strpos($_SERVER['HTTP_REFERER'],'slideshare');
$chkmailer=strpos($_SERVER['HTTP_REFERER'],'/mailers/');
$chkgmailer=strpos($_SERVER['HTTP_REFERER'],'gmail');*/

/*$chksite=strpos($timesjobs,'//www.mithi.com/');
$chkblog=strpos($timesjobs,'blog');
$chkgoogle=strpos($timesjobs,'google');
$chkfacebook=strpos($timesjobs,'facebook');
$chkyoutube=strpos($timesjobs,'youtube');
$chklinkedin=strpos($timesjobs,'linkedin');
$chkslideshare=strpos($timesjobs,'slideshare');
$chkmailer=strpos($timesjobs,'/mailers/');
$chkgmailer=strpos($timesjobs,'gmail');*/

/*$chksite=strpos($facebook,'//www.mithi.com/');
$chkblog=strpos($facebook,'blog');
$chkgoogle=strpos($facebook,'google');
$chkfacebook=strpos($facebook,'facebook');
$chkyoutube=strpos($facebook,'youtube');
$chklinkedin=strpos($facebook,'linkedin');
$chkslideshare=strpos($facebook,'slideshare');
$chkmailer=strpos($facebook,'/mailers/');
$chkgmailer=strpos($facebook,'gmail');*/


/*
$chksite=strpos($mailer,'//www.mithi.com/');
$chkblog=strpos($mailer,'blog');
$chkgoogle=strpos($mailer,'google');
$chkfacebook=strpos($mailer,'facebook');
$chkyoutube=strpos($mailer,'youtube');
$chklinkedin=strpos($mailer,'linkedin');
$chkslideshare=strpos($mailer,'slideshare');
$chkmailer=strpos($mailer,'/mailers/');
$chkgmailer=strpos($mailer,'gmail');*/

$chksite=strpos($searchengine,'//www.mithi.com/');
$chkblog=strpos($searchengine,'blog');
$chkgoogle=strpos($searchengine,'google');
$chkfacebook=strpos($searchengine,'facebook');
$chkyoutube=strpos($searchengine,'youtube');
$chklinkedin=strpos($searchengine,'linkedin');
$chkslideshare=strpos($searchengine,'slideshare');
$chkmailer=strpos($searchengine,'/mailers/');
$chkgmailer=strpos($searchengine,'gmail');

echo "Site==".$chksite."<br>";
echo "Blog==".$chkblog."<br>";
echo "Google==".$chkgoogle."<br>";
echo "Facebook==".$chkfacebook."<br>";
echo "Youtube==".$chkyoutube."<br>";
echo "Linkedin==".$chklinkedin."<br>";
echo "Slideshare==".$chkslideshare."<br>";
echo "Mailer==".$chkmailer."<br>";
echo "GMailer==".$chkgmailer."<br>";

if(!$_SESSION['lead_source_ref_option']){
	if($chksite && !$chkblog){
		$_SESSION['lead_source_ref_option']='Website';
	}
	if($chksite && $chkblog){
		$_SESSION['lead_source_ref_option']='Blog';
	}
	if ($chkgoogle){
		$_SESSION['lead_source_ref_option']='Search Engine';
	}
	if ($chkfacebook){
		$_SESSION['lead_source_ref_option']='Facebook';
	}
	if ($chkyoutube){
		$_SESSION['lead_source_ref_option']='Youtube';
	}
	if ($chklinkedin){
		$_SESSION['lead_source_ref_option']='Linkedin';
	}
	if ($chkslideshare){
		$_SESSION['lead_source_ref_option']='Slideshare';
	} 
	if ($chkmailer && $chksite){
		$_SESSION['lead_source_ref_option']='Mailer';
	}
	if(!$chksite && !$chkblog && !$chkgoogle && !$chkfacebook && !$chkyoutube && !$chklinkedin && !$chkmailer){
		$_SESSION['lead_source_ref_option']='Other';
	}
} 
echo "<br>".$_SESSION['lead_source_ref_option'];
