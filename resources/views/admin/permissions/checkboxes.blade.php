@foreach($permissions as $id => $name)
    <div class="form-check">
        <label>
            <input type="checkbox" name="permissions[]" value="{{ $id }}"
                {{ ($model->permissions->contains($id) || collect(old('permissions'))->contains($id)) ? 'checked' : '' }}>
            {{ $name }}
        </label>
    </div>
@endforeach
