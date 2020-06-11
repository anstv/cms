<div class="main">
    <div class="category-list">
        <?php
        foreach ($articleArrayAdmin as $row)
        {
            echo "<h2><a href=\"/index.php?article=" . $row['id'] . "\">" . $row['title'] . "</a></h2>";
            echo "<p>" . $row['short_text'] . "</p>";
            echo "<p>Категория: " . $row['cname'] . "</p>";
            echo "<p><a href=\"/admin.php?artDel=" . $row['id'] . "\">Удалить</a>" . " <a href=\"/admin.php?artEdit=" . $row['id'] . "\">Изменить</a></p>";
        }
        ?>
    </div>
</div>0