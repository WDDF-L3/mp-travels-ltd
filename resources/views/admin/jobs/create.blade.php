<form action="{{ route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Job Title" class="form-control mb-3">

    <input type="text" name="location" placeholder="Location" class="form-control mb-3">

    <textarea name="description" placeholder="Job Description" class="form-control mb-3" rows="5"></textarea>

    <textarea name="cover_letter" placeholder="Requirements" class="form-control mb-3" rows="5"></textarea>

    <label>
        <input type="checkbox" name="status" checked>
        Active
    </label>

    <br><br>

    <button type="submit" class="btn btn-primary">Post Job</button>
</form>