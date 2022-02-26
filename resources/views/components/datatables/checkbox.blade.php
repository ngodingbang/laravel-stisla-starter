<div class="custom-checkbox custom-control text-center">
    <input type="checkbox" name="{{ ($name ?? 'checkbox[]') }}" id="{{ ($id ?? 'checkbox_' . $value) }}" value="{{ $value }}" data-checkboxes="mygroup" class="custom-control-input checkbox-selected">

    <label for="{{ ($id ?? 'checkbox_' . $value) }}" class="custom-control-label">&nbsp;</label>
</div>
