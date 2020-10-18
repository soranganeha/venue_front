<!--Header-part-->
<div id="header">
  <h1><a href="{{url('/admin/dashboard')}}">VENUE BOOKING ADMIN</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">WELCOME USER</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> MY PROFILE </a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> MY TASKS </a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> LOG OUT </a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text"> MESSAGES</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> NEW MESSAGE </a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> INBOX </a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> OUTBOX </a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> TRASH </a></li>
      </ul>
    </li>
    <li class=""><a title="" href="{{url('/admin/settings')}}"><i class="icon icon-cog"></i> <span class="text"> SETTINGS </span></a></li>
    <li class=""><a title="" href="{{url('/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">LOGOUT</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->