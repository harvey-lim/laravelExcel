
<a href="{{ route('export') }}">Export</a>
<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="excel_file" id="excel_file">
    <button type="submit">Import</button>
</form>

<form action="{{ route('import.csv') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file" id="csv_file">
    <button type="submit">Import CSV</button>
</form>