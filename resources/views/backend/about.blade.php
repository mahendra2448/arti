@extends('backend.layouts.app')

@section('title', __('About Us - Page'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title mb-0"><i class="fas fa-align-left mr-2"></i> About Us - Update</h4>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-4">
                <form action="{{ route('admin.about.updates', ['id'=>$abt->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="abt_desc">About</label>
                        <textarea name="abt_desc" id="abt_desc" class="form-control descCK" required>{!!$abt->abt_desc!!}</textarea>
                    </div>
                    <div class="custom-upload">
                        <input type="file" id="foto-abt" name="abt_image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" hidden>
                        <label for="foto-abt" data-up="abt">Choose file...</label>
                        <span id="file-chosen-abt">{{$abt->abt_image}}</span>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                </form>
            </div>
            <div class="col-md-4">
                <form action="{{ route('admin.about.vis.updates', ['id'=>$abtvis->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="vis_desc">Vision</label>
                        <textarea name="vis_desc" id="vis_desc" class="form-control descCK" required>{!!$abtvis->vis_desc!!}</textarea>
                    </div>
                    <div class="custom-upload">
                        <input type="file" id="foto-vis" name="vis_image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" hidden>
                        <label for="foto-vis" data-up="vis">Choose file...</label>
                        <span id="file-chosen-vis">{{$abtvis->vis_image}}</span>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                </form>
            </div>
            <div class="col-md-4">
                <form action="{{ route('admin.about.mis.updates', ['id'=>$abtmis->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="mis_desc">Mission</label>
                        <textarea name="mis_desc" id="mis_desc" class="form-control descCK" required>{!!$abtmis->mis_desc!!}</textarea>
                    </div>
                    <div class="custom-upload">
                        <input type="file" id="foto-mis" name="mis_image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" hidden>
                        <label for="foto-mis" data-up="mis">Choose file...</label>
                        <span id="file-chosen-mis">{{$abtmis->mis_image}}</span>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-align-left mr-2"></i> Our Approach
                    <small class="float-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#newApproach"><i class="fas fa-plus-circle mr-2"></i>Add New</a></small>
                </h4>
                <div class="table-responsive mt-3">
                    <table id="commonTable" class="table table-hover">                
                        <thead>
                            <tr>
                                <th width="15px">#</th>
                                <th width="150px">Title</th>
                                <th>Description</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
        
                                foreach($approach as $appr){
                                    $count  = $count + 1;                            
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td style="vertical-align: middle;">{{$appr->title}}</td>
                                <td style="vertical-align: middle;">{{Str::limit($appr->desc,200)}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm btn-primary btn-edit" href="#" data-id="{{$appr->id}}" data-toggle="modal" data-target="#editRow"><i class="fas fa-pen mr-2"></i>Edit</a>
                                    <a class="btn btn-sm btn-danger approach-delete" href="#" data-id="{{$appr->id}}"><i class="fas fa-trash mr-2"></i> Delete</a>
                                </td>
                                
                                <!-- Modal Edit-->
                                <div class="modal fade" id="editRow" data-backdrop="static" data-keyboard="false" aria-labelledby="editLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="mb-0">Edit</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="edit-body" class="modal-body">
                                                <!--data generated with ajax-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <div class="col-md-6"> 
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title"><i class="fas fa-align-left mr-2"></i> Prinsip
                            <small class="float-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#newPrinsip"><i class="fas fa-plus-circle mr-2"></i>Add New</a></small>
                        </h4>
                        <ul>
                            @foreach ($prinsip as $pr)
                                <li>
                                    <span class="mr-3">
                                        <a href="#" data-id="{{$pr->id}}" class="text-danger prinsip-delete">Delete</a>
                                    </span>
                                    <strong>{{$pr->name}}</strong>
                                </li>                                
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="card-title"><i class="fas fa-align-left mr-2"></i> Spesialisasi
                            <small class="float-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#newSpesialisasi"><i class="fas fa-plus-circle mr-2"></i>Add New</a></small>
                        </h4>
                        <ul>
                            @foreach ($spesial as $sp)
                                <li>
                                    <span class="mr-3">
                                        <a href="#" data-id="{{$sp->id}}" class="text-danger spesial-delete">Delete</a>
                                    </span>
                                    <strong>{{$sp->name}}</strong>
                                </li>                                
                            @endforeach
                        </ul>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</div>

<!-- Modal Add New-->
<div class="modal fade" id="newPrinsip" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Add new Prinsip</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="{{ route('admin.about.prinspes.prins-upload') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input id="head" class="form-control" type="text" name="name" required>
                        </div>
                        
                        <button type="submit" class="btn btn-success float-right"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add New-->
<div class="modal fade" id="newSpesialisasi" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Add new Spesialisasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="{{ route('admin.about.prinspes.spes-upload') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input id="head" class="form-control" type="text" name="name" required>
                        </div>
                        
                        <button type="submit" class="btn btn-success float-right"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add New-->
<div class="modal fade" id="newApproach" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Add new Approach</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="{{ route('admin.about.approach.appr-upload') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" class="form-control descCK" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success float-right"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
