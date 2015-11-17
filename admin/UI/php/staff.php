<?php //
$data = array();

$data[] = array(
      "DT_RowId" => "row_1",
      "first_name" =>  "Tiger",
      "last_name"=>  "Nixon",
      "position"=>  "System Architect",
      "email"=>  "t.nixon@datatables.net",
      "office"=>  "Edinburgh",
      "extn"=>  "5421",
      "age"=>  "61",
      "salary"=>  "320800",
      "start_date"=>  "2011-04-25"
);

echo json_encode($data);
?>