@extends('layout')
@section('content')
<style>
.div-wrapper {
    height: 200px;
    margin-top: 40px;
    border: 2px dashed #ddd;
    border-radius: 8px;
}
 
.div-to-align {
    width: 75%;
    padding: 40px 20px;
 
    /* .... */
}
</style>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form class="serach_post" action="{{url('search-results')}}" method="post">
                @csrf
                <!-- Input fields -->
                <div class="form-group">
                    <label for="PostTitle">Post Title:</label>
                    <input type="text" class="form-control PostTitle" id="PostTitle" placeholder="PostTitle..." name="title">
                </div>
                
                <button type="submit" class="btn btn-primary btn-customized">Search</button>
                
            </form>
            <!-- Form end -->
        </div>
    </div>
</div>

@stop