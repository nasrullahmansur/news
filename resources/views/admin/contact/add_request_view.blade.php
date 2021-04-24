@extends('layouts.admin')

@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Read & Reply</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <ul>
                            <li>Name: {{ ucwords($add->name) }}</li>
                            <li>Email: {{ $add->email }}</li>
                            <li>Email: {{ $add->phone }}</li>

                            <hr>
                            <div>
                                {{ $add->message }}
                            </div>

                            <br>
                            <br>
                            @if ($add->file != null)
                            <a href="{{ $add->file }}" download="{{ $add->file }}" class="btn btn-info" id="delete_btn">download file</a>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

