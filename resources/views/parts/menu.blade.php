<div class="row">
  <div class="col-12">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link @if (request()->route()->getName() == 'dashboard') active @endif" aria-current="page" href="{{ route('dashboard') }}">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (request()->route()->getName() == 'sandbox.index') active @endif" href="{{ route('sandbox.index') }}">Sandbox</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Live</a>
      </li>
    </ul>
  </div>
</div>