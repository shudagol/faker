<?php 

require_once 'vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create('id_ID');


$created_date = date("Y-m-d H:i:s");

error_reporting();
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);
mysql_select_db('suport');

// $sql= "insert into issue(judul,isi,user_id,tgl) values('$faker->email','$faker->realText;','$random','$faker->date')";
// mysql_query($sql);



for ($i=0; $i < 500; $i++) { 
	$random = (rand(1,5));
	$rand = (rand(1,5));

	$judul =  $faker->sentence;
	$isi = $faker->text;
	$sql= "insert into issue(judul,isi,user_id,created_at,tgl,status,id_kategori) values('$judul','$isi','$random','$created_date',NOW(),'open',$rand)";
$insert = mysql_query($sql);
}

