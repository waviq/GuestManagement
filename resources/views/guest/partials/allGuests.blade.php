<div class="container general">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Guest List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
                    <table class="table table-bordered">
                        <tr>
                            <th class="numberTable">#</th>
                            <th>Name</th>
                            <th>Note</th>
                            @if(!Auth::guest())
                                <th>Phone</th>
                                <th>Address</th>
                            @endif
                        </tr>
                        @foreach($guests as $key => $guest)

                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$guest->name}}</td>
                                <td>{{$guest->note}}</td>
                                @if(!Auth::guest())
                                    <td>{{$guest->phone}}</td>
                                    <td>{{$guest->address}}</td>
                                @endif
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        {{$guests->render()}}
                    </ul>
                </div>

            </div>
            <div>
                <a href="{{url(action('GuestController@create'))}}">
                    <button type="button" class="btn btn-info">Create New Guest</button>
                </a>
            </div>
        </div>
    </div>
</div>