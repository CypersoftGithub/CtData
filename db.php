 <?php
 $serverName = "mssql-182691-0.cloudclusters.net,10032";
 $database = "CtData";
 $uid = "CtStock";
$pass = "Deep@0868";

$connection = [
"Database" => $database,
"Uid" => $uid,
"PWD" => $pass
 ]; 


$conn = sqlsrv_connect($serverName, $connection);

 if(!$conn) {
    echo "<pre>";
    die(print_r(sqlsrv_errors(),true));
 }
 
$tsql = "select * from DesignName";

$stmt = sqlsrv_query($conn,$tsql);

if($stmt == false) {
    echo 'error';
}
while($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
    //echo $obj['DesignName'];
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);

?>