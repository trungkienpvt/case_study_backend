@extends('layouts.master')

@section('content-header')
    <h1>New Role</h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> {{ trans('core/core.breadcrumb.home') }}</a></li>
        <li class=""><a href="{{ URL::route('roles.index') }}">{{ trans('user/roles.breadcrumb.roles') }}</a></li>
        <li class="active">{{ trans('user/roles.breadcrumb.new') }}</li>
    </ol>
@stop

@section('content')
{!! Form::open(['route' => 'roles.store', 'method' => 'post']) !!}
<div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1-1" data-toggle="tab">{{ trans('user/roles.tabs.data') }}</a></li>
                <li class=""><a href="#tab_2-2" data-toggle="tab">{{ trans('user/roles.tabs.permissions') }}</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1-1">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    {!! Form::label('name', trans('user/roles.form.name')) !!}
                                    {!! Form::text('name', 'name', ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => trans('user/roles.form.name')]) !!}
                                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                                    {!! Form::label('description', trans('user/roles.form.description')) !!}
                                    {!! Form::text('description', 'description', ['class' => 'form-control description', 'data-description' => 'target', 'placeholder' => trans('user/roles.form.description')]) !!}
                                    {!! $errors->first('slug', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_2-2">
                    @include('user::admin.partials.permissions-create')
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-flat">{{ trans('user/button.create') }}</button>
                    <button class="btn btn-default btn-flat" name="button" type="reset">{{ trans('core/core.button.reset') }}</button>
                    <a class="btn btn-danger pull-right btn-flat" href="{{ URL::route('roles.index')}}"><i class="fa fa-times"></i> {{ trans('user/button.cancel') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop
@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd>{{ trans('user/roles.navigation.back to index') }}</dd>
    </dl>
@stop
@section('scripts')
<script>
$( document ).ready(function() {
    $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
    });
    $(document).keypressAction({
        actions: [
            { key: 'b', route: "<?= route('roles.index') ?>" }
        ]
    });
});
</script>
@stop
