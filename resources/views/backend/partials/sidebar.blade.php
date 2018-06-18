<div class="sidebar-group">
    <dl>
        <dt>@lang('admin.attributes.created_at')</dt>
        <dd>{{($entity->created_at) ? \MoinFood\Helper\BladeHelper::transformDatetime($entity->created_at) : ''}}</dd>

        <dt>@lang('admin.attributes.updated_at')</dt>
        <dd>{{($entity->updated_at) ? \MoinFood\Helper\BladeHelper::transformDatetime($entity->updated_at) : ''}}</dd>
    </dl>
</div>

<div class="sidebar-group">
    @if(isset($update))
        <button class="btn btn-block btn-success" save-action="{{$update}}" title="@lang('admin.actions.save')">@lang('admin.actions.save')</button>
    @endif
    @if(isset($cancel))
        <a href="{{$cancel}}" class="btn btn-block btn-warning" title="@lang('admin.actions.close')">@lang('admin.actions.close')</a>
    @endif
    @if(isset($destroy))
        <a href="{{$destroy}}" class="btn btn-block btn-danger" destroy-action="@lang('admin.messages.destroy')" title="@lang('admin.actions.delete')">@lang('admin.actions.delete')</a>
    @endif
</div>