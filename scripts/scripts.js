// Edit model variables
const updateFirstName = document.getElementById("editFirstName");
const updateLastName = document.getElementById("editLastName");
const updateEmail = document.getElementById("editEmail");
const updateSpeciality = document.getElementById("editSpeciality");
const updatePassword = document.getElementById("editPassword");
const docId = document.getElementById("docId");
// view model variable
const viewModal = document.getElementById("view-body");

// viewDoc function fills the view model
function viewDoc(index) {
  let dataView = document.getElementById(index).getAttribute("data-info");
  let array = dataView.split(",");
  viewModal.innerHTML = `
  <h5 class="text-info fw-bold">First Name : ${array[0]}</h5>
  <h5 class="text-info fw-bold">Last Name : ${array[1]}</h5>
  <h5 class="text-info fw-bold">Email : ${array[2]}</h5>
  <h5 class="text-info fw-bold">Specialties : ${array[3]}</h5>
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

// // -----------------------------------------------
// // function to display patient data to admin

function getData (id) {           
            var fname_moodle = document.getElementById('fname_moodle');
            var lname_moodle = document.getElementById('lname_moodle');
            var cin_moodle = document.getElementById('cin_moodle');
            var phoneNumber_moodle = document.getElementById('phoneNumber_moodle');
            var email_moodle = document.getElementById('email_moodle');
            var birthday_moodle = document.getElementById('birthday_moodle');
 
//  var element1 = document.getElementById(id).parentElement.parentElement.children[0].innerHTML;
//  var element2 = document.getElementById(id).parentElement.parentElement.children[1].innerHTML;
//  var element3 = document.getElementById(id).parentElement.parentElement.children[2].innerHTML;
//  var element4 = document.getElementById(id).parentElement.parentElement.children[3].innerHTML;
//  var element5 = document.getElementById(id).parentElement.parentElement.children[4].innerHTML;
//  var element6 = document.getElementById(id).parentElement.parentElement.children[5].innerHTML;

//              fname_moodle.value = element1;
//              lname_moodle.value = element2;
//              cin_moodle.value = element3;
//              phoneNumber_moodle.value = element4;
//              email_moodle.value = element5;
//              birthday_moodle.value = element6;
//              console.log(element);

        fname_moodle.value = document.getElementById(`fname-${id}`).value;
        lname_moodle.value = document.getElementById(`lname-${id}`).value;
        cin_moodle.value = document.getElementById(`cin-${id}`).value;
        phoneNumber_moodle.value = document.getElementById(`phoneNumber-${id}`).value;
        email_moodle.value = document.getElementById(`email-${id}`).value;
        birthday_moodle.value = document.getElementById(`birthday-${id}`).value; 
}