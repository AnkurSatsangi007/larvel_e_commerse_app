@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
  <!-- start: page toolbar -->
  <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
      <div class="row g-3 mb-3 align-items-center">
        <div class="col">
          <ol class="breadcrumb bg-transparent mb-0">
            <li class="breadcrumb-item"><a class="text-secondary" href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>
      </div> <!-- .row end -->
      <div class="row align-items-center">
        <div class="col">
          <h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, Allie!</h1>
          <small class="text-muted">You have 12 new messages and 7 new notifications.</small>
        </div>
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-12 mt-2 mt-md-0">
          <!-- daterange picker -->
          <div class="input-group">
            <input class="form-control" type="text" name="daterange">
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Send Report"><i class="fa fa-envelope"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Download Reports"><i class="fa fa-download"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Generate PDF"><i class="fa fa-file-pdf-o"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Share Dashboard"><i class="fa fa-share-alt"></i></button>
          </div>
          <!-- Plugin Js -->
          <script src="{{ asset('backend/js/bundle/daterangepicker.bundle.js')}}"></script>
          <!-- Jquery Page Js -->
          <script>
            // date range picker
            $(function() {
              $('input[name="daterange"]').daterangepicker({
                opens: 'left'
              }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
              });
            })
          </script>
        </div>
      </div> <!-- .row end -->
    </div>
  </div>
  <!-- start: page body -->
  <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
      <div class="row g-3 row-deck">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card overflow-hidden">
            <div class="card-body">
              <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-muted" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                <path class="fill-primary" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              </svg>
              <div class="mb-2 text-uppercase">NEW EMPLOYEE</div>
              <div><span class="h4">51</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 13%</span></div>
              <small class="text-muted">Analytics for last week</small>
            </div>
            <div class="progress" style="height: 4px;">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card overflow-hidden">
            <div class="card-body">
              <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-muted" d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                <path class="fill-primary" d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
              </svg>
              <div class="mb-2 text-uppercase">EXPENSE</div>
              <div><span class="h4">$3,251</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 13%</span></div>
              <small class="text-muted">Analytics for last week</small>
            </div>
            <div class="progress" style="height: 4px;">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card overflow-hidden">
            <div class="card-body">
              <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-primary" fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                <path class="fill-primary" d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                <path class="fill-muted" d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                <path class="fill-muted" d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
              </svg>
              <div class="mb-2 text-uppercase">Revenue</div>
              <div><span class="h4">$18,925</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 78%</span></div>
              <small class="text-muted">Analytics for last week</small>
            </div>
            <div class="progress" style="height: 4px;">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card overflow-hidden">
            <div class="card-body">
              <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-muted" d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                <path class="fill-primary" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
              </svg>
              <div class="mb-2 text-uppercase">NEW LEADS</div>
              <div><span class="h4">125</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 55%</span></div>
              <small class="text-muted">Analytics for last week</small>
            </div>
            <div class="progress" style="height: 4px;">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
          <div class="card text-center bg-primary-gradient">
            <div class="card-body d-flex align-items-center justify-content-center">
              <div>
                <h4 class="mt-4">Welcome Back, Chris!!</h4>
                <p class="card-text fs-6 mb-5"><strong>Need help?</strong> Check out the documentation of Luno Admin. It includes tons of <strong>Widgets</strong>, <strong>Components</strong>, and Elements with <strong>easy-to-follow</strong> documentation.</p>
                <a class="btn btn-lg bg-white text-uppercase px-4 lift" href="docs/index.html" title="">Visit Documentation</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-8 col-lg-8">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title m-0">LUNO Revenue</h6>
              <!-- widgest: Card more action icon -->
              <div class="dropdown morphing scale-left">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                <ul class="dropdown-menu shadow border-0 p-2">
                  <li><a class="dropdown-item" href="#">File Info</a></li>
                  <li><a class="dropdown-item" href="#">Copy to</a></li>
                  <li><a class="dropdown-item" href="#">Move to</a></li>
                  <li><a class="dropdown-item" href="#">Rename</a></li>
                  <li><a class="dropdown-item" href="#">Block</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div id="apex-AudienceOverview"></div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title mb-0">Sales by Category</h6>
              <!-- widgest: Card more action icon -->
              <div class="dropdown morphing scale-left">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                <ul class="dropdown-menu shadow border-0 p-2">
                  <li><a class="dropdown-item" href="#">File Info</a></li>
                  <li><a class="dropdown-item" href="#">Copy to</a></li>
                  <li><a class="dropdown-item" href="#">Move to</a></li>
                  <li><a class="dropdown-item" href="#">Rename</a></li>
                  <li><a class="dropdown-item" href="#">Block</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div id="apex-SalesbyCategory"></div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title mb-0">My Wallet</h6>
              <!-- widgest: Card more action icon -->
              <div class="dropdown morphing scale-left">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                <ul class="dropdown-menu shadow border-0 p-2">
                  <li><a class="dropdown-item" href="#">File Info</a></li>
                  <li><a class="dropdown-item" href="#">Copy to</a></li>
                  <li><a class="dropdown-item" href="#">Move to</a></li>
                  <li><a class="dropdown-item" href="#">Rename</a></li>
                  <li><a class="dropdown-item" href="#">Block</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div>Available BTC <a href="crypto/index.html">View Account</a></div>
              <h3>0.0386245 BTC</h3>
              <div class="py-4">
                <div class="text-uppercase text-muted small">Buy this month</div>
                <h5>3.0675432 BTC</h5>
                <div class="mt-3 text-uppercase text-muted small">Sell this month</div>
                <h5>2.0345618 BTC</h5>
              </div>
              <div class="btn-group d-flex">
                <input type="radio" class="btn-check" name="gm-btnradio" id="gm-btnradio1" checked="">
                <label class="btn btn-outline-secondary" for="gm-btnradio1">Buy</label>
                <input type="radio" class="btn-check" name="gm-btnradio" id="gm-btnradio2">
                <label class="btn btn-outline-secondary" for="gm-btnradio2">Sell</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title mb-0">Downloads</h6>
              <!-- widgest: Card more action icon -->
              <div class="dropdown morphing scale-left">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                <ul class="dropdown-menu shadow border-0 p-2">
                  <li><a class="dropdown-item" href="#">File Info</a></li>
                  <li><a class="dropdown-item" href="#">Copy to</a></li>
                  <li><a class="dropdown-item" href="#">Move to</a></li>
                  <li><a class="dropdown-item" href="#">Rename</a></li>
                  <li><a class="dropdown-item" href="#">Block</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="d-flex py-2 mb-2">
                  <div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o fa-lg"></i></div>
                  <div class="flex-fill ms-3">
                    <span>LUNO_admin.zip</span>
                    <div class="progress mt-2" style="height: 5px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </li>
                <li class="d-flex py-2 mb-2">
                  <div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o fa-lg"></i></div>
                  <div class="flex-fill ms-3">
                    <span>reposrt_2020.pdf</span>
                    <div class="progress mt-2" style="height: 5px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </li>
                <li class="d-flex py-2 mb-2">
                  <div class="avatar rounded no-thumbnail"><i class="fa fa-file-code-o fa-lg"></i></div>
                  <div class="flex-fill ms-3">
                    <span>package.json</span>
                    <div class="progress mt-2" style="height: 5px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </li>
                <li class="d-flex py-2 mb-2">
                  <div class="avatar rounded no-thumbnail"><i class="fa fa-file-code-o fa-lg"></i></div>
                  <div class="flex-fill ms-3">
                    <span>bootstrap.min.css</span>
                    <div class="progress mt-2" style="height: 5px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </li>
              </ul>
              <small class="text-muted">Showing 4 out of 24 downloads.</small>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title m-0">Reports overview</h6>
              <!-- widgest: Card more action icon -->
              <div class="dropdown morphing scale-left">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                <ul class="dropdown-menu shadow border-0 p-2">
                  <li><a class="dropdown-item" href="#">File Info</a></li>
                  <li><a class="dropdown-item" href="#">Copy to</a></li>
                  <li><a class="dropdown-item" href="#">Move to</a></li>
                  <li><a class="dropdown-item" href="#">Rename</a></li>
                  <li><a class="dropdown-item" href="#">Block</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <h3>$7,431.14 USD</h3>
              <!-- Progress -->
              <div class="progress rounded-pill mb-2" style="height: 5px;">
                <div class="progress-bar chart-color1" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar chart-color2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar chart-color3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex justify-content-between">
                <span>0%</span>
                <span>100%</span>
              </div>
            </div>
            <div class="table-responsive border-top">
              <table class="table card-table table-nowrap mb-0">
                <tbody>
                  <tr>
                    <td><i class="fa fa-circle me-2 chart-text-color1"></i>Gross value</td>
                    <td>$3,500.71</td>
                    <td><span class="badge bg-success">+12.1%</span></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-circle me-2 chart-text-color2"></i>Net volume from sales</td>
                    <td>$2,980.45</td>
                    <td><span class="badge bg-warning">+6.9%</span></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-circle me-2 chart-text-color3"></i>New volume from sales</td>
                    <td>$950.00</td>
                    <td><span class="badge bg-danger">-1.5%</span></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-circle me-2"></i>Other</td>
                    <td>32</td>
                    <td><span class="badge bg-success">1.9%</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> <!-- .row end -->
    </div>
  </div>
  <!-- start: page footer -->
  <footer class="page-footer px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
      <p class="col-md-4 mb-0 text-muted">© 2022 <a href="https://www.thememakker.com/" target="_blank" title="ThemeMakker Infotech LLP">ThemeMakker</a>, All Rights Reserved.</p>
      <a href="#" class="col-md-4 d-flex align-items-center justify-content-center my-3 my-lg-0 me-lg-auto">
        <svg height="18" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z" />
          <path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z" />
          <path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z" />
          <path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z" />
        </svg>
      </a>
      <ul class="nav col-md-4 justify-content-center justify-content-lg-end">
        <li class="nav-item"><a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="nav-link px-2 text-muted">Portfolio</a></li>
        <li class="nav-item"><a href="https://themeforest.net/licenses/standard" target="_blank" class="nav-link px-2 text-muted">licenses</a></li>
        <li class="nav-item"><a href="https://help.market.envato.com/hc/en-us" target="_blank" class="nav-link px-2 text-muted">Support</a></li>
        <li class="nav-item"><a href="https://themeforest.net/licenses/faq" target="_blank" class="nav-link px-2 text-muted">FAQs</a></li>
      </ul>
    </div>
  </footer>
@endsection