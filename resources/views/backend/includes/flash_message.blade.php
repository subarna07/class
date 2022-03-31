@if(session()->has('success_message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> SUCCESS</h5>
    {{ session()->get('success_message')}}
</div>
@endif
