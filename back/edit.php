<?php
$id=$_GET['id'];
$subj=find('subjects',$id);
$opts=all('options',['subject_id'=>$id]);
/*dd($row);
dd($opts);*/
?>
<form action="../api/edit_vote.php" method="post">
    <div>
        <label for="subject">投票主題:</label>
        <input type="text" name="subject" id="subject" vaule="<?=$subj['subject'];?>">
        <input type="button" value="新增選項" onclick="more()">
        <input type="hidden" name="subject_id" value="<?=$subj['id'];?>">
    </div>
    <div id="selector">
        <input type="radio" name="mulitple" value="0" <?=($subj['multiple']==0)?'checked':''?>>
        <label>單選</label>
        <input type="radio" name="mulitple" value="1" <?=($subj['multiple']==1)?'checked':''?>>
        <label>複選</label>
    </div>
    <div id="options">
        <?php
        foreach($opts as $opt){
        ?>
        <div>
            <label>選項:</label><input type="text" name="option[<?=$option['id'];?>" vaule="<?=$opt['option'];?>">
        </div>
        <?php
        }
        ?>
    </div>
    <input type="submit" value="修改">
</form>
<script>
    function more(){
        let opt=`<div><label>選項:</label><input type="text" name="option[]"></div>`;
        let opts=document.getElementById('options').innerHTML;
        opts=opts+opt;
        document.getElementById('options').innerHTML=opts;
    }
</script>