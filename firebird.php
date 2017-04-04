<?php
$host = '172.16.1.184/3050:D:\FOODB\primedb.fdb';
$user = 'sysdba';
$psw = 'masterkey';
if($conn = ibase_connect($host,$user,$psw)){
	//echo "Connected to the Database";
	ibase_close($conn);	
}else{
	echo "Connection failed. ".ibase_errmsg();
}

$querybaru = "SELECT 
				min(a.MBTRANSDATE) as mina,
				max(a.MBTRANSDATE) as maxa FROM MBTRANS a
				where a.MBTRANSDATE >= '01.01.2016'";
$sth = ibase_query($conn,$querybaru);


$sth = ibase_fetch_assoc($sth);
//check($sth);
var_dump($sth);

function check($sth){
	if(!ibase_fetch_assoc($sth)){
		return;
	}else{
		var_dump($sth);
	}
}



//e06bf421-0f2c-4116-81a1-6fa7d3833b98


/*
$count = 0;
while ($row[$count] = ibase_fetch_assoc($sth))
    $count++;

for ($i=0; $i < $count; $i++) { 
	echo $row[$i]["MBTRANSNO"]."<br>";

}*/

//print_r($row);




?>

