<?php
// �������ݿ�
$myData = mysqli_connect ( "localhost", "root", "admin" );
if (mysqli_connect_errno ()) {
	echo mysqli_connect_error ();
	return;
}
// ѡ�����ݿ�
mysqli_query ( $myData, "set names utf8" );
mysqli_select_db ( $myData, "myscoresdb" );

// ��ѯ
$sql = "select *from hiscores order by score desc limit 20";
$result = mysqli_query ( $myData, $sql ) or die ( "<br>SQL error!<br>" );
$num_result = mysqli_num_rows ( $result );
// ׼���������ݵ�Unity
$arr = array ();
// ����ѯ���д�뵽Json��ʽ��������
for($i = 0; $i < $num_result; $i ++) {
	$row = mysqli_fetch_array ( $result, MYSQLI_ASSOC );
	$id = $row ['id'];
	$name = $row ['name'];
	$score = $row ['score'];
	$arr [$id] ['id'] = $id;
	$arr [$id] ['username'] = $name;
	$arr [$id] ['score'] = $score;
}
mysqli_free_result ( $result );
// �ر����ݿ�
mysqli_close ( $myData );
// ����Json��ʽ������
echo json_encode ( $arr );