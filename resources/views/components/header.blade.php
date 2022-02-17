<div class="purple darken-4 w-100 align-items-center d-flex justify-content-between p-1 z-depth-4">
    <a href="./" class="w-50">
        <div class="logo-wrapper  container-fluid">
            <img style="min-width: 150px;" class="responsive-img w-50" src="images/logo.svg" alt="super fit logo">
        </div>
    </a>
    <div id="profile" data-activates="slide-out" class="w-25 justify-content-end d-flex align-items-center">
        <span class="m-1 fw-bold text-white">
            {{ Auth::user()->name }}
        </span>
        <img style="min-width: 40px;"
            src="{{ Auth::user()->photo? Auth::user()->photo: 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png' }}"
            alt="" class="circle w-25 ml-2">
        <!-- notice the "circle" class -->
    </div>
</div>
<ul id="slide-out" class="side-nav">
    <li>
        <div class="user-view">
            <div class="background">
                <img
                    src="https://i2.wp.com/thevocalink.com/wp-content/uploads/2021/04/How-to-Start-a-Gym-or-a-Fitness-Center.jpg?fit=696%2C442&ssl=1">
            </div>
            <a href="#!user"><img class="circle"
                    src="{{ Auth::user()->photo? Auth::user()->photo: 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png' }}"></a>
            <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
            <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
        </div>
    </li>
    <li><a href="#!"><i class="material-icons">share</i>Share</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li>
        <a href="" class="waves-effect position-relative">
            <form class="w-100 position-absolute h-100 top-0 start-0 opacity-0" action="/logout" method="POST">
                @csrf
                <button type="submit" class="border-none w-100 h-100"></button>
            </form>
            <i class="material-icons">logout</i>Logout
        </a>
    </li>
</ul>
<script src="/js/components/header.js"></script>
