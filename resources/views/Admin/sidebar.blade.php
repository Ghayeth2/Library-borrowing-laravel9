<!--**********************************
            Sidebar 'adminPannelstart
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a  href="{{route('Admin.Category.index')}}" ><i
                        class="icon-user " style="color: blue"></i><span class="nav-text">Profile</span></a>
            </li>
            <li><a class="has-arrow" href="{{route('Admin.Category.index')}}"><i class="icon-arrow-right" style="color: whitesmoke"></i>
                    <span class="nav-text">Borrows</span></a>
                <ul >
                    <li><a href="./app-profile.html">default</a></li>
                    <li><a class="has-arrow" >default</a>
                        <ul >
                            <li><a href="./email-compose.html">default</a></li>
                            <li><a href="./email-inbox.html">default</a></li>
                            <li><a href="./email-read.html">default</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a  href="{{route('Admin.Category.index')}}" ><i
                        class="icon-menu" style="color: yellow"></i><span class="nav-text">Categories</span></a>
            </li>
            <li><a  href="{{route('Admin.book.index')}}" ><i class="icon-book-open"
                              style="color: lightsalmon">  </i><span class="nav-text">Books</span></a>
            </li>
            <li><a href="{{route('Admin.Category.index')}}" ><i class="icon-question"></i><span
                        class="nav-text">FAQ</span></a></li>
            <li><a  href="{{route('Admin.message.index')}}" ><i
                        class="icon-envelope-letter" style="color: darkgreen"></i><span class="nav-text">Messages</span></a>
            </li>
           <!-- <li class="nav-label"></li>-->
            <li><a href="{{route('Admin.Category.index')}}" ><i
                        class="icon-people" style="color: blue"></i><span class="nav-text">User</span></a>
            </li>

            <!--<li class="nav-label">Extra</li>-->
            <li><a  href="{{route('Admin.settings')}}" ><i
                        class="icon-wrench" style="color: red"></i><span class="nav-text">Settings</span></a>
            </li>
        </ul>
    </div>


</div>
<!--**********************************
    Sidebar end
***********************************-->
