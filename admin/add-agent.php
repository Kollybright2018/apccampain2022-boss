<?php
require 'inc/header.php';
require('../inc/db.php');
require_once "../inc/registerloader.php";
?>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    Osun APC Campaign 2022
</div>

<!-- wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <?php require('inc/navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require('inc/sidebar.php'); ?>
<!-- //Main Sidebar Container -->
  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- Tabable-->
<section class="content mt-4 " id="mainpage">
    <div class="container-fluid ">
    <div class="row justify-content-center mt-2">
      <!-- <h3 class="text-warning text-center my-5">You're Welcome to Osun State APC 2023 Campaign Website</h3> -->
      <div class="col-md-6  col-sm-10">
        <div class="text-center ">
          <img src="../Images/logo.png" class="img-fluid" alt="">
          <p class="mt-2 text-warning"><i>Osun State Apc 2022</i></p>
          <h2>  Agent Registration</h2> <hr>
        </div>
        <div id="alert"  class="alert  alert-dismissible">
          <button type="btn" data-bs-dismiss="alert" class="btn-close"></button>

          <div class="text-center">
             <strong id="alert_text"></strong> <br>
           <strong id="warning">Pls Take Note</strong>  
          <strong class="text-warning" id="username"> </strong> <br>
          <strong id="password"></strong>
         
          </div>
         
        </div>

        <form action="" id="regform">

          <div class="form-floating mt-2">
            <input type="text" name="fullname" placeholder="Full Name" class="form-control" id="">
            <label for="fullname">Full Name </label>
            <strong class="text-danger" id="fullname_error"></strong>
          </div>

          <div class="form-floating mt-2">
            <input type="text" name="username" placeholder="User Name" class="form-control" id="">
            <label for="fullname">User Name </label>
            <strong class="text-danger" id="username_error"></strong>
          </div>

          <div class="form-floating mt-2">
            <input type="text" name="phone" placeholder="08123456789" class="form-control " id="">
            <label for="Phone">Phone No:</label>
            <strong class="text-danger" id="phone_error"></strong>
          </div>

          <div class="form-floating mt-2">
            <select class="form-control" name="lg" id=""  >
              <option value=""> Select Local Goverment </option>
              <option value="Aiyedaade"> Aiyedaade</option>
              <option value="Aiyedire"> Aiyedire</option>
              <option value="Atakunmosa East">Atakunmosa East </option>
              <option value="Atakunmosa West">Atakunmosa West </option>
              <option value="Boluwaduro"> Boluwaduro</option>
              <option value="Boripe"> Boripe</option>
              <option value="Ede North">Ede North </option>
              <option value="Ede South"> Ede South</option>
              <option value="Egbedore"> Egbedore</option>
              <option value="Ejigbo"> Ejigbo</option>
              <option value="Ife Central"> Ife Central</option>
              <option value="Ife East">Ife East </option>
              <option value="Ife North">Ife North </option>
              <option value="Ife South">Ife South </option>
              <option value="Ifedayo"> Ifedayo</option>
              <option value="Ifelodun, Osun State"> Ifelodun, Osun State</option>
              <option value="Ila, Osun"> Ila, Osun</option>
              <option value="Ilesa East">Ilesa East </option>
              <option value="Ilesa West"> Ilesa West</option>
              <option value="Irepodun, Osun"> Irepodun, Osun</option>
              <option value="Irewole"> Irewole</option>
              <option value="Isokan"> Isokan</option>
              <option value="Iwo, Osun"> Iwo, Osun</option>
              <option value="Obokun"> Obokun</option>
              <option value="Odo Otin">Odo Otin </option>
              <option value="Ola Oluwa"> Ola Oluwa</option>
              <option value="Olorunda"> Olorunda</option>
              <option value="Oriade"> Oriade</option>
              <option value="Orolu">Orolu </option>
              <option value="Osogbo"> Osogbo</option>
            </select>
            <label for="lg">Local Government</label>
            <strong class="text-danger" id="lg_error"></strong>
          </div>

          <div class="form-floating mt-2">
            <input type="text" name="ward" placeholder="Ward" class="form-control " id="">
            <label for="ward">Ward</label>
            <strong class="text-danger" id="ward_error"></strong>
          </div>

          <div class="form-floating mt-2">
            <input type="text" name="poll" placeholder="Poll Unit" class="form-control " id="">
            <label for="poll-unit">Poll Unit </label>
            <strong class="text-danger" id="poll_error"></strong>
          </div>
          
        <div class="form-floating mt-2">
            <select name="role" class="form-control" id="">
              <option value="">Select Role</option>
              <option value="User">User</option>
              <option value="Admin">Admin</option>
            </select>
            <label for="Role">Select Role</label>
            <strong class="text-danger" id="role_error"></strong>
          </div>
          
          <div class="form-floating mt-2">
            <input type="password" name="password" placeholder="Password" class="form-control " id="">
            <label for="password">Password </label>
            <strong class="text-danger" id="password_error"></strong>
          </div>
          <button type="submit" name="reg" class="btn my-2 btn-success btn-lg">Register</button>

         
        </form>
      </div>
    </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.section -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // Loading Script
  function loading() {
    setTimeout(function() {
      document.getElementById("loader").classList.add("d-none");
      document.getElementById("mainpage").classList.remove("d-none");
    }, 1000);
  }
</script>
<script>
  // Get my elements
  let regform = document.getElementById('regform');
  // display error
  function errors(id, message) {
    id = document.getElementById(id);
    id.innerHTML = message
  }

let alert = document.getElementById('alert');
alert.style.opacity= '0'
  function validation() {
    if (regform.fullname.value.trim() === '') {
      errors('fullname_error', "Fullname cannot be empty");
      return false
    }
    if (regform.phone.value.trim() === '') {
      errors('phone_error', "Phone No cannot be empty");
      return false;
    }
    if (isNaN(regform.phone.value.trim()) === true ) {
      errors('phone_error', "Invalid Phone Number");
      return false;
    }
    if (regform.lg.value.trim() === '') {
      errors('lg_error', "local Government No cannot be empty");
      return false
    }
    if (regform.ward.value.trim() === '') {
      errors('ward_error', "Ward No cannot be empty");
      return false
    }
    if (regform.poll.value.trim() === '') {
      errors('poll_error', "Poll No cannot be empty")
      return false
    }
    if (regform.password.value.trim() === '') {
      errors('password', "Password cannot be empty");
      return false
    }
    if (regform.password.value.trim().leng < 6 ) {
      errors('password', "Manimum of six Character or more");
      return false
    }
  
    if (regform.role.value.trim() === '') {
      errors('role_error', "You must Select one");
      return false
    }
    return true
  }

  regform.addEventListener('submit', (e) => {
    e.preventDefault();

    if (validation()) {
      fullname = regform['fullname'].value.trim();
      username = regform['username'].value.trim();
      phone = regform['phone'].value.trim();
      lg = regform['lg'].value.trim();
      ward = regform['ward'].value.trim();
      poll = regform['poll'].value.trim();
      password = regform['password'].value.trim();
      role = regform['role'].value.trim();

      axios.post('add-agent-action.php', {
        fullname: fullname,
        username: username,
        phone: phone,
        lg: lg,
        ward: ward,
        poll: poll,
        password: password,
        role: role,
      }).then(function(response) {
        // console.log(response);

        if (response.data.fullnameErr) {
          errors('fullname_error', response.data.fullnameErr);
        }
        if (response.data.usernameErr) {
          errors('username_error', response.data.usernameErr);
        }
        if (response.data.phoneErr) {
          errors('phone_error', response.data.phoneErr);
        }
        if (response.data.lgErr) {
          errors('lg_error', response.data.lgErr);
        }

        if (response.data.pollErr) {
          errors('poll_error', response.data.pollErr);
        }
        if (response.data.wardErr) {
          errors('ward_error', response.data.wardErr);
        }
        if (response.data.passwordErr) {
          errors('password_error', response.data.passwordErr);
        }
       
        if (response.data.roleErr) {
          errors('role_error', response.data.roleErr);
        }
        if (response.data.exist) {
          // var alert = document.getElementById('alert');
          alert.style.opacity= '1'
          alert.classList.remove('alert-danger');
          errors("alert_text", response.data.exist);
          window.scrollTo(0, 100)
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: response.data.exist,
          })
        }
        if (response.data.success && ! response.data.exist) {
          // var alert = document.getElementById('alert');
          alert.style.opacity= '1'
          alert.classList.add('alert-success');
          errors("alert_text", response.data.success);
          document.getElementById('warning').innerHTML = " Take note of your user's login details and keep it save"
          document.getElementById('username').innerHTML = " Username: " + response.data.username;
          document.getElementById('password').innerHTML = " Password: " + response.data.password;
          Swal.fire({
            icon: 'success',
            title: 'added',
            text: 'Memeber added successfully',
            footer: '<a href="index.php">Go to home page?</a>'
          })
         

        } //success if

      }) //then
    } //if validate

  })
</script>
<?php require_once "inc/footer.php"; ?>