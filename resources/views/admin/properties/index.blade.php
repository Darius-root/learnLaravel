@extends('admin.admin')

@section('title', 'Tout les biens')

@section('content')


    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">@yield('title')</h6>
                    <a href="{{ route('admin.property.create') }}" type="button" class="btn btn-primary">Ajouter</a>


                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Title</th>
                                <th class="pt-0">Surface </th>
                                <th class="pt-0">Prix</th>
                                <th class="pt-0">ville</th>
                                <th class="pt-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <td>{{ $property->id }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->surface }} m2 </td>
                                    <td>{{ number_format($property->price, 0, ',', ' ') }} DA</td>
                                    <td>{{ $property->city }}</td>
                                    <td>
                                        <div class="mb-2 d-flex gap-1">
                                            <a href="javascript:;" class="btn btn-sm btn-outline-secondary">
                                                <i data-feather="eye" class="me-1"></i> 
                                            </a>
                                            <a href="{{ route('admin.property.edit', $property) }}" class="btn btn-sm btn-outline-primary">
                                                <i data-feather="edit-2" class="me-1"></i> 
                                            </a>
                                            <form method="post" action="{{route('admin.property.destroy', $property)}}" class="d-inline">
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


                    {{ $properties->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
