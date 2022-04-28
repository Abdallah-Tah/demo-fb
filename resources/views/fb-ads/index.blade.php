<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Account ID</th>
                            <th>Compaign ID</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ads as $ad)
                            <tr>
                                <td>{{ $ad[0]->id }}</td>
                                <td>{{ $ad[0]->name }}</td>
                                <td>{{ $ad[0]->account_id }}</td>
                                <td>{{ $ad[0]->campaign_id }}</td>
                                <td>{{ $ad[0]->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

</x-app-layout>
