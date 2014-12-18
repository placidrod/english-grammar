@extends('layouts.default')

@section('content')
<div class="col-md-8 column">
    <h2 class="text-info">
        {{{ 1 }}}
    </h2>
    <p class="lead question">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit eget sapien sapien. Curabitur in metus urna.
    </p>
    <p class="text-success lead answer-selected">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit eget sapien sapien. Curabitur in metus urna.
    </p>
    <div class="row clearfix">
        <div class="col-md-3">
            <button type="button" class="btn btn-danger  btn-block btn-view-answer btn-margin-top-5">View Answer</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-warning  btn-block btn-listen-answer btn-margin-top-5">Listen</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-success  btn-block btn-next btn-margin-top-5">Next</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-success  btn-block btn-previous btn-margin-top-5">Previous</button> 
        </div>
    </div>

    <div class="row clearfix" style="margin-top: 15px;">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary  btn-block btn-other-answers btn-margin-top-5">Other Answers</button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary  btn-block btn-suggest-answer btn-margin-top-5">Suggest An Answer</button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary  btn-block btn-ask-related btn-margin-top-5">Ask Related Question</button>
        </div>   
    </div>

    <div class="row clearfix answer-user" style="margin-top: 15px;">
        <div class="col-md-12">
            <form role="form">
                <div class="form-group">
                    <label for="user_answer"><span class="h3">Your Answer</span></label>
<!--                    <p class="help-block">
                        Example block-level help text here.
                    </p>-->
<!--                    <input autocomplete="off" style="" class="form-control" id="user_answer" type="text">-->
                    <textarea class="form-control" id="user_answer" rows="3" style="font-size:21px;font-weight: 200;"></textarea>
                </div>
                <div class="form-group">
                    <label for="user_name"><span class="h4">Your Name</span></label>
                    <input autocomplete="off" style="" class="form-control" id="user_name" type="text">
                </div>
                <div class="form-group">
                    <label for="user_email"><span class="h4">Your Email Address</span></label>
                    <input autocomplete="off" style="" class="form-control" id="user_email" type="email">
                </div>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-danger  btn-block" value="Submit">
                    </div>
                    <div class="col-md-6">
                        <input type="reset" class="btn btn-info  btn-block btn-cancel-answer" value="Cancel">
                    </div>
                </div>
<!--                <input type="submit" class="btn btn-danger  btn-block" value="Submit">-->
            </form>   
        </div>
    </div>
</div>
@stop