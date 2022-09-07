<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
       <div class="nav">
          <a class="nav-link active" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
             </div>
            {{ trans('dashboard.link.dashboard') }}
          </a>
          <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.master') }}</div>
 
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="far fa-newspaper"></i>
             </div>
            {{ trans('dashboard.link.posts') }}
          </a>
          <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.setting') }}</div>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-user"></i>
             </div>
             {{ trans('dashboard.link.users') }}
          </a>
       </div>
    </div>
    <div class="sb-sidenav-footer">
       <div class="small">{{ trans('dashboard.label.logged_in_as') }}</div>
       <!-- show username -->
       {{ Auth::user()->name}}
    </div>
 </nav>
 