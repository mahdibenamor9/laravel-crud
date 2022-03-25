@extends('layout')

    @section('content')

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Provider Management</h2>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                <a class="btn btn-success " href="{{ route('providers.create') }}"> Add Provider</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        @if(sizeof($providers) > 0)
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Provider Name</th>
                    <th>Provider Country</th>

                    <th width="280px">More</th>
                </tr>
                @foreach ($providers as $provider)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $provider->provider_name }}</td>
                        <td>{{ $provider->provider_country }}</td>

                        <td>
                            <form action="{{ route('providers.destroy',$provider->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('providers.show',$provider->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('providers.edit',$provider->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <div class="alert alert-alert">Start Adding to the Database.</div>
        @endif

        {!! $providers->links() !!}

    @endsection
