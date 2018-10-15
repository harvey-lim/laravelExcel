
<a href="{{ route('export') }}">Export</a>
<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="excel_file" id="excel_file">
    <button type="submit">Import</button>
</form>