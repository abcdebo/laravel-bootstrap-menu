@php
    $id = rand(100000, 999999);
@endphp
<!-- Aaaa-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading{{$id}}">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$id}}" aria-expanded="true" aria-controls="collapseOne">
      {{$name}}
      </button>
    </h2>
    <div id="collapse{{$id}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$id}}" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <form method="GET">
                <div class="form-group">
                    <label for="label">Enter Label</label>
                    <input type="text" class="form-control" name="label" placeholder="Label Menu">
                </div>
                <div class="form-group">
                    <label for="url">Enter URL</label>
                    <input type="text" class="form-control" name="url" placeholder="#">
                </div>
                <div class="form-group">
                    <label for="icon">Enter Icon</label>
                    <input type="text" class="form-control" id="iconHelp" name="icon" placeholder="Icon">
                    <small id="iconHelp" class="form-text text-muted">
                        Ex: &lt;span class=&quot;oi oi-align-center&quot;&gt;&lt;/span&gt;
                    </small>
                </div>
                @if(!empty($roles))
                <div class="form-group">
                    <label for="role">Select Role</label>
                    <select class="form-control" name="role">
                        <option value="0">Select Role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->$role_pk }}">
                                {{ ucfirst($role->$role_title_field) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="form-group">
                    <button type="button" onclick="addItemMenu(this, 'default')" 
                    class="btn btn-info btn-sm float-right mr-2 mb-2">
                        Add to Menu
                    </button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>