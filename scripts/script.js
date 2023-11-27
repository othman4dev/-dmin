var row = {
  id: "",
  username: "",
  email: "",
  squad: "",
};
var squads = {
  id: "",
  sName: "",
  leaderID: "",
  projectID: "",
}
function changeLocation(choice) {
  localStorage.setItem("choice", choice);
  if (choice == "admin") {
    window.location.href = "admin.php";
  } else {
    window.location.href = "user.php";
  }
}
window.addEventListener("load", showTable());
function showTable() {
  let choice = localStorage.getItem("table");
  console.log(document.querySelectorAll(`.${choice}`));
  document.querySelectorAll(`.${choice}`)[0].style.display = "block";
  document.querySelectorAll(`.${choice}`)[1].style.display = "block";
  document.querySelectorAll(`.${choice}`)[2].style.display = "flex";
}
let more = false;
function toggleTables(element, type) {
  if (more == false) {
    more = true;
    document.getElementById(`${type}-long`).style.display = "flex";
    document.getElementById(`${type}-short`).style.display = "none";
    element.innerHTML = "Show Less";
  } else {
    more = false;
    document.getElementById(`${type}-long`).style.display = "none";
    document.getElementById(`${type}-short`).style.display = "flex";
    element.innerHTML = "Show More";
  }
}
var checkedElement = null;
function selectOne(e) {
  document.querySelectorAll(".select-check").forEach((element) => {
    element.checked = false;
  });
  if (checkedElement != e) {
    e.checked = true;
    checkedElement = e;
  } else {
    checkedElement = null;
  }
  console.log("checked");
}
function goToEdit(table) {
  localStorage.setItem("table", table);
  window.location.href = "edit.php";
}
function submitForm(type,func) {
  let form = document.getElementById(`form-${type}-${func}`);
  let formData = new FormData(form);

  fetch("php/insert.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(formData);
      console.log(data);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
function submitDelete(type,func) {
  let form = document.getElementById(`form-${type}-${func}`);
  let formData = new FormData(form);

  fetch("php/delete.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(formData);
      console.log(data);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
function submitEdit(type,func) {
  console.log(type);
  var form = document.getElementById(`form-${type}-${func}`);
  var formData = new FormData(form);

  fetch("php/edit.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(formData);
      console.log(data);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
function showForm(type,func) {
  document.querySelectorAll(".inp-section").forEach((element) => {
    element.style.display = "none";
  });
  if (document.getElementById(`modal-${func}-${type}`).style.display == "none") {
    document.getElementById(`modal-${func}-${type}`).style.display = "flex";
    getData(type,func);
  } else {
    document.getElementById(`modal-${func}-${type}`).style.display = "none";
  }
}
function getData(type,func) {
  row.id = checkedElement.parentNode.innerText;
  row.username = checkedElement.parentNode.nextElementSibling.innerHTML;
  row.email =
    checkedElement.parentNode.nextElementSibling.nextElementSibling.innerHTML;
  row.squad =
    checkedElement.parentNode.nextElementSibling.nextElementSibling.nextElementSibling.innerHTML;
  console.log(row);
  putData(type,func);
}
function putData(type,func) {
  document.getElementById(`modal-${func}-${type}`).querySelectorAll("input")[1].value =
    row.id;
  document.getElementById(`modal-${func}-${type}`).querySelectorAll("input")[2].value =
    row.username;
  document.getElementById(`modal-${func}-${type}`).querySelectorAll("input")[3].value =
    row.email;
  document.getElementById(`modal-${func}-${type}`).querySelectorAll("input")[4].value =
    row.squad;
}
