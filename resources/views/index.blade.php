@extends('layouts.stream')

@section('exHead')
<link href="{{ asset('css/stream.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="live-cam">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading"><h3 class="panel-title">@{{title}}</h3></div>
                            <div class="panel-body">
                                <div id='player_1'>No video yet</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="input-streams">
            </div>
        </div>
    </div>
</div>
@endsection

@section('exFoot')
<script type="text/javascript" src="//cdn.jsdelivr.net/jwplayer/5.10/jwplayer.js"></script>
<script src="{{ asset('js/stream.js') }}"></script>
@endsection