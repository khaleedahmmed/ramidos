<div>
    @include('admin.includes.table-search')

    <table class="table table-hover" style="width:100%" id="areas-table">
        <thead>
        <tr>
            <th> {{ __('admin.name') }} </th>
            <th> {{ __('admin.email') }} </th>
            <th> {{ __('admin.options') }} </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>

                    <a href="{{ route('admins.edit', $item) }}"
                       class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit table-edit"></i></a>

                    <button onclick="softDelete({{ $item->id }})" name="delete" class=" table-cancel d-inline-block no-style" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <span>{{ $items->links('pagination::bootstrap-4') }}</span>
</div>
