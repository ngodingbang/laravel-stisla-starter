<button type="submit"
    id="checkbox-delete-all"
    class="btn btn-danger btn-icon icon-left"
    formaction="{{ $url }}"
    name="_method"
    value="DELETE"
    onclick="return confirm('@lang('Are you sure you want to delete this data?')')"
    disabled>
    <i class="fa fa-trash-alt"></i> <span>@lang('Delete Selected')</span>
</button>
