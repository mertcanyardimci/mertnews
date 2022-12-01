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
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">


      -->
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
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-fw fa-times"></i>
            </a>
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
            <!-- END Toggle Sidebar -->

            <!-- Toggle Mini Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <!-- END Toggle Mini Sidebar -->

            <!-- Open Search Section (visible on smaller screens) -->

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
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span class="fs-sm fw-medium">Settings</span>
                  </a>
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
      <!-- Main Container -->
      <main id="main-container">
<!-- Page Content -->
<div class="row block block-rounded">
  <div class="col-md-4">
    <div class="card shadow mb-4">
      <div class="card-header pu-3">
        <h6 class="m-0 font-weight-bold text-primary">Yeni Kategori Oluştur</h6>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('admin.categories.create')}}">
          @csrf
          <div class="form-group">
            <label>Kategori Adı</label>
            <input type="text" class="form-control" name="category" required />
          </div>
          <hr>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Ekle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <div class="card shadow mb-4">
      <div class="card-header pu-3">
        <h6 class="m-0 font-weight-bold text-primary">Tüm Kategoriler</h6>
      </div>
      <div class="card-body">
                  <!-- Partial Table -->
                  <div class="block block-rounded">
              <table class="table table-bordered table-striped table-vcenter">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 50px;">
                    </th>
                    <th>Kategori Adı</th>
                    <th class="d-none d-sm-table-cell" style="width: 25%;">Haber Sayısı</th>
                    <th class="text-center" style="width: 100;">İşlemler</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                  <tr>
                    <td class="text-center">
                    <a>{{$category->id}}</a>
                    </td>
                    <td class="fw-semibold fs-sm">
                      <a target="_blank" href="{{route('category',$category->slug)}}">{{$category->name}}</a>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success"><a>{{$category->newsCount()}}</a></span>
                    </td>
                    <td class="text-center">
                    <a category-id="{{$category->id}}" class="btn btn-sm btn-primary edit-click" title="Düzenle"><i class="fa fa-edit"></i></a>
                    <a category-id="{{$category->id}}" category-name="{{$category->name}}" category-count="{{$category->newsCount()}}" class="btn btn-sm btn-danger remove-click" title="Sil"><i class="fa fa-remove"></i></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Partial Table -->
      </div>
    </div>
  </div>
</div>
<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Kategoriyi Düzenle</h1>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.categories.update')}}">
          @csrf
          <div class="form-group">
            <label>Kategori Adı:</label>
            <input type="text" class="form-control" id="category" name="category"/>
            <input type="hidden" id="category_id" name="id"/>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>
        <button type="submit" class="btn btn-success">Kaydet</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Kategoriyi Sil</h1>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>
      <div id="body" class="modal-body">
        <div class="alert alert-danger" id="newsAlert"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kapat</button>
        <form method="POST" action="{{route('admin.categories.delete')}}">
        @csrf
        <input type="hidden" name="id" id="deletedId"/>
        <button id="deleteButton" type="submit" class="btn btn-danger">Sil</button>
        </form>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="{{asset('back')}}/Admin/src/assets/js/oneui.app.min.js"></script>
<script>
  $(function() {
    $('.edit-click').click(function(){
      id = $(this)[0].getAttribute('category-id');
      $.ajax({
        type:'GET',
        url:"{{route('admin.categories.getdata')}}",
        data:{id:id},
        success: function(data) {
          console.log(data);
          $('#category').val(data.name);
          $('#category_id').val(data.id);
          if ($('#editModal') $('#editModal').modal('show')
        }
      });
    });
    $('.remove-click').click(function(){
      id = $(this)[0].getAttribute('category-id');
      count = $(this)[0].getAttribute('category-count');
      name = $(this)[0].getAttribute('category-name');
      if(id==1){
        $('#newsAlert').html(name+' kategorisi silinemez ! Silinen diğer kategoriye ait haberler genel kategorisine aktarılır.');
        $('#body').show();
        $('#deleteButton').hide();
        if ($('#deleteModal')) $('#deleteModal').modal('show')
        return;
      }
      $('#deleteButton').show();
      $('#deletedId').val(id);
      $('#newsAlert').html('');
      $('#body').hide();
      if(count>0){
        $('#newsAlert').html('Bu kategoriye ait '+count+' haber bulunmaktadır. Silmek istediğinize emin misiniz ?');
        $('#body').show();
      }
      if(count==0){
        $('#newsAlert').html('Silmek istediğinize emin misiniz ?');
        $('#body').show();
      }
      if ($('#deleteModal')) $('#deleteModal').modal('show');

    });
  });
</script>
  </body>
</html>
