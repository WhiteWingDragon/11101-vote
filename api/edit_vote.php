<?php
include_once "base.php";

$subject_id=$_POST['subject_id'];
$new_subject=$_POST['subject'];
$subject=find('subjects',$subject_id);
//dd($subject);
$subject['subject']=$new_subject;
$subject['multiple']=$_POST['multiple'];
save('subjects',$add_subject);
$opts=all("options",['subject_id'=>$subject_id]);
//dd($opts);
//exit();
//if(isset($_POST['option'])){
    foreach($_POST['option'] as $key=> $opt){
        $exist=false;
        foreach($opts as $ot){
            if($ot['id']==$key){
                $exist=true;
                break;
            }
        }
        if($exist){
            $ot['option']=$opt;
            save("options",$ot);
        }else{
            $add_option=[
                'option'=>$opt,
                'subject_id'=>$subject_id
            ];
            save("options",$add_option);
        }
        /*if($opts[$key]){
        }else{
            $add_option=[
                'option'=>$opt,
                'subject_id'=>$id
            ];
            save("options",$add_option);
        }*/
    }
//}
to('../back.php');
?>