<div id="sidebar-wrapper" class="col-md-3" style="padding-left: 0;padding-right: 0">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                {{ Auth::user()->username }}
            </a>
        </li>
       @include('layouts.menu')
    </ul>
</div>
