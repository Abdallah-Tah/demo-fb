<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Table Ads') }}
        </h2>
    </x-slot>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fbAds as $ad)
                <tr>
                    <td>{{ $ad->id }}</td>
                    <td>{{ $ad->name }}</td>
                    <td>{{ $ad->status }}</td>
                    <td>{{ $ad->created_at }}</td>
                    <td>{{ $ad->updated_at }}</td>
                    <td>
                        <a href="{{ route('fb-ads.edit', $ad->id) }}">Edit</a>
                        <form action="{{ route('fb-ads.destroy', $ad->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
            @endforeach
        </tbody>      
    </table>


    
</x-app-layout>
