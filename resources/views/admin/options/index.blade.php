@extends('admin.admin')

@section('title', 'Toutes les options')

@section('content')


    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">@yield('title')</h6>
                    <a href="{{ route('admin.option.create') }}" type="button" class="btn btn-primary">Ajouter</a>


                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Name</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($options as $option)
                                <tr>
                                    <td>{{ $option->id }}</td>
                                    <td>{{ $option->name }}</td>
                                    
                                    <td>
                                        <div class="mb-2 d-flex gap-1">
                                            <a href="javascript:;" class="btn btn-sm btn-outline-secondary">
                                                <i data-feather="eye" class="me-1"></i> 
                                            </a>
                                            <a href="{{ route('admin.option.edit', $option) }}" class="btn btn-sm btn-outline-primary">
                                                <i data-feather="edit-2" class="me-1"></i> 
                                            </a>
                                            <form method="post" action="{{route('admin.option.destroy', $option)}}" class="d-inline">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="confirmDelete(event)">
                                                    <i data-feather="trash" class="me-1"></i> 
                                                </button>
                                                
                                               
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    {{ $options->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
