// Edit model variables
const updateFirstName = document.getElementById("editFirstName");
const updateLastName = document.getElementById("editLastName");
const updateEmail = document.getElementById("editEmail");
const updateSpeciality = document.getElementById("editSpeciality");
const updatePassword = document.getElementById("editPassword");
const docId = document.getElementById("docId");
// view model variable
const viewModal = document.getElementById("view-body");
const viewModal2 = document.getElementById("view-body2");

// viewDoc function fills the view model
function viewDoc(index) {
  let dataView = document.getElementById(index).getAttribute("data-info");
  let array = dataView.split(",");
  viewModal.innerHTML = `
  <div class="form-group">
  <label>First Name</label>
  <input type="text" class="form-control" disabled="disabled" id="fname" value="${array[0]}">
  </div>
    <div class="form-group">
      <label>Last Name</label>
      <input type="text" class="form-control" disabled="disabled" id="lname" value="${array[1]}">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" disabled="disabled" id="eemail" value="${array[2]}">
    </div>
    <div class="form-group">
      <label>Speciality</label>
      <input type="text" class="form-control" disabled="disabled" id="special" value="${array[3]}">
    </div>
  `;
}
//
function viewDoc2(firstName, lastName, email, speciality) {
  viewModal2.innerHTML = `
  <div class="form-group">
  <label>First Name</label>
  <input type="text" class="form-control" disabled="disabled" id="fname" value="${firstName}">
  </div>
    <div class="form-group">
      <label>Last Name</label>
      <input type="text" class="form-control" disabled="disabled" id="lname" value="${lastName}">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" disabled="disabled" id="eemail" value="${email}">
    </div>
    <div class="form-group">
      <label>Speciality</label>
      <input type="text" class="form-control" disabled="disabled" id="special" value="${speciality}">
    </div>
  `;
}
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

function getData (id) {           
            var fname_moodle = document.getElementById('fname_moodle');
            var lname_moodle = document.getElementById('lname_moodle');
            var cin_moodle = document.getElementById('cin_moodle');
            var phoneNumber_moodle = document.getElementById('phoneNumber_moodle');
            var email_moodle = document.getElementById('email_moodle');
            var birthday_moodle = document.getElementById('birthday_moodle');
 
        fname_moodle.value = document.getElementById(`fname-${id}`).value;
        lname_moodle.value = document.getElementById(`lname-${id}`).value;
        cin_moodle.value = document.getElementById(`cin-${id}`).value;
        phoneNumber_moodle.value = document.getElementById(`phoneNumber-${id}`).value;
        email_moodle.value = document.getElementById(`email-${id}`).value;
        birthday_moodle.value = document.getElementById(`birthday-${id}`).value; 
}