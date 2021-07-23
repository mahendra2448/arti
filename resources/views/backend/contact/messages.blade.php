@extends('backend.layouts.app')

@section('title', __('Contact Messages'))

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-comment-dots mr-2"></i> Contact Messages</h4>
                
                <div class="table-responsive mt-3">
                    <table id="commonTable" class="table table-hover">                
                        <thead>
                            <tr>
                                <th width="15px">#</th>
                                <th width="200px">Name</th>
                                <th width="200px">Email</th>
                                <th>Message</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
        
                                foreach($message as $mes){
                                    $count  = $count + 1;
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td style="vertical-align: middle;" class="user-select-all">{{$mes->name}}</td>
                                <td style="vertical-align: middle;" class="user-select-all">{{$mes->email}}</td>
                                <td style="vertical-align: middle;">{{Str::limit($mes->message,200)}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm btn-danger message-delete" href="#" data-id="{{$mes->id}}" data-name="{{$mes->name}}"><i class="fas fa-trash mr-2"></i> Delete</a>
                                </td>
                            </tr>
                            @php
                            }
                            @endphp
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection