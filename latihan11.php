<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=latihan;host=localhost';
$user = 'root';
$password = '';

// $dbh = new PDO($dsn, $user, $password);
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,TRUE);
    echo 'Alhamdulillah Sukses Koneksi Database';
}
catch( PDOException $e) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    echo 'Gagal Koneksi Database Karena '.$e->getMessage();
}
?>