@if(Session::has('message'))
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content alert alert-{{Session::get('messageType')}}" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="alert-heading">{{Session::get('messageHeading')}}</h4>
                    <p>{{Session::get('message')}}</p>
                </div>
            </div>
        </div>
    </div>
@endif
