@extends('layout')
@section('content')
<div class="row">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Sr</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($Post_data as $index=> $post)
                <tr>
                    <td>{{($index+1)}}</td>
                    <td>{{$post->title}}</td>
                    <td> {!!substr(strip_tags($post->content), 0, 70) !!}...</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No Matching Post found</td>
                    
                </tr>
                @endforelse
            </tbody>
        </table>
        {{$Post_data->links("pagination::bootstrap-4")}}    
    </div>

</div>

@stop