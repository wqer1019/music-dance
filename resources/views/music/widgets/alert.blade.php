@if($needContainer)
    <div class="container">
@endif
<div class="alert alert-{!! $type !!}" role="alert">
    @if($hasCloseButton)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    @endif
    {!! $message !!}
</div>
@if($needContainer)
    </div>
@endif