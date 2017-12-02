<div class="side-menu" id="admin-side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      Categories
    </p>
    @for($i=1; $i<10; $i++)
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}"> Computer Science </a></li>
    </ul>
    @endfor
  </aside>
</div>
