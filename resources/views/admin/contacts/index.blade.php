@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Contact Messages</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

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
                    <th width="100">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($messages as $key => $message)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->subject ?? 'N/A' }}</td>
                        <td style="max-width:350px;">{{ $message->message }}</td>
                        <td>{{ $message->created_at->format('d M Y') }}</td>

                        <td>
                            <form action="{{ route('admin.contacts.delete', $message->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this message?')">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No messages found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection