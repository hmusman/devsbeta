<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

 <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Portfolio</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
    	<li><a href="{{ backpack_url('portfolio') }}"><i class='fa fa-tasks'></i> <span>All Projects</span></a></li>
    <!--<li><a href='{{ backpack_url('sidebar') }}'><i class='fa fa-sliders'></i> <span>Sidebar</span></a></li>-->
<li><a href='{{ backpack_url('category') }}'><i class='fa fa-tag'></i> <span>Categories</span></a></li>
    </ul>
  </li>




<li><a href='{{ backpack_url('about') }}'><i class='fa fa-address-book-o'></i> <span>About Us</span></a></li>
<li><a href='{{ backpack_url('contact') }}'><i class='fa fa-phone'></i> <span>Contact Us</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
 

<li><a href='{{ backpack_url('message') }}'><i class='fa fa-envelope'></i> <span>Messages </span></a></li>
<li><a href='{{url('blog_admin')}}'><i class='fa fa-newspaper-o'></i> <span>Blog</span></a></li>

<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>

<li><a href='{{ backpack_url('service') }}'><i class='fa fa-briefcase'></i> <span>Services</span></a></li>