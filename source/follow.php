<?php
    $user = $_REQUEST['u'];
    $follower = $_REQUEST['f'];
    $flag = $_REQUEST['flg'];

    $con =  mysqli_connect("localhost", "root", "root", "compete");

    if($flag == '0'){
        $query = "insert into follower(user_id,followers_id) values(".$user.",".$follower.");";
    
        if(mysqli_query($con,$query)){

        }else{
            echo "console.log('Error Occured!!');";
        }
    }elseif($flag == '1'){
        $query = "delete from follower where user_id=".$user." and followers_id=".$follower.";";

        if(mysqli_query($con,$query)){

        }else{
            echo "console.log('Error Occured!!');";
        }
    }
?>