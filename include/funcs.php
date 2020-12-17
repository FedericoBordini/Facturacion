<?php
function drop_down($dropdown_name,$table,$value_field,$option_field,$selected=0){
  $options = get_dropdown_options($table,$value_field,$option_field);
  echo "<select name='{$dropdown_name}'>";
  foreach( $options as $option ){
    echo "<option value='{$option["value_field"]}' ";
    if( $selected==$option["value_field"] )
      echo "selected";
    echo ">{$option["option_field"]}</option>";
  }
  echo "</select>";
}

function get_dropdown_options($table,$value_field,$option_field){
  global $link;
  $ret = array();
  $query = "SELECT $value_field as value_field, $option_field as option_field FROM $table";
 
  $res=mysqli_query($link , $query);
  while($row = mysqli_fetch_array($res) )
    $ret[] = array("value_field"=>$row["value_field"],"option_field"=>$row["option_field"]);
  return $ret;
}
?>