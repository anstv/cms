<div class="main">
    <div class="category-list">
        <?php
        foreach ($articleArray as $row)
        {
            echo "<h2><a href=\"/index.php?article=" . $row['id'] . "\">" . $row['title'] . "</a></h2>";
            echo "<p>" . $row['short_text'] . "</p>";
            echo "<p>Категория: " . $row['cname'] . "</p>";
        }
        ?>
    </div>
</div>