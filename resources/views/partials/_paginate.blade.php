<div style="padding: 10px; float:right;">
    {!! $items->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
</div>