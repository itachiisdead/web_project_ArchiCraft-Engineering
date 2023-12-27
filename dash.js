
// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})


let id = document.getElementById('id');
let img_src = document.getElementById('file');
let img_src2 = document.getElementById('file2');
let img_src3 = document.getElementById('file3');
let img_src4 = document.getElementById('file4');
let title= document.getElementById('title');
let architect = document.getElementById('architect');
let category = document.getElementById('category');
let description = document.getElementById('description'); 
let price = document.getElementById('price');
let add= document.getElementById('add');
let data = []
var selectedRow = null;

function onFormSubmit() {
  if (validate()) {
    var formData = readFormData();
    if (selectedRow == null) insertNewRecord(formData);
    else updateRecord(formData);
    resetForm();
  }
}

function readFormData() {
  var formData = {};
  formData["id"] = document.getElementById("id").value;
  formData["title"] = document.getElementById("title").value;
  formData["file"] = document.getElementById("file").value;
  formData["file2"] = document.getElementById("file2").value;
  formData["file3"] = document.getElementById("file3").value;
  formData["file4"] = document.getElementById("file4").value;
  formData["architect"] = document.getElementById("architect").value;
  formData["category"] = document.getElementById("category").value;
  formData["description"] = document.getElementById("description").value;
  formData["price"] = document.getElementById("price").value;
  return formData;
}

function insertNewRecord(data) {
  var table = document
    .getElementById("projects")
    .getElementsByTagName("tbody")[0];
  var newRow = table.insertRow(table.length);
  cell1 = newRow.insertCell(0);
  cell1.innerHTML = data.fullName;
  cell2 = newRow.insertCell(1);
  cell2.innerHTML = data.email;
  cell3 = newRow.insertCell(2);
  cell3.innerHTML = data.salary;
  cell4 = newRow.insertCell(3);
  cell4.innerHTML = data.city;
  cell4 = newRow.insertCell(4);
  cell4.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}

function resetForm() {
  document.getElementById("id").value = "";
  document.getElementById("title").value = "";
  document.getElementById("file").value = "";
  document.getElementById("file2").value = "";
  document.getElementById("file3").value = "";
  document.getElementById("file4").value = "";
  document.getElementById("architect").value = "";
  document.getElementById("category").value = "";
  document.getElementById("description").value = "";
  document.getElementById("price").value = "";

  selectedRow = null;
}

function onEdit(td) {
  selectedRow = td.parentElement.parentElement;
  document.getElementById("id").value = selectedRow.cells[0].innerHTML;
  document.getElementById("title").value = selectedRow.cells[1].innerHTML;
  document.getElementById("file").value = selectedRow.cells[2].innerHTML;
  document.getElementById("file2").value = selectedRow.cells[2].innerHTML;
  document.getElementById("file3").value = selectedRow.cells[2].innerHTML;
  document.getElementById("file4").value = selectedRow.cells[2].innerHTML;
  document.getElementById("architect").value = selectedRow.cells[3].innerHTML;   
  document.getElementById("category").value = selectedRow.cells[3].innerHTML;    
  document.getElementById("description").value = selectedRow.cells[4].innerHTML;
  document.getElementById("price").value = selectedRow.cells[5].innerHTML;

}
function updateRecord(formData) {
  selectedRow.cells[0].innerHTML = formData.fullName;
  selectedRow.cells[1].innerHTML = formData.email;
  selectedRow.cells[2].innerHTML = formData.salary;
  selectedRow.cells[3].innerHTML = formData.city;
}

function onDelete(td) {
  if (confirm("Are you sure to delete this record ?")) {
    row = td.parentElement.parentElement;
    document.getElementById("project").deleteRow(row.rowIndex);
    resetForm();
  }
}
function validate() {
  isValid = true;
  if (document.getElementById("fullName").value == "") {
    isValid = false;
    document.getElementById("fullNameValidationError").classList.remove("hide");
  } else {
    isValid = true;
    if (
      !document
        .getElementById("fullNameValidationError")
        .classList.contains("hide")
    )
      document.getElementById("fullNameValidationError").classList.add("hide");
  }
  return isValid;
}