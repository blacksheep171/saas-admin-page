<?php include('./../../pages/template/header.php'); ?>
<?php include('./../../pages/template/sidebar.php'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Connections</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Account Settings</a>
                    </li>
                    <li class="breadcrumb-item active">Connection
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
        <div class="content-body"><div class="row">
  <div class="col-12">
    <ul class="nav nav-pills mb-2">
      <!-- account -->
      <li class="nav-item">
        <a class="nav-link" href="page-account-settings-account.php">
          <i data-feather="user" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class="nav-item">
        <a class="nav-link" href="page-account-settings-security.php">
          <i data-feather="lock" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Security</span>
        </a>
      </li>
      <!-- notification -->
      <li class="nav-item">
        <a class="nav-link" href="page-account-settings-notifications.php">
          <i data-feather="bell" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class="nav-item">
        <a class="nav-link active" href="page-account-settings-connections.php">
          <i data-feather="link" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Connections</span>
        </a>
      </li>
    </ul>

    <!-- connection -->

    <div class="row">
      <div class="col-md-6 col-12">
        <div class="card">
          <div class="card-header border-bottom">
            <h4 class="card-title">Connected accounts</h4>
          </div>
          <div class="card-body pt-2">
            <p>Display content from your connected accounts on your site</p>

            <!-- Connections -->
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/google.png"
                  alt="google"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex align-item-center justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Google</p>
                  <span>Calendar and contacts</span>
                </div>
                <div class="mt-50 mt-sm-0">
                  <div class="form-check form-switch form-check-primary">
                    <input type="checkbox" class="form-check-input" id="checkboxGoogle" checked />
                    <label class="form-check-label" for="checkboxGoogle">
                      <span class="switch-icon-left"><i data-feather="check"></i></span>
                      <span class="switch-icon-right"><i data-feather="x"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/slack.png"
                  alt="slack"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex align-item-center justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Slack</p>
                  <span>Communication</span>
                </div>
                <div class="mt-50 mt-sm-0">
                  <div class="form-check form-switch form-check-primary">
                    <input type="checkbox" class="form-check-input" id="checkboxSlack" />
                    <label class="form-check-label" for="checkboxSlack">
                      <span class="switch-icon-left"><i data-feather="check"></i></span>
                      <span class="switch-icon-right"><i data-feather="x"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/github.png"
                  alt="github"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex align-item-center justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Github</p>
                  <span>Manage your Git repositories</span>
                </div>
                <div class="mt-50 mt-sm-0">
                  <div class="form-check form-switch form-check-primary">
                    <input type="checkbox" class="form-check-input" id="checkboxGithub" checked />
                    <label class="form-check-label" for="checkboxGithub">
                      <span class="switch-icon-left"><i data-feather="check"></i></span>
                      <span class="switch-icon-right"><i data-feather="x"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/mailchimp.png"
                  alt="mailchimp"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex align-item-center justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Mailchimp</p>
                  <span>Email marketing service</span>
                </div>
                <div class="mt-50 mt-sm-0">
                  <div class="form-check form-switch form-check-primary">
                    <input type="checkbox" class="form-check-input" id="checkboxMailchimp" />
                    <label class="form-check-label" for="checkboxMailchimp">
                      <span class="switch-icon-left"><i data-feather="check"></i></span>
                      <span class="switch-icon-right"><i data-feather="x"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/asana.png"
                  alt="asana"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex align-item-center justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Asana</p>
                  <span>Communication</span>
                </div>
                <div class="mt-50 mt-sm-0">
                  <div class="form-check form-switch form-check-primary">
                    <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                    <label class="form-check-label" for="checkboxAsana">
                      <span class="switch-icon-left"><i data-feather="check"></i></span>
                      <span class="switch-icon-right"><i data-feather="x"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Connections -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="card">
          <div class="card-header border-bottom">
            <h4 class="card-title">Social accounts</h4>
          </div>
          <div class="card-body pt-2">
            <p>Display content from social accounts on your site</p>
            <!-- Social Accounts -->
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/facebook.png"
                  alt="facebook"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Facebook</p>
                  <span>Not Connected</span>
                </div>
                <div class="mt-50 mt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary">
                    <i data-feather="link" class="font-medium-3"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-start mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/twitter.png"
                  alt="twitter"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Twitter</p>
                  <a href="https://twitter.com/pixinvent" target="_blank">@pixinvent</a>
                </div>
                <div class="mt-50 mt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary">
                    <i data-feather="x" class="font-medium-3"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/linkedin.png"
                  alt="instagram"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Linkedin</p>
                  <a href="https://www.linkedin.com/company/pixinvent" target="_blank"> @pixinvent </a>
                </div>
                <div class="mt-50 mt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary">
                    <i data-feather="x" class="font-medium-3"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/dribbble.png"
                  alt="dribbble"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Dribbble</p>
                  <span>Not Connected</span>
                </div>
                <div class="mt-50 mt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary">
                    <i data-feather="link" class="font-medium-3"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mt-2">
              <div class="flex-shrink-0">
                <img
                  src="../../../app-assets/images/icons/social/behance.png"
                  alt="behance"
                  class="me-1"
                  height="38"
                  width="38"
                />
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-1">
                  <p class="fw-bolder mb-0">Behance</p>
                  <span>Not Connected</span>
                </div>
                <div class="mt-50 mt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary">
                    <i data-feather="link" class="font-medium-3"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- /Social Accounts -->
          </div>
        </div>
      </div>
    </div>

    <!--/ connection -->
  </div>
</div>

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
<?php include('./../../pages/template/footer.php'); ?>