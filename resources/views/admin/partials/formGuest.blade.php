<div class="container form-general">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Guest</h3>
                </div>
                <!-- /.box-header -->
                {{--form start--}}
                {!! Form::open(['url' => '/','class'=>'form-horizontal','files'=>true]) !!}

                <div class="box-body">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Input your name']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="col-sm-2 control-label">Address</label>

                        <div class="col-sm-10">
                            {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Input your address']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                        <div class="col-sm-10">
                            {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Input your phone number']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNote" class="col-sm-2 control-label">Note</label>

                        <div class="col-sm-10">
                            {!! Form::textarea('note',null,['class'=>'form-control','placeholder'=>'Input note']) !!}
                        </div>
                    </div>

                    @include('errors.alertValidation')
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div>
                <!-- /.box-footer -->

                {!! Form::close() !!}
                {{--form close--}}
            </div>
        </div>
    </div>
</div>