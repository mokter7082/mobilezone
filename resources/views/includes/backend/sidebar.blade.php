<div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="{{ URL::to('/admin'); }}"><img src="{{asset('https://i.ibb.co/SyLrvh4/88303442-2250361951934421-6432819638752509952-n.jpgs')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Md Mokter</h5>
          <li class="mt">
            <a class="active" href="{{ URL::to('/admin'); }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Category</span>
              </a>
              <ul class="sub">
                  <li><a href="{{ route('add-category')}}">Add Category</a></li>
                  <li><a href="{{ route('all-category')}}">All Category</a></li>
              </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Brand</span>
              </a>
              <ul class="sub">
                  <li><a href="{{ route('add-brand')}}">Add Brand</a></li>
                  <li><a href="{{ route('all-brand')}}">All Brand</a></li>
              </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Mobile</span>
              </a>
              <ul class="sub">
                  <li><a href="{{ route('add-mobile')}}">Add Mobile</a></li>
                  <li><a href="{{ route('all-mobile')}}">All Mobile</a></li>
              </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>