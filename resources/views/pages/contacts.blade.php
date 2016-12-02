@extends('layout')
@section('title', trans('meta.contacts.title'))
@section('description', trans('meta.contacts.description'))
@section('header')
    @include('header')
@stop
@section('body_class', 'contacts select-color5')
@section('content')
    @include('menu')
    <div class="main-contacts text-center">
        <div class="content-header">
            <h1>{!! trans('contacts.header-text-1') !!}</h1>
            <span class="fs22 maxwidth430 inline-block">{!! trans('contacts.under-header-text-1') !!}</span>
        </div>
        <div class="paragraph">
            {!! HTML::image('img/line.png', 'separator line', array('class' => 'wide-seperator mb13 mt20')) !!}
            <h2 class="">{!! trans('contacts.subheader-text-1') !!}</h2>
        </div>
        <div>
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>{{ Session::get('success') }}</h2>
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p class="pink">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            {!! Form::open([
                'action' => 'PagesController@sendMail',
                'class' => 'wpcf7-form',
                'role' => 'form',
                'method' => '',
                'novalidate' => 'novalidate'
                ]) !!}
                {!! Form::text('name', null, ['autocomplete' => 'off', 'placeholder' => trans('contacts.name')]) !!}
                {!! Form::input('email', 'email', null, ['autocomplete' => 'off', 'placeholder' => trans('contacts.email')]) !!}
                {!! Form::input('tel', 'phone', null, ['autocomplete' => 'off', 'placeholder' => trans('contacts.phone')]) !!}
                {!! Form::text('subject', null, ['autocomplete' => 'off', 'placeholder' => trans('contacts.subject')]) !!}
                {!! Form::textarea('content', null, ['autocomplete' => 'off', 'placeholder' => trans('contacts.message')]) !!}
                {!! Form::input('submit', 'submit', trans('contacts.send-message'), []) !!}
            {!! Form::close() !!}
        </div>
        <div class="paragraph contacts-bottom-text">
            {{--<p class="content-text bold fs20"><span class="green inline-block">{!! trans('contacts.phone-number') !!}</span><span class="inline-block">{!! trans('contacts.email-address') !!}</span><span class="inline-block green">London, UK</span></p>--}}
        </div>
    </div>
    @include('footer')
@stop