<div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ Request::segment(1)=='home' ? 'active' : '' }}" href="/home">Home</a>
    <a class="nav-link {{ Request::segment(1)=='profile' ? 'active' : '' }}" href="/profile">Profile</a>
    <a class="nav-link {{ Request::segment(1)=='student' ? 'active' : '' }}" href="/student">Student</a>
    <a class="nav-link {{ Request::segment(1)=='contact' ? 'active' : '' }}" href="/contact">Contact</a>
</div> 