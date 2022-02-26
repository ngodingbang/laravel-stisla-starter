<a href="{{ $url }}" class="btn btn-danger" onclick="event.preventDefault(); if (confirm('@lang('Are you sure you want to delete this data?')')) this.querySelector('form').submit();">
    @include('components.datatables.button-delete')

    <form action="{{ $url }}" method="post">
        @csrf
        @method('DELETE')
    </form>
</a>
