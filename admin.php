<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <?php include 'php/functions.php' ?>
    <script src="scripts/script.js"></script>
    <title>Welcome @dmin</title>
</head>
<body>
    <header class="index-header">
        <h1>@dmin</h1>
        <div class="buttons-menu">
            <button class="views">Global View</button>
            <button class="views">Edit Panel</button>
            <img src="assets/menu.svg" alt="" class="menu-icon">
        </div>
    </header>
    <div class="sous-header"></div>
    <main>
        <div class="location">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="status">
            <div class="stat" onclick="goToEdit('users')">You have <span class="num"> <?php getCount('users') ?> </span>Users <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('squads')">You have <span class="num"> <?php getCount('squads') ?> </span> Squads <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('projects')">You have <span class="num"> <?php getCount('projects') ?> </span> Projects <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('ressources')">You have <span class="num"> <?php getCount('ressources') ?> </span> Ressources <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('category')">You have <span class="num"> <?php getCount('category') ?> </span> category <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('subcategory')">You have <span class="num"> <?php getCount('subcategory') ?> </span> Subcategory <div class="edit-this">Edit</div></div>
        </div>
        <div class="table" id="users-short">
            <div class="table-header">
                <h1># Users</h1>
                <h2 onclick="goToEdit('users')">Edit <img src="assets/edit.svg" alt="" class="edit-img"></h2>
            </div>
            <div class="head-row">
                <div>ID</div>
                <div>UserName</div>
                <div>UserEmail</div>
                <div>squad_ID</div>
            </div>
            <?php printUserTable(5) ?>
        </div>
        <div class="table" id="users-long">
            <div class="table-header">
                <h1># Users</h1>
                <h2 onclick="goToEdit('users')">Edit <img src="assets/edit.svg" alt="" class="edit-img"></h2>
            </div>
            <div class="head-row">
                <div>ID</div>
                <div>UserName</div>
                <div>UserEmail</div>
                <div>squad_ID</div>
            </div>
            <?php printUserTable(0) ?>
        </div>
        <div class="see-more"><div class="see-more-text" onclick="toggleTables(this,'users')">See more...</div></div>
        <div class="table">
            <div class="table-header">
                <h1># Squads</h1>
                <h2 onclick="goToEdit('squads')">Edit <img src="assets/edit.svg" alt="" class="edit-img"></h2>
            </div>
            <div class="head-row">
                <div>Squad ID</div>
                <div>Squad Name</div>
                <div>Leader ID</div>
                <div>Project ID</div>
            </div>
            <?php printSquadTable(5) ?>
        </div>
        <div class="table">
            <div class="table-header">
                <h1># Projects</h1>
                <h2 onclick="goToEdit('projects')">Edit <img src="assets/edit.svg" alt="" class="edit-img"></h2>
            </div>
            <div class="head-row">
                <div>Project ID</div>
                <div>Project Name</div>
                <div>Description</div>
                <div class="start">Project Start</div>
                <div class="end">Project End</div>
            </div>
            <?php printProjectTable(5) ?>
        </div>
        <div class="table" id="ressources-short">
            <div class="table-header">
                <h1># Ressources</h1>
                <h2 onclick="goToEdit('ressources')">Edit <img src="assets/edit.svg" alt="" class="edit-img"></h2>
            </div>
            <div class="head-row">
                <div class="start">Ressource ID</div>
                <div>Ressource Name</div>
                <div class="start">Category ID</div>
            </div>
            <?php printRessourcesTable(5) ?>
        </div>
        <div class="table" id="ressources-long">
            <div class="table-header">
                <h1># Ressources</h1>
                <h2 onclick="goToEdit('ressources')">Edit <img src="assets/edit.svg" alt="" class="edit-img"></h2>
            </div>
            <div class="head-row">
                <div class="start">Ressource ID</div>
                <div>Ressource Name</div>
                <div class="start">Category ID</div>
            </div>
            <?php printRessourcesTable(0) ?>
        </div>
        <div class="see-more"><div class="see-more-text" onclick="toggleTables(this,'ressources')">See more...</div></div>
        <div class="table" id="category-short">
            <div class="table-header">
                <h1># Category</h1>
                <h2 onclick="goToEdit('category')">Edit <img src="assets/edit.svg" alt="" class="edit-img"></h2>
            </div>
            <div class="head-row">
                <div class="start">Category ID</div>
                <div>Category Name</div>
                <div class="start">Subcategory ID</div>
            </div>
            <?php printCategoryTable(0) ?>
        </div>
        <div class="table" id="category-short">
            <div class="table-header">
                <h1># Subcategory</h1>
                <h2 onclick="goToEdit('category')">Edit <img src="assets/edit.svg" alt="" class="edit-img"></h2>
            </div>
            <div class="head-row">
                <div class="start">Subcategory ID</div>
                <div class="grow">Subcategory Name</div>
                <div style='display:none'></div>
            </div>
            <?php printSubcategoryTable(0) ?>
        </div>
    </main>
    <footer>
        <div class="footer-div"></div>
        <div class="footer-div"></div>
        <div class="footer-div"></div>
    </footer>
</body>
</html>
