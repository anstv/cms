<div class="main">
    <div class="category-list">
        <?php
        if (!empty($articleArrayPage))
        {
            foreach ($articleArrayPage as $row) {
                echo "<h2><a href=\"/index.php?article=" . $row['id'] . "\">" . $row['title'] . "</a></h2>";
                echo "<p>" . $row['short_text'] . "</p>";
                echo "<p>Категория: " . $row['cname'] . "</p>";
            }
            echo "<ul class=\"pagination\">";
            for ($i=0;$i<=$pages;$i++)
            {
                echo "<li><a href=\"/index.php?category=" . $category_id . "&page=" . $i . "\">". $i . "</a></li>";
            }
            echo "</ul>";
        }
        else {
            foreach ($articleArray as $row) {
                echo "<h2><a href=\"/index.php?article=" . $row['id'] . "\">" . $row['title'] . "</a></h2>";
                echo "<p>" . $row['short_text'] . "</p>";
                echo "<p>Категория: " . $row['cname'] . "</p>";
            }
        }
        ?>
    </div>
</div>