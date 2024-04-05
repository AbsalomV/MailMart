<x-layout>
    <style>
        th, td {
            border: 1px solid #e2e8f0;
            padding: 0.75rem;
            }
    </style>
    <div class="container text-center mx-auto">
        <table class="w-full border-collapse">
            <thead>
            <tr class="bg-gray-200">
                <th>Status</th>
                <th>From</th>
                <th>Subject</th>
                <th>Date</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($mails as $mail)
                <tr>
                    <td>{{ $mail['status'] }}</td>
                    <td>{{ $mail['from'] }}</td>
                    <td>{{ $mail['subject'] }}</td>
                    <td>{{ $mail['date'] }}</td>
                    <td class="text-blue-500 hover:underline"><a href="/{{ $mail['id'] }}">REPLY</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

