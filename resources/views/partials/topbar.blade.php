<!-- Topbar -->
<div class="topbar">
    <div class="container-fluid">
        <ul class="topnav pull-right">
            @if(Auth::guest())
            <li>
                <a href="{{ url('/auth/login') }}"><span><i class="fa fa-sign-in"></i></span> Login</a>
            </li>

            <li>
                <a href="{{ url('/auth/register') }}"><i class="fa fa-user"></i></span> Sign up</a>
            </li>
            @endif
            <li>
                <a href=""><i class="fa fa-support"></i></span> Help</a>
            </li>
            <li>
                <a href=""><i class="fa fa-globe"></i></span> Languages <i class="fa fa-angle-down"></i></a>
            </li>
        </ul>
    </div>
</div> <!-- end of topbar -->