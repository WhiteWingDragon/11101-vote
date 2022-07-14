<form action="api/add_type.php" method="post">
    <div>
        <label for="name">分類名稱:</label>
        <input type="text" name="name" id="name">
    </div>
    <select name="types" id="types">
        <?php
            $types=all("types");
            foreach($types as $type){
                echo "<option value='{$type['id']}'>";
                echo $type['name'];
                echo "</option>";
            }
            ?>
        </select>
    <div>
        <input class="btn btn-primary" type="submit" value="送出">
    </div>
</form>