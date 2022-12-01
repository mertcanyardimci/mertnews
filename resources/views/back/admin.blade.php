<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>MertNews Panel</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('back')}}/Admin/src/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('back')}}/Admin/src/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('back')}}/Admin/src/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{asset('back')}}/Admin/src/assets/css/oneui.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
    @toastr_css
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header">
          <!-- Logo -->
          <a class="fw-semibold text-dual" href="{{route('admin.dashboard')}}">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">Panel</span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
              <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->
            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

            <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-heading">Haberler</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fas fa-fw fa-edit"></i>
                  <span class="nav-main-link-name">Haber İşlemleri</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('admin.haberler.index')}}">
                      <span class="nav-main-link-name">Tüm Haberler</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('admin.haberler.create')}}">
                      <span class="nav-main-link-name">Haber Oluştur</span>
                    </a>
                  </li>
                </ul>
                <li class="nav-main-heading">
                  <a class="nav-link" href="{{route('admin.categories.index')}}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Kategoriler</span>
                  </a>
                </li>
                <li class="nav-main-heading">
                  <a class="nav-link" href="{{route('admin.yazars.index')}}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Yazarlar</span>
                  </a>
                </li>
              </li>
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
          @foreach($admins as $admin)
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="{{asset('back')}}/Admin/src/assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
                <span class="d-none d-sm-inline-block ms-2">{{$admin->name}}</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('back')}}/Admin/src/assets/media/avatars/avatar10.jpg" alt="">
                  <p class="mt-2 mb-0 fw-medium">{{$admin->name}}</p>
                  <p class="mb-0 text-muted fs-sm fw-medium">Admin</p>
                </div>
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('admin.logout')}}">
                    <span class="fs-sm fw-medium">Çıkış Yap</span>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero Content -->
        <div class="bg-primary-dark">
          <div class="content content-full overflow-hidden pt-7 pb-6 text-center">
            <h1 class="h2 text-white mb-2">
              MERTNEWS
            </h1>
          </div>
        </div>
        <!-- END Hero Content -->

        <!-- Page Content -->
        <div class="content content-boxed">
          <div class="row items-push">
            <div class="col-xxl-8">
              <!-- Story -->
              <div class="block block-rounded">
                <div class="block-content">
                @foreach($news as $new)
                  <div class="row items-push">
                    <div class="col-md-4 col-lg-5">
                      <a class="img-link img-link-simple" target="_blank" href="{{route('new.single',$new->id)}}">
                        <img class="img-fluid rounded" src="{{$new->image}}" alt="">
                      </a>
                    </div>
                    <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
                      <div>
                        <h4 class="mb-1">
                          <a class="text-dark" target="_blank" href="{{route('new.single',$new->id)}}">{{$new->title}}</a>
                        </h4>
                        <div class="fs-sm fw-medium mb-3">
                          <a href="#">{{$new->getYazar->name}}</a><span class="text-muted"></span>
                        </div>
                        <p class="fs-sm text-muted">
                        {{str_limit($new->content,150)}}
                        </p>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
              <!-- END Story -->
              <!-- Pagination -->
              <nav aria-label="Page navigation">
                <ul class="pagination push">
                {{$news->links('pagination::bootstrap-4')}}
                </ul>
              </nav>
              <!-- END Pagination -->
            </div>
            <div class="col-xxl-4">
              <div class="bg-body-dark rounded-3 p-4">
                <!-- Social -->
                <div class="block block-rounded mb-3">
                  <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-alt-secondary" href="https://twitter.com/" target="_blank" data-bs-toggle="tooltip" title="Follow us on Twitter">
                      <i class="fab fa-fw fa-twitter"></i>
                    </a>
                    <a class="btn btn-sm btn-alt-secondary" href="https://tr-tr.facebook.com/" target="_blank" data-bs-toggle="tooltip" title="Like our Facebook page">
                      <i class="fab fa-fw fa-facebook"></i>
                    </a>
                    <a class="btn btn-sm btn-alt-secondary" href="https://accounts.google.com/" target="_blank" data-bs-toggle="tooltip" title="Follow us on Google Plus">
                      <i class="fab fa-fw fa-google-plus"></i>
                    </a>
                    <a class="btn btn-sm btn-alt-secondary" href="https://dribbble.com/" target="_blank" data-bs-toggle="tooltip" title="Follow us on Dribbble">
                      <i class="fab fa-fw fa-dribbble"></i>
                    </a>
                    <a class="btn btn-sm btn-alt-secondary" href="https://www.youtube.com/" target="_blank" data-bs-toggle="tooltip" title="Subscribe on Youtube">
                      <i class="fab fa-fw fa-youtube"></i>
                    </a>
                  </div>
                </div>
                <!-- END Social -->

                <!-- Recent Comments -->
                <div class="block block-rounded mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Okuyuculardan Gelenler</h3>
                  </div>
                  <div class="block-content fs-sm">
                    <div class="push">
                    @foreach($contacts as $comment)
                      <p class="fw-medium mb-0 ">
                        <a>{{$comment->name}}</a>
                      </p>
                      <p class="mb-0">
                      {{$comment->message}}
                      </p>
                    @endforeach
                    </div>
                  </div>
                </div>
                <!-- END Recent Comments -->
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">OneUI 5.4</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS
    
        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{asset('back')}}/Admin/src/assets/js/oneui.app.min.js"></script>
    @toastr_js
    @toastr_render
  </body>
</html>
