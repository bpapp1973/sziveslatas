@extends('layouts.app') @section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container mbr-section-full">
        <div style="padding: 3em; background-color: #ffffff">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h1>{!! $freetext->title !!}</h1>
                    </div>
                    <div class="panel-body">
                        {!! $freetext->text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
