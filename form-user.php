<?php include ("./header.php");?>
    <!-- BEGIN: Main Menu-->
<?php include ("./sidebar.php");?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Manage Users</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Users</a>
                    </li>
                    <li class="breadcrumb-item active">Manage Users
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Validation -->
<section class="bs-validation">
  <div class="row">
    <!-- Bootstrap Validation -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Manage Users</h4>
        </div>
        <div class="card-body">
          <form class="needs-validation" novalidate>
            <div class="mb-1">
              <label class="form-label" for="basic-addon-name">Name</label>

              <input
                type="text"
                id="basic-addon-name"
                class="form-control"
                placeholder="Name"
                aria-label="Name"
                aria-describedby="basic-addon-name"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-default-email1">Email</label>
              <input
                type="email"
                id="basic-default-email1"
                class="form-control"
                placeholder="john.doe@email.com"
                aria-label="john.doe@email.com"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter a valid email</div>
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-default-password1">Password</label>
              <input
                type="password"
                id="basic-default-password1"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your password.</div>
            </div>
            <div class="mb-1">
              <label class="form-label" for="bsDob">DOB</label>
              <input type="text" class="form-control picker" name="dob" id="bsDob" required />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your date of birth.</div>
            </div>
            <div class="mb-1">
              <label class="form-label" for="select-country1">Country</label>
              <select class="form-select" id="select-country1" required>
                <option value="">Select Country</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
                <option value="france">France</option>
                <option value="australia">Australia</option>
                <option value="spain">Spain</option>
              </select>
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please select your country</div>
            </div>
            <div class="mb-1">
              <label for="customFile1" class="form-label">Profile pic</label>
              <input class="form-control" type="file" id="customFile1" required />
            </div>
            <div class="mb-1">
              <label class="form-label" class="d-block">Gender</label>
              <div class="form-check my-50">
                <input
                  type="radio"
                  id="validationRadio3"
                  name="validationRadioBootstrap"
                  class="form-check-input"
                  required
                />
                <label class="form-check-label" for="validationRadio3">Male</label>
              </div>
              <div class="form-check">
                <input
                  type="radio"
                  id="validationRadio4"
                  name="validationRadioBootstrap"
                  class="form-check-input"
                  required
                />
                <label class="form-check-label" for="validationRadio4">Female</label>
              </div>
            </div>
            <div class="mb-1">
              <label for="validationCustomUsername" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input
                  type="text"
                  class="form-control"
                  id="validationCustomUsername"
                  aria-describedby="inputGroupPrepend"
                  required
                />
                <div class="invalid-feedback">Please choose a username.</div>
              </div>
            </div>
            <div class="mb-1">
              <label class="d-block form-label" for="validationBioBootstrap">Bio</label>
              <textarea
                class="form-control"
                id="validationBioBootstrap"
                name="validationBioBootstrap"
                rows="3"
                required
              ></textarea>
            </div>
            <div class="mb-1">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="validationCheckBootstrap" required />
                <label class="form-check-label" for="validationCheckBootstrap">Agree to our terms and conditions</label>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /Bootstrap Validation -->
  </div>
</section>
<!-- /Validation -->

        </div>
      </div>
    </div>
        <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
  <!-- Customizer header -->
  <div class="customizer-header px-2 pt-1 pb-0 position-relative">
    <h4 class="mb-0">Theme Customizer</h4>
    <p class="m-0">Customize & Preview in Real Time</p>

    <a class="customizer-close" href="#"><i data-feather="x"></i></a>
  </div>

  <hr />

  <!-- Styling & Text Direction -->
  <div class="customizer-styling-direction px-2">
    <p class="fw-bold">Skin</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinlight"
          name="skinradio"
          class="form-check-input layout-name"
          checked
          data-layout=""
        />
        <label class="form-check-label" for="skinlight">Light</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinbordered"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="bordered-layout"
        />
        <label class="form-check-label" for="skinbordered">Bordered</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skindark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="dark-layout"
        />
        <label class="form-check-label" for="skindark">Dark</label>
      </div>
      <div class="form-check">
        <input
          type="radio"
          id="skinsemidark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="semi-dark-layout"
        />
        <label class="form-check-label" for="skinsemidark">Semi Dark</label>
      </div>
    </div>
  </div>

  <hr />

  <!-- Menu -->
  <div class="customizer-menu px-2">
    <div id="customizer-menu-collapsible" class="d-flex">
      <p class="fw-bold me-auto m-0">Menu Collapsed</p>
      <div class="form-check form-check-primary form-switch">
        <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
        <label class="form-check-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Layout Width -->
  <div class="customizer-footer px-2">
    <p class="fw-bold">Layout Width</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
        <label class="form-check-label" for="layout-width-full">Full Width</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Navbar -->
  <div class="customizer-navbar px-2">
    <div id="customizer-navbar-colors">
      <p class="fw-bold">Navbar Color</p>
      <ul class="list-inline unstyled-list">
        <li class="color-box bg-white border selected" data-navbar-default=""></li>
        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
      </ul>
    </div>

    <p class="navbar-type-text fw-bold">Navbar Type</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
        <label class="form-check-label" for="nav-type-floating">Floating</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-sticky">Sticky</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-static">Static</label>
      </div>
      <div class="form-check">
        <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Footer -->
    <div class="customizer-footer px-2">
        <p class="fw-bold">Footer Type</p>
        <div class="d-flex">
        <div class="form-check me-1">
            <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
            <label class="form-check-label" for="footer-type-sticky">Sticky</label>
        </div>
        <div class="form-check me-1">
            <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
            <label class="form-check-label" for="footer-type-static">Static</label>
        </div>
        <div class="form-check me-1">
            <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
            <label class="form-check-label" for="footer-type-hidden">Hidden</label>
        </div>
        </div>
    </div>
</div>

    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <div class="buy-now"><a href="https://dev.homing.com" target="_blank" class="btn btn-danger">Home</a>

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include("./footer.php");?>