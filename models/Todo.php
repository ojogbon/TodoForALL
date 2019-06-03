<?php
use Todo\models\ConnectDb;

require_once __DIR__.'/ConnectDB.php';

$value = $_GET['userItem'];

/**
 *
 */
class Todo extends ConnectDb
{

  // function __construct(argument)
  // {
  //   // code...
  // }
  public function doSelect ($connect)
  {

    $selectQuery = "select  * from do_todo where status='0'";
    $sql = mysqli_query($connect,$selectQuery);
    $mark = 0;

    while ($data = mysqli_fetch_array($sql)){
           $mark ++;

           $time = explode(" ",$data['date']);

           $check = $data["state"] ? "<input type=\"checkbox\"  name=\"\" data-spec=\"{$data[spec]}\" checked class=\"keep mil-{$mark}\" data-id=\"{$mark}\" value=\"\">" :
           "<input type=\"checkbox\" name=\"\" data-spec=\"{$data[spec]}\"  class=\"done  ind-{$mark}\" data-id=\"{$mark}\" value=\"\">";
           echo "
             <div class=\"mBase\" >

                   <div class=\"forInput\" >
                          {$check}

                   </div>
                   <div class=\"forText\" >
                        <p >{$data[task]}</p>
                   </div>
                   <div class=\"forEditDelete\" >
                        <span>{$time[1]}</span>
                         <div class=\"f-right\">
                             <a href=\"#\" data-toggle=\"modal\" data-spec=\"{$data[spec]}\" data-tak=\"{$data[task]}\" data-target=\"#pop\"  class=\"delete_todolist edit\">
                             <i class=\"icofont icofont-ui-edit\" data-spec=\"{$data[spec]}\" data-tak=\"{$data[task]}\" ></i></a>
                         </div>
                         <div class=\"f-right\">
                             <a href=\"#\" class=\"delete_todolist delete\" data-spec=\"{$data[spec]}\">
                             <i class=\"icofont icofont-ui-delete\" data-spec=\"{$data[spec]}\" ></i></a>
                         </div>
                   </div>

            </div>
         ";
        }
  }

  public function doDelete ($connect,$spec)
  {
    $updateQuery = "UPDATE `do_todo` SET `status`='delete' WHERE spec = '$spec' ";
    $sql = mysqli_query($connect,$updateQuery);

    if ($sql) {
      // code...
      echo "Done";
    }else {
      // code...
      echo "Fail";
    }
  }
  public function doDoneWith ($connect,$spec,$know)
  {
    $updateQuery = "UPDATE `do_todo` SET `state`='$know' WHERE spec = '$spec' ";
    $sql = mysqli_query($connect,$updateQuery);

    if ($sql) {
      // code...
      echo "Done";
    }else {
      // code...
      echo "Fail";
    }
  }
  public function doEditWith ($connect,$spec,$know)
  {
    $updateQuery = "UPDATE `do_todo` SET `task`='$know' WHERE spec = '$spec' ";
    $sql = mysqli_query($connect,$updateQuery);

    if ($sql) {
      // code...
      echo "Done";
    }else {
      // code...
      echo "Fail";
    }
  }
  public function doInsertWith ($connect,$spec,$know) {
    $insertQuery = "INSERT INTO `do_todo`(`id`, `userid`, `spec`, `task`, `state`, `date`, `status`)
    VALUES (null,'$user','$spec','$know','',now(),'0')";
    $sql = mysqli_query($connect,$insertQuery);

    if ($sql) {
      // code...
      echo "Done";
    }else {
      // code...
      echo "Fail";
    }
  }
}

$connecting = new Todo('localhost','root','root','todo');
if ($value == 'item') {
  // code...
    $connecting->doSelect($connecting->creatConnection());
}
elseif ($value == 'delete') {
  // code...
    $spec = $_GET['doWith'];

            //select  from do_todo table to load list 
    $connecting->doDelete($connecting->creatConnection(),$spec);

}
elseif ($value == 'done') {
  // code...
    $spec = $_GET['doWith'];

            //update  do_todo table for check
    $connecting->doDoneWith($connecting->creatConnection(),$spec,'done');

}
elseif ($value == 'undone') {
  // code...
    $spec = $_GET['doWith'];

            //update  do_todo table for uncheck /mark
    $connecting->doDoneWith($connecting->creatConnection(),$spec,'');
}
elseif ($value == 'makeEdit') {
  // code...
    $spec = $_GET['doWith'];

    $content = $_GET['content'];

        //update  do_todo table for edit
    $connecting->doEditWith($connecting->creatConnection(),$spec,$content);
}
elseif ($value == 'insertTodo') {
  // code...
    $spec = $_GET['doWith'];

    $content = $_GET['content'];

    //insert into do_todo
    $connecting->doInsertWith($connecting->creatConnection(),$spec,$content);
}
else {
  // code...
  echo "Wrong";
}
 ?>
