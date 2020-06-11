<nav><div class="menu">
        <ul class="menu-list">
            <li class="menu-list-item"><a href="/" class="menu-link">Главная</a></li>
            <li class="menu-list-item dropdown-menu"><a href="/index.php?category=0" class="menu-link">Категории</a>
                <?php
                $menuCat = "<ul class=\"menu-cat dropdown-content\">" . PHP_EOL;
                $menuArray = getMenuCategory();
                foreach ($menuArray as $menuItem)
                {
                    $menuCat .= "<li><a class=\"menu-link\" href=\"index.php?category=" . $menuItem['id'] . "\">" . $menuItem['name'] . "</a></li>" . PHP_EOL;
                }
                $menuCat .= "</ul>";
                echo $menuCat;
                ?>
            </li>
            <li class="menu-list-item">Об авторе</li>
        </ul>
    </div></nav>