@extends('layouts.app')

@section('content')
<link href="/vendor/comments/comments.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('_help')

                    <!-- #comments -->
                    <div id="comments"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/vendor/comments/comments.js"></script>

<script>
    new Comments.default({
        el: '#comments',
        pageId: '1'
    })
</script>

<script src="//twemoji.maxcdn.com/2/twemoji.min.js?2.2.3"></script>
<script>twemoji.parse(document.getElementById('emoji-modal'))</script>
@endsection
