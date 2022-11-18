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
                <h2 class="content-header-title float-start mb-0">Security</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Account Settings</a>
                    </li>
                    <li class="breadcrumb-item active">Security
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
        <div class="content-body">
          <div class="row">
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
        <a class="nav-link active" href="page-account-settings-security.php">
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
        <a class="nav-link" href="page-account-settings-connections.php">
          <i data-feather="link" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Connections</span>
        </a>
      </li>
    </ul>

    <!-- security -->

    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Change Password</h4>
      </div>
      <div class="card-body pt-1">
        <!-- form -->
        <form class="validate-form">
          <div class="row">
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="account-old-password">Current password</label>
              <div class="input-group form-password-toggle input-group-merge">
                <input
                  type="password"
                  class="form-control"
                  id="account-old-password"
                  name="password"
                  placeholder="Enter current password"
                  data-msg="Please current password"
                />
                <div class="input-group-text cursor-pointer">
                  <i data-feather="eye"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="account-new-password">New Password</label>
              <div class="input-group form-password-toggle input-group-merge">
                <input
                  type="password"
                  id="account-new-password"
                  name="new-password"
                  class="form-control"
                  placeholder="Enter new password"
                />
                <div class="input-group-text cursor-pointer">
                  <i data-feather="eye"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="account-retype-new-password">Retype New Password</label>
              <div class="input-group form-password-toggle input-group-merge">
                <input
                  type="password"
                  class="form-control"
                  id="account-retype-new-password"
                  name="confirm-new-password"
                  placeholder="Confirm your new password"
                />
                <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
              </div>
            </div>
            <div class="col-12">
              <p class="fw-bolder">Password requirements:</p>
              <ul class="ps-1 ms-25">
                <li class="mb-50">Minimum 8 characters long - the more, the better</li>
                <li class="mb-50">At least one lowercase character</li>
                <li>At least one number, symbol, or whitespace character</li>
              </ul>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary me-1 mt-1">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <!-- two-step verification -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Two-step verification</h4>
      </div>
      <div class="card-body my-2 py-25">
        <p class="fw-bolder">Two factor authentication is not enabled yet.</p>
        <p>
          Two-factor authentication adds an additional layer of security to your account by requiring <br />
          more than just a password to log in. Learn more.
        </p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twoFactorAuthModal">
          Enable two-factor authentication
        </button>
      </div>
    </div>
    <!-- / two-step verification -->

    <!-- create API key -->
    <div class="card">
      <div class="card-header pb-0">
        <h4 class="card-title">Create an API Key</h4>
      </div>
      <div class="row">
        <div class="col-md-5 order-md-0 order-1">
          <div class="card-body">
            <!-- form -->
            <form id="createApiForm" class="validate-form" onsubmit="return false">
              <div class="mb-2">
                <label for="ApiKeyType" class="form-label">Choose the Api key type you want to create</label>
                <select class="select2 form-select" id="ApiKeyType">
                  <option value="">Choose Key Type</option>
                  <option value="full" selected>Full Access</option>
                  <option value="modify">Modify</option>
                  <option value="read-execute">Read &amp; Execute</option>
                  <option value="folders">List Folder Contents</option>
                  <option value="read">Read Only</option>
                  <option value="read-write">Read &amp; Write</option>
                </select>
              </div>

              <div class="mb-2">
                <label for="nameApiKey" class="form-label">Name the API key</label>
                <input
                  class="form-control"
                  type="text"
                  name="apiKeyName"
                  placeholder="Server Key 1"
                  id="nameApiKey"
                  data-msg="Please enter API key name"
                />
              </div>

              <button type="submit" class="btn btn-primary w-100">Create Key</button>
            </form>
          </div>
        </div>
        <div class="col-md-7 order-md-1 order-0">
          <div class="text-center">
            <img
              class="img-fluid text-center"
              src="../../../app-assets/images/illustration/pricing-Illustration.svg"
              alt="illustration"
              width="310"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- / create API key -->

    <!-- api key list -->
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">API Key List & Access</h4>
      </div>
      <div class="card-body">
        <p class="card-text">
          An API key is a simple encrypted string that identifies an application without any principal. They are useful
          for accessing public data anonymously, and are used to associate API requests with your project for quota and
          billing.
        </p>

        <div class="row gy-2">
          <div class="col-12">
            <div class="bg-light-secondary position-relative rounded p-2">
              <div class="dropdown dropstart btn-pinned">
                <button
                  class="btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0"
                  type="button"
                  id="dropdownMenuButton1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="font-medium-4"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="edit-2" class="me-50"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="trash-2" class="me-50"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="d-flex align-items-center flex-wrap">
                <h4 class="mb-1 me-1">Server Key 1</h4>
                <span class="badge badge-light-primary mb-1">Full Access</span>
              </div>
              <h6 class="d-flex align-items-center fw-bolder">
                <span class="me-50">23eaf7f0-f4f7-495e-8b86-fad3261282ac</span>
                <span><i data-feather="copy" class="font-medium-4 cursor-pointer"></i></span>
              </h6>
              <span>Created on 28 Apr 2021, 18:20 GTM+4:10</span>
            </div>
          </div>
          <div class="col-12">
            <div class="bg-light-secondary position-relative rounded p-2">
              <div class="dropdown dropstart btn-pinned">
                <button
                  class="btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0"
                  type="button"
                  id="dropdownMenuButton2"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="font-medium-4"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="edit-2" class="me-50"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="trash-2" class="me-50"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="d-flex align-items-center flex-wrap">
                <h4 class="mb-1 me-1">Server Key 2</h4>
                <span class="badge badge-light-primary mb-1">Read Only</span>
              </div>
              <h6 class="d-flex align-items-center fw-bolder">
                <span class="me-50">bb98e571-a2e2-4de8-90a9-2e231b5e99</span>
                <span><i data-feather="copy" class="font-medium-4 cursor-pointer"></i></span>
              </h6>
              <span>Created on 12 Feb 2021, 10:30 GTM+2:30</span>
            </div>
          </div>
          <div class="col-12">
            <div class="bg-light-secondary position-relative rounded p-2">
              <div class="dropdown dropstart btn-pinned">
                <button
                  class="btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0"
                  type="button"
                  id="dropdownMenuButton3"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="font-medium-4"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="edit-2" class="me-50"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="trash-2" class="me-50"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="d-flex align-items-center flex-wrap">
                <h4 class="mb-1 me-1">Server Key 3</h4>
                <span class="badge badge-light-primary mb-1">Full Access</span>
              </div>
              <h6 class="d-flex align-items-center fw-bolder">
                <span class="me-50">2e915e59-3105-47f2-8838-6e46bf83b711</span>
                <span><i data-feather="copy" class="font-medium-4 cursor-pointer"></i></span>
              </h6>
              <span>Created on 28 Apr 2021, 12:21 GTM+4:10</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / api key list -->

    <!-- recent device -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Recent devices</h4>
      </div>
      <div class="card-body my-2 py-25">
        <div class="table-responsive">
          <table class="table table-bordered text-nowrap text-center">
            <thead>
              <tr>
                <th class="text-start">BROWSER</th>
                <th>DEVICE</th>
                <th>LOCATION</th>
                <th>RECENT ACTIVITY</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-start">
                  <div class="avatar me-25">
                    <img src="../../../app-assets/images/icons/google-chrome.png" alt="avatar" width="20" height="20" />
                  </div>
                  <span class="fw-bolder">Chrome on Windows</span>
                </td>
                <td>Dell XPS 15</td>
                <td>United States</td>
                <td>10, Jan 2021 20:07</td>
              </tr>
              <tr>
                <td class="text-start">
                  <div class="avatar me-25">
                    <img src="../../../app-assets/images/icons/google-chrome.png" alt="avatar" width="20" height="20" />
                  </div>
                  <span class="fw-bolder">Chrome on Android</span>
                </td>
                <td>Google Pixel 3a</td>
                <td>Ghana</td>
                <td>11, Jan 2021 10:16</td>
              </tr>
              <tr>
                <td class="text-start">
                  <div class="avatar me-25">
                    <img src="../../../app-assets/images/icons/google-chrome.png" alt="avatar" width="20" height="20" />
                  </div>
                  <span class="fw-bolder">Chrome on MacOS</span>
                </td>
                <td>Apple iMac</td>
                <td>Mayotte</td>
                <td>11, Jan 2021 12:10</td>
              </tr>
              <tr>
                <td class="text-start">
                  <div class="avatar me-25">
                    <img src="../../../app-assets/images/icons/google-chrome.png" alt="avatar" width="20" height="20" />
                  </div>
                  <span class="fw-bolder">Chrome on iPhone</span>
                </td>
                <td>Apple iPhone XR</td>
                <td>Mauritania</td>
                <td>12, Jan 2021 8:29</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- / recent device -->

    <!--/ security -->
  </div>
</div>
          <!-- two factor auth modal -->
<div class="modal fade" id="twoFactorAuthModal" tabindex="-1" aria-labelledby="twoFactorAuthTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 mx-50">
        <h1 class="text-center mb-1" id="twoFactorAuthTitle">Select Authentication Method</h1>
        <p class="text-center mb-3">
          you also need to select a method by which the proxy
          <br />
          authenticates to the directory serve
        </p>

        <div class="custom-options-checkable">
          <input
            class="custom-option-item-check"
            type="radio"
            name="twoFactorAuthRadio"
            id="twoFactorAuthApps"
            value="apps-auth"
            checked
          />
          <label
            for="twoFactorAuthApps"
            class="custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2 mb-2"
          >
            <span><i data-feather="settings" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
            <span>
              <span class="custom-option-item-title h3">Authenticator Apps</span>
              <span class="d-block mt-75">
                Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.
              </span>
            </span>
          </label>

          <input
            class="custom-option-item-check"
            type="radio"
            name="twoFactorAuthRadio"
            value="sms-auth"
            id="twoFactorAuthSms"
          />
          <label
            for="twoFactorAuthSms"
            class="custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2"
          >
            <span><i data-feather="message-square" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
            <span>
              <span class="custom-option-item-title h3">SMS</span>
              <span class="d-block mt-75"
                >We will send a code via SMS if you need to use your backup login method.</span
              >
            </span>
          </label>
        </div>

        <button id="nextStepAuth" class="btn btn-primary float-end mt-3">
          <span class="me-50">Continue</span>
          <i data-feather="chevron-right"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- / two factor auth modal -->

<!-- add authentication apps modal -->
<div
  class="modal fade"
  id="twoFactorAuthAppsModal"
  tabindex="-1"
  aria-labelledby="twoFactorAuthAppsTitle"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth-apps">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 mx-50">
        <h1 class="text-center mb-2 pb-50" id="twoFactorAuthAppsTitle">Add Authenticator App</h1>

        <h4>Authenticator Apps</h4>
        <p>
          Using an authenticator app like Google Authenticator, Microsoft Authenticator, Authy, or 1Password, scan the
          QR code. It will generate a 6 digit code for you to enter below.
        </p>

        <div class="d-flex justify-content-center my-2 py-50">
          <img class="img-fluid" src="../../../app-assets/images/icons/qrcode.png" width="122" alt="QR Code" />
        </div>

        <div class="alert alert-warning" role="alert">
          <h4 class="alert-heading">ASDLKNASDA9AHS678dGhASD78AB</h4>
          <div class="alert-body fw-normal">
            If you having trouble using the QR code, select manual entry on your app
          </div>
        </div>

        <form class="row gy-1" onsubmit="return false">
          <div class="col-12">
            <input class="form-control" id="authenticationCode" type="text" placeholder="Enter authentication code" />
          </div>
          <div class="col-12 d-flex justify-content-end">
            <button type="reset" class="btn btn-outline-secondary mt-2 me-1" data-bs-dismiss="modal" aria-label="Close">
              Cancel
            </button>
            <button type="submit" class="btn btn-primary mt-2">
              <span class="me-50">Continue</span>
              <i data-feather="chevron-right"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- / add authentication apps modal-->

<!-- add authentication sms modal-->
<div
  class="modal fade"
  id="twoFactorAuthSmsModal"
  tabindex="-1"
  aria-labelledby="twoFactorAuthSmsTitle"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth-sms">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 mx-50">
        <h1 class="text-center mb-2 pb-50" id="twoFactorAuthSmsTitle">`</h1>
        <h4>Verify Your Mobile Number for SMS</h4>
        <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
        <form class="row gy-1 mt-1" onsubmit="return false">
          <div class="col-12">
            <input class="form-control phone-number-mask" type="text" placeholder="Mobile number with country code" />
          </div>
          <div class="col-12 d-flex justify-content-end">
            <button type="reset" class="btn btn-outline-secondary mt-1 me-1" data-bs-dismiss="modal" aria-label="Close">
              Cancel
            </button>
            <button type="submit" class="btn btn-primary mt-1">
              <span class="me-50">Continue</span>
              <i data-feather="chevron-right"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- / add authentication sms modal-->

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