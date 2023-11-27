<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <?php include 'php/functions-edit.php' ?>
    <script src="scripts/script.js"></script>
    <title>Welcome @dmin</title>
</head>
<body onload="showTable()">
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
            <h1>Edit Panel</h1>
        </div>
        <div class="status">
            <div class="stat" onclick="goToEdit('users')">You have <span class="num"> <?php getCount('users') ?> </span>Users <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('squads')">You have <span class="num"> <?php getCount('squads') ?> </span> Squads <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('projects')">You have <span class="num"> <?php getCount('projects') ?> </span> Projects <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('ressources')">You have <span class="num"> <?php getCount('ressources') ?> </span> Ressources <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('category')">You have <span class="num"> <?php getCount('category') ?> </span> category <div class="edit-this">Edit</div></div>
            <div class="stat" onclick="goToEdit('subcategory')">You have <span class="num"> <?php getCount('subcategory') ?> </span> Subcategory <div class="edit-this">Edit</div></div>
        </div>
        <div class="table-header users">
            <h1># Users</h1>
        </div>
        <div class="users">
            <div class="table scroll" id="users-short">
                <div class="head-row sticky">
                    <div>ID</div>
                    <div>UserName</div>
                    <div>UserEmail</div>
                    <div>squad_ID</div>
                </div>
                <?php printUserTable(0) ?>
            </div>
            <div class="edit-tools users">
                <button class="tool" onclick="showForm('users','add')">Add <img src="assets/add.svg" alt="" class="tool-img"></button>
                <button class="tool">Add after selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                <button class="tool">Add before selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                <button class="tool" onclick="showForm('users','edit')">Edit selected <img src="assets/edit.svg" alt="" class="tool-img"></button>
                <button class="tool" onclick="showForm('users','delete')">Delete selected <img src="assets/delete.svg" alt="" class="tool-img"></button>
                <button class="tool">Extand table <img src="assets/extand.svg" alt="" class="tool-img"></button>
                <button class="tool">save <img src="assets/save.svg" alt="" class="tool-img"></button>
            </div>
        </div>
        <div class="table-header squads">
            <h1># Squads</h1>
        </div>
        <div  class="squads">
            <div class="table scroll">
                <div class="head-row sticky">
                    <div>Squad ID</div>
                    <div>Squad Name</div>
                    <div>Leader ID</div>
                    <div>Project ID</div>
                </div>
                <?php printSquadTable(0) ?>
                <div class="edit-tools squads">
                    <button class="tool" onclick="showForm('squads','add')">Add <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add after selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add before selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('squads','edit')">Edit selected <img src="assets/edit.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('squads','delete')">Delete selected <img src="assets/delete.svg" alt="" class="tool-img"></button>
                    <button class="tool">Extand table <img src="assets/extand.svg" alt="" class="tool-img"></button>
                    <button class="tool">save <img src="assets/save.svg" alt="" class="tool-img"></button>
                </div>
            </div>
        </div>
        <div class="table-header projects">
                <h1># Projects</h1>
            </div>
        <div  class="projects">
            <div class="table scroll">
                <div class="head-row sticky">
                    <div>Project ID</div>
                    <div>Project Name</div>
                    <div>Description</div>
                    <div class="start">Project Start</div>
                    <div class="end">Project End</div>
                </div>
                <?php printProjectTable(5) ?>
                <div class="edit-tools projects">
                    <button class="tool"><input type="checkbox" name="ignore" id="" class="select-all">Select All</button>
                    <button class="tool" onclick="showForm('projects','add')">Add <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add after selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add before selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('projects','edit')">Edit selected <img src="assets/edit.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('projects','delete')">Delete selected <img src="assets/delete.svg" alt="" class="tool-img"></button>
                    <button class="tool">Extand table <img src="assets/extand.svg" alt="" class="tool-img"></button>
                    <button class="tool">save <img src="assets/save.svg" alt="" class="tool-img"></button>
                </div>
            </div>
        </div>
        <div class="table-header ressources">
            <h1># Ressources</h1>
        </div>
        <div  class="ressources">
            <div class="table scroll">
                <div class="head-row sticky">
                    <div class="start">Ressource ID</div>
                    <div>Ressource Name</div>
                    <div class="start">Category ID</div>
                </div>
                <?php printRessourcesTable(0) ?>
                <div class="edit-tools ressources">
                    <button class="tool"><input type="checkbox" name="ignore" id="" class="select-all">Select All</button>
                    <button class="tool" onclick="showForm('ressources','add')">Add <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add after selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add before selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('ressources','edit')">Edit selected <img src="assets/edit.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('ressources','delete')">Delete selected <img src="assets/delete.svg" alt="" class="tool-img"></button>
                    <button class="tool">Extand table <img src="assets/extand.svg" alt="" class="tool-img"></button>
                    <button class="tool">save <img src="assets/save.svg" alt="" class="tool-img"></button>
                </div>
            </div>
        </div>
        <div class="table-header category">
                <h1># Category</h1>
            </div>
        <div  class="category">
            <div class="table scroll">
                <div class="head-row sticky">
                    <div class="start">Category ID</div>
                    <div>Category Name</div>
                    <div class="end">Subcategory ID</div>
                </div>
                <?php printCategoryTable(0) ?>
                <div class="edit-tools category">
                    <button class="tool"><input type="checkbox" name="ignore" id="" class="select-all">Select All</button>
                    <button class="tool" onclick="showForm('category','add')">Add <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add after selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add before selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('category','edit')">Edit selected <img src="assets/edit.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('category','delete')">Delete selected <img src="assets/delete.svg" alt="" class="tool-img"></button>
                    <button class="tool">Extand table <img src="assets/extand.svg" alt="" class="tool-img"></button>
                    <button class="tool">save <img src="assets/save.svg" alt="" class="tool-img"></button>
                </div>
            </div>
        </div>
        <div class="table-header subcategory">
            <h1># Subcategory</h1>
        </div>
        <div  class="subcategory">
            <div class="table scroll">
                <div class="head-row sticky">
                    <div class="start">Subcategory ID</div>
                    <div class="grow">Subcategory Name</div>
                    <div style='display:none'></div>
                </div>
                <?php printSubcategoryTable(0) ?>
                <div class="edit-tools subcategory">
                    <button class="tool"><input type="checkbox" name="ignore" id="" class="select-all">Select All</button>
                    <button class="tool" onclick="showForm('subcategory','add')">Add <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add after selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool">Add before selected <img src="assets/add.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('subcategory','edit')">Edit selected <img src="assets/edit.svg" alt="" class="tool-img"></button>
                    <button class="tool" onclick="showForm('subcategory','delete')">Delete selected <img src="assets/delete.svg" alt="" class="tool-img"></button>
                    <button class="tool">Extand table <img src="assets/extand.svg" alt="" class="tool-img"></button>
                    <button class="tool">save <img src="assets/save.svg" alt="" class="tool-img"></button>
                </div>
            </div>
        </div>
    </main>
    <section class="inp-section none" id="modal-add-users">
    <form id="form-users-add" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Add :</div>
        <input type="text" class="text-inp id-inp" name="table" value="users" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" style="display: none;">
        <input type="text" class="text-inp" placeholder="UserName" name="username">
        <input type="text" class="text-inp" placeholder="UserMail" name="usermail">
        <input type="text" class="text-inp" placeholder="SquadID" name="squadid">
        <input type="submit" class="submit-inp" value="Add" name="submit" onclick="submitForm('users','add')">
    </form>
    </section>
    <section class="inp-section none" id="modal-delete-users">
    <form id="form-users-delete" class="inp-form">
        <img src="assets/delete.svg" alt="" class="edit-img-users" onclick="showForm()">
        <div class="type-form">delete :</div>
        <input type="text" class="text-inp id-inp" name="table" value="users" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="UserName" name="username" readonly>
        <input type="text" class="text-inp" placeholder="UserMail" name="usermail" readonly>
        <input type="text" class="text-inp" placeholder="SquadID" name="squadid" readonly>
        <input type="submit" class="submit-inp" value="Delete" name="submit" onclick="submitDelete('users','delete')">
    </form>
    </section>
    <section class="inp-section none" id="modal-edit-users">
    <form id="form-users-edit" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Edit :</div>
        <input type="text" class="text-inp id-inp" name="table" value="users" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="UserName" name="username">
        <input type="text" class="text-inp" placeholder="UserMail" name="usermail">
        <input type="text" class="text-inp" placeholder="SquadID" name="squadid">
        <input type="submit" class="submit-inp" value="Edit" name="submit" onclick="submitEdit('users','edit')">
        <input type="text" name="column" style="display:none" value="userID">
    </form>
    </section>
    <section class="inp-section none" id="modal-add-before-users">
    <form id="form-users-test" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Edit :</div>
        <input type="text" class="text-inp id-inp" name="table" value="users" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="UserName" name="username">
        <input type="text" class="text-inp" placeholder="UserMail" name="usermail">
        <input type="text" class="text-inp" placeholder="SquadID" name="squadid">
        <input type="submit" class="submit-inp" value="Submit" name="submit">
    </form>
    </section>
    <section class="inp-section none" id="modal-add-after-users">
    <form id="form" class="inp-form">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Add :</div>
        <input type="text" class="text-inp id-inp" name="table" value="users" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="UserName" name="username">
        <input type="text" class="text-inp" placeholder="UserMail" name="usermail">
        <input type="text" class="text-inp" placeholder="SquadID" name="squadid">
        <input type="submit" class="submit-inp" value="Submit" name="submit" onclick="submitForm()">
    </form>
    </section>
    <!--squads modals-->
    <section class="inp-section none" id="modal-add-squads">
    <form id="form-squads-add" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Add :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" style="display: none;">
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname">
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID">
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID">
        <input type="submit" class="submit-inp" value="Add" name="submit" onclick="submitForm('squads','add')">
    </form>
    </section>
    <section class="inp-section none" id="modal-delete-squads">
    <form id="form-squads-delete" class="inp-form">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">delete :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname" readonly>
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID" readonly>
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID" readonly>
        <input type="submit" class="submit-inp" value="Delete" name="submit" onclick="submitDelete('squads','delete')">
        <input type="text" name="column" style="display:none" value="squadID">
    </form>
    </section>
    <section class="inp-section none" id="modal-edit-squads">
    <form id="form-squads-edit" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Edit :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname">
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID">
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID">
        <input type="submit" class="submit-inp" value="Edit" name="submit" onclick="submitEdit('squads','edit')">
    </form>
    </section>
    <section class="inp-section none" id="modal-add-before-squads">
    <form id="form-squads-test" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Edit :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id">
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname">
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID">
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID">
        <input type="submit" class="submit-inp" value="Submit" name="submit">
    </form>
    </section>
    <section class="inp-section none" id="modal-add-after-squads">
    <form id="form" class="inp-form">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Add :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname">
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID">
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID">
        <input type="submit" class="submit-inp" value="Submit" name="submit" onclick="submitForm()">
    </form>
    </section>
    <!--This is for projects-->
    <section class="inp-section none" id="modal-add-projects">
    <form id="form-projects-add" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Add :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" style="display: none;">
        <input type="text" class="text-inp" placeholder="Squad Name" name="projectname">
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID">
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID">
        <input type="submit" class="submit-inp" value="Add" name="submit" onclick="submitForm('squads','add')">
    </form>
    </section>
    <section class="inp-section none" id="modal-delete-projects">
    <form id="form-projects-delete" class="inp-form">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">delete :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname" readonly>
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID" readonly>
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID" readonly>
        <input type="submit" class="submit-inp" value="Delete" name="submit" onclick="submitDelete('squads','delete')">
        <input type="text" name="column" style="display:none" value="squadID">
    </form>
    </section>
    <section class="inp-section none" id="modal-edit-projects">
    <form id="form-projects-edit" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Edit :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname">
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID">
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID">
        <input type="submit" class="submit-inp" value="Edit" name="submit" onclick="submitEdit('squads','edit')">
    </form>
    </section>
    <section class="inp-section none" id="modal-add-before-projects">
    <form id="form-projects-add-before" class="inp-form" method="post">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Edit :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id">
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname">
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID">
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID">
        <input type="submit" class="submit-inp" value="Submit" name="submit">
    </form>
    </section>
    <section class="inp-section none" id="modal-add-after-projects">
    <form id="form-add-after-projects" class="inp-form">
        <img src="assets/delete.svg" alt="" class="edit-img" onclick="showForm()">
        <div class="type-form">Add :</div>
        <input type="text" class="text-inp id-inp" name="table" value="squads" style="display: none;">
        <input type="text" class="text-inp id-inp" name="id" readonly>
        <input type="text" class="text-inp" placeholder="Squad Name" name="squadname">
        <input type="text" class="text-inp" placeholder="Leader ID" name="leaderID">
        <input type="text" class="text-inp" placeholder="Project ID" name="projectID">
        <input type="submit" class="submit-inp" value="Submit" name="submit" onclick="submitForm()">
    </form>
    </section>
    <footer>
        <div class="footer-div"></div>
        <div class="footer-div"></div>
        <div class="footer-div"></div>
    </footer>
</body>
</html>
