
    {!! Form::open(array('style' => 'display: inline-block;', 'class' => '', 'url' => url()->current().'/'.$id.'/delete', 'method' => 'DELETE', 'files' => false)) !!}
        {{ Form::hidden('id', $id) }}
        <button type="submit" class="btn btn-default btn-sm btn-danger">Delete</button>
    {!! Form::close() !!}


