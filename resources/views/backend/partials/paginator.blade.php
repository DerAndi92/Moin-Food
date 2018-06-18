<div class="paginator">
    {!! $paginator->render() !!}
    <span>
        @lang('admin.layout.pagination.count', ['count' => $paginator->count()])
    </span>
</div>