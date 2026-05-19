@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Contact Messages</h2>

<div class="card border-0 shadow-sm">
    <div class="card-body table-responsive">

        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>
                @forelse($messages as $key => $message)
                    <tr>
                        <td>{{ $key + 1 }}</td>

                        <td>{{ $message->name }}</td>

                        <td>{{ $message->email }}</td>

                        <td>{{ $message->subject }}</td>

                        <td width="350">
                            {{ $message->message }}
                        </td>

                        <td>
                            {{ $message->created_at->format('d M Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            No messages found.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>
</div>

@endsection