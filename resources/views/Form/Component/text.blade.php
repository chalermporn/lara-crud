
<div class="form-group">
    <label for="{{$obj->name}}" class="col-md-1 control-label">{{$obj->label}}</label>
    <div class="col-md-6">
        <input type="{{$obj->type}}" name="{{$obj->name}}" value="{!! $obj->value !!}" class="{{$obj->classStyle}}" id="{{$obj->name}}" placeholder="{{$obj->placeholder}}">
    </div>
</div>