<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $entrada->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $entrada->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asunto') }}
            {{ Form::text('asunto', $entrada->asunto, ['class' => 'form-control' . ($errors->has('asunto') ? ' is-invalid' : ''), 'placeholder' => 'Asunto']) }}
            {!! $errors->first('asunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCategoria') }}
            {{ Form::text('idCategoria', $entrada->idCategoria, ['class' => 'form-control' . ($errors->has('idCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Idcategoria']) }}
            {!! $errors->first('idCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $entrada->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('urlThumb') }}
            {{ Form::text('urlThumb', $entrada->urlThumb, ['class' => 'form-control' . ($errors->has('urlThumb') ? ' is-invalid' : ''), 'placeholder' => 'Urlthumb']) }}
            {!! $errors->first('urlThumb', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $entrada->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>