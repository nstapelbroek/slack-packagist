@extends('master')

@section('title', 'Packagist for Slack')

@section('content')
    <a href="https://slack.com/oauth/authorize?scope=commands&client_id={{ getenv('SLACK_CLIENT_ID') }}&redirect_uri={{ getenv('SLACK_REDIRECT_URI') }}">
        <img alt="Add to Slack"
             height="40"
             width="139"
             src="https://platform.slack-edge.com/img/add_to_slack.png"
             srcset="https://platform.slack-edge.com/img/add_to_slack.png 1x, https://platform.slack-edge.com/img/add_to_slack@2x.png 2x"
        />
    </a>
@endsection