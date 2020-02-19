@foreach($permissions as $id => $name)
    <div class="form-check">
        <label>
            <input name="permission" type="checkbox" name="permissions[]" value="{{ $id }}" {{ $user->permissions->contains($id) ? 'checked' : '' }}>
            {{ $name }}
        </label>
    </div>
@endforeach
