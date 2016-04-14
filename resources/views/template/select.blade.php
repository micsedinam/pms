<div class="input-field col s12">
    <select name="{{ $fieldName }}">
        <option value="">Please Select</option>
        @foreach($options as  $key => $title)
            <option value="{{ $key }}">{{ $title }}</option>
        @endforeach
    </select>

    <label for="{{ $fieldName }}">{{ $fieldLabel }}</label>
</div>