<?php
// �����û����ͷ���
$UserID = $_POST ["username"];
$hiscore = $_POST ["score"];

// �������ݿ�
$myData = mysqli_connect ( "localhost", "root", "admin" );
if (mysqli_connect_errno ()) {
	echo mysqli_connect_error ();
	return;
}
// У�����û����Ƿ�Ϸ�����ֹSQLע�룩
$UserID = mysqli_real_escape_string ( $myData, $UserID );

// ѡ�����ݿ�
mysqli_query ( $myData, "set names utf8" );
mysqli_select_db ( $myData, "myscoresdb" );

// ��������
$sql = "insert into hiscores value(NULL,'$UserID','$hiscore')";
mysqli_query ( $myData, $sql );

// �ر����ݿ�
mysqli_close ( $myData );
echo 'upload' . $UserID . ":" . $hiscore;
?>