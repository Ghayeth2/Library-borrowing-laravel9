<!--**********************************
            Sidebar 'adminPannelstart
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a  href="{{route('Admin.Category.index')}}" aria-expanded="false"><i
                        class="icon-user " style="color: blue"></i><span class="nav-text">Profile</span></a>
            </li>
            <li><a class="has-arrow" href="{{route('Admin.Category.index')}}" aria-expanded="false"><i class="icon-arrow-right" style="color: whitesmoke"></i>
                    <span class="nav-text">Borrows</span></a>
                <ul aria-expanded="false">
                    <li><a href="./app-profile.html">default</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">default</a>
                        <ul aria-expanded="false">
                            <li><a href="./email-compose.html">default</a></li>
                            <li><a href="./email-inbox.html">default</a></li>
                            <li><a href="./email-read.html">default</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a  href="{{route('Admin.Category.index')}}" aria-expanded="false"><i
                        class="icon-menu" style="color: yellow"></i><span class="nav-text">Categories</span></a>
            </li>
            <li><a  href="{{route('Admin.book.index')}}" aria-expanded="false"><i class="icon-book-open"
                              style="color: orangered">  </i><span class="nav-text">Books</span></a>
            </li>

            <li><a  href="{{route('Admin.Category.index')}}" aria-expanded="false"><i
                        class="icon-picture"></i><span class="nav-text">Images</span></a>
            </li>
            <li><a href="{{route('Admin.Category.index')}}" aria-expanded="false"><i class="icon-question"></i><span
                        class="nav-text">FAQ</span></a></li>
            <li><a  href="{{route('Admin.Category.index')}}" aria-expanded="false"><i
                        class="icon-envelope-letter"></i><span class="nav-text">Messages</span></a>
            </li>
           <!-- <li class="nav-label"></li>-->
            <li><a href="{{route('Admin.Category.index')}}" aria-expanded="false"><i
                        class="icon-people"></i><span class="nav-text">User</span></a>
            </li>

            <!--<li class="nav-label">Extra</li>-->
            <li><a  href="{{route('Admin.Category.index')}}" aria-expanded="false"><i
                        class="icon-wrench" style="color: red"></i><span class="nav-text">Settings</span></a>
            </li>
        </ul>
    </div>


</div>
<!--**********************************
    Sidebar end
***********************************-->
