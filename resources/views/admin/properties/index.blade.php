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
                                    <td><span class="badge bg-danger">{{ $property->city }}</span></td>
                                    <td>
                                        <div class=" mb-2">
                                            <a class=" d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                                                    class="icon-sm me-2"></i><span class="">View</span></a><a
                                                class=" d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i><span
                                                    class="">Edit</span></a><a class=" d-flex align-items-center"
                                                href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i><span
                                                    class="">Delete</span></a><a class=" d-flex align-items-center"
                                                href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i><span
                                                    class="">Print</span></a>
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
