@extends('lara::common.app')
@section('content')

    {{--<h2>{{$titlePage}}</h2>--}}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{$titlePage}}</h3>
        </div>
        {!! Form::open(array('class' => 'form-horizontal', 'id' => 'form-repleace', 'role' => 'form', 'url' => $formActionUrl, 'method' => $formMetod, 'files' => true)) !!}

        @if (!empty($id))
            {{ Form::hidden($keyName, $id) }}
        @endif

        {!! $objField !!}
        <div class="box-footer">
            <div class="form-group">
                <div class="col-md-1">

                </div>
                <div class="col-md-6 ">
                    <button type="submit" name="save_button" value="1" class="btn btn-primary"><span
                                class="glyphicon glyphicon-floppy-saved"></span> Save
                    </button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"></span> Apply
                    </button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.fa-info-circle').tooltip();
        });
        //        $('.datepicker').datepicker({
        //            autoclose: true
        //        });
        $(document).on('click', '.btn-add', function (e) {
            e.preventDefault();

            var controlForm = $('.controls .form:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);

            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="glyphicon glyphicon-minus"></span>');
        }).on('click', '.btn-remove', function (e) {
            $(this).parents('.entry:first').remove();

            e.preventDefault();
            return false;
        });
    </script>

    @include('lara::Form.Component.include.validate-js')

@endsection
