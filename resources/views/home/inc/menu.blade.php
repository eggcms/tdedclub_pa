<div class="list-group">
    <a href="{{url('/')}}" class="list-group-item list-group-item-action flex-column align-items-start {{ ($active=='admin') ? 'active' : '' }}">
      <p class="mb-0 font-weight-bold">Main controller</p>
    </a>
    
    <a href="{{url('admin/groups')}}" class="list-group-item list-group-item-action flex-column align-items-start {{ ($active=='groups') ? 'active' : '' }}">
      <p class="mb-0 font-weight-bold">Category manage</p>
    </a>
    <a href="{{url('admin/post')}}" class="list-group-item list-group-item-action flex-column align-items-start {{ ($active=='post') ? 'active' : '' }}">
      <p class="mb-0 font-weight-bold">Post manage</p>
    </a>

    <a href="{{url('admin/lotto')}}" class="list-group-item list-group-item-action flex-column align-items-start {{ ($active=='lotto') ? 'active' : '' }}">
      <p class="mb-0 font-weight-bold">Lottery manage</p>
    </a>
    @if(Auth::user()->level >= 100)
    <a href="{{ url('admin/website') }}" class="list-group-item list-group-item-action flex-column align-items-start {{ ($active=='website') ? 'active' : '' }}">
      <p class="mb-0 font-weight-bold">Website manage</p>
    </a>
    <a href="{{ url('admin/users') }}" class="list-group-item list-group-item-action flex-column align-items-start {{ ($active=='users') ? 'active' : '' }}">
        <p class="mb-0 font-weight-bold">Users manage</p>
    </a>
    @endif
</div>