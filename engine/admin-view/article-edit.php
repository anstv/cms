<div class="main">
    <div>
        <form action="admin.php" method="POST">
            <input type="hidden" name="idArt" value="<?php if($articleRowAdmin['id'] != NULL) {echo $articleRowAdmin['id'] ;} else {echo "new";} ?>" />
            <p>Title:<br>
                <input type="text" name="titleArt" value="<?php if($articleRowAdmin['title'] != NULL) {echo $articleRowAdmin['title'] ;} ?>" />
            </p>
            <p>Desc:<br>
                <input type="text" name="descriptionArt" value="<?php if($articleRowAdmin['description'] != NULL) {echo $articleRowAdmin['description'] ;} ?>" />
            </p>
            <p>Keywords:<br>
                <input type="text" name="keywordsArt" value="<?php if($articleRowAdmin['keywords'] != NULL) {echo $articleRowAdmin['keywords'] ;} ?>" />
            </p>
            <p>Короткий текст:<br>
                <input type="text" name="shorttextArt" value="<?php if($articleRowAdmin['short_text'] != NULL) {echo $articleRowAdmin['short_text'] ;} ?>" />
            </p>
            <p>Полный текст новости:<br>
                <textarea rows="10" cols="45" name="textArt"><?php if($articleRowAdmin['text'] != NULL) {echo $articleRowAdmin['text'] ;} ?></textarea>
            </p>
            <p>Категория:<br>
                <?php
                foreach($catArrayAdmin as $row)
                {
                    if ($row['id'] == $articleRowAdmin['category'])
                    {
                        echo "<input checked type=\"radio\" name=\"categoryArt\" id=\"$row[id]\" value=\"$row[id]\">";
                    }
                    else {
                        echo "<input type=\"radio\" name=\"categoryArt\" id=\"$row[id]\" value=\"$row[id]\">";
                    }
                    echo "<label for=\"$row[id]\">$row[name]</label>";
                }
                ?>
            </p>
            <p>ЧПУ:<br>
                <input type="text" name="urlArt" value="<?php if($articleRowAdmin['url'] != NULL) {echo $articleRowAdmin['url'] ;} ?>" />
            </p>
            <input type="submit" value="Добавить\Изменить">
        </form>
    </div>
</div>