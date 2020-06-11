<div class="main">
    <div class="category-list">
        <?php
        foreach ($categoryListArray as $row)
        {
            echo "<h2><a href=\"/index.php?category=" . $row['id'] . "\">" . $row['title'] . "</a></h2>";
            echo "<div><a href=\"/admin.php?catDelete=" . $row['id'] . "\">" . "Удалить " . "</a>" . "<a href=\"/admin.php?catEdit=" . $row['id'] . "\">" . "Изменить" . "</a></div>";
        }
        ?>
        <form action="admin.php" method="POST">
            <?php if($oneCat['name'] != NULL) {echo "<p>Редактируем " . $oneCat['name'] . "</p>";} ?>
            <?php if($oneCat['id'] != NULL) {echo "<input type=\"hidden\" name=\"id\" value=\"" . $oneCat['id'] . "\"/>";} ?>
            <p>Название:<br>
                <input type="text" name="name" value="<?php if($oneCat['name'] != NULL) {echo $oneCat['name'] ;} ?>" />
            </p>
            <p>Title:<br>
                <input type="text" name="title" value="<?php if($oneCat['title'] != NULL) {echo $oneCat['title'] ;} ?>" />
            </p>
            <p>ЧПУ:<br>
                <input type="text" name="url" value="<?php if($oneCat['url'] != NULL) {echo $oneCat['url'] ;} ?>" />
            </p>
            <input type="submit" value="Добавить\Изменить">
        </form>
    </div>
</div>