// Edit model variables
const updateFirstName = document.getElementById("editFirstName");
const updateLastName = document.getElementById("editLastName");
const updateEmail = document.getElementById("editEmail");
const updateSpeciality = document.getElementById("editSpeciality");
const updatePassword = document.getElementById("editPassword");
const docId = document.getElementById("docId");

// initializeBook function fills the edit model inputs
function initializeDoc(index) {
  let dataInfo = document.getElementById(index).getAttribute("data-info");
  let arr = dataInfo.split(",");
  updateFirstName.value = arr[0];
  updateLastName.value = arr[1];
  updateEmail.value = arr[2];
  updateSpeciality.value = arr[3];
  updatePassword.value = arr[4];
  docId.value = index;
}

function wrapside() {
    let side = document.querySelector("#wrapper");
    side.classList.toggle("toggled");
}