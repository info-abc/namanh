<script src="{{ asset('adminlte/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'editor1',
    {
        entities_latin: false,
        entities_greek: false,
        filebrowserBrowseUrl : '{{ url("/adminlte/ckeditor/ckfinder/ckfinder.html") }}',
        filebrowserImageBrowseUrl : '{{ url("/adminlte/ckeditor/ckfinder/ckfinder.html?type=Images") }}',
        filebrowserFlashBrowseUrl : '{{ url("/adminlte/ckeditor/ckfinder/ckfinder.html?type=Flash") }}',
        filebrowserUploadUrl : '{{ url("/adminlte/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files") }}',
        filebrowserImageUploadUrl : '{{ url("/adminlte/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images") }}',
        filebrowserFlashUploadUrl : '{{ url("/adminlte/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash") }}'
        }
    );
    CKEDITOR.replace( 'editor2',
    {
        entities_latin: false,
        entities_greek: false,
        filebrowserBrowseUrl : '{{ url("/adminlte/ckeditor/ckfinder/ckfinder.html") }}',
        filebrowserImageBrowseUrl : '{{ url("/adminlte/ckeditor/ckfinder/ckfinder.html?type=Images") }}',
        filebrowserFlashBrowseUrl : '{{ url("/adminlte/ckeditor/ckfinder/ckfinder.html?type=Flash") }}',
        filebrowserUploadUrl : '{{ url("/adminlte/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files") }}',
        filebrowserImageUploadUrl : '{{ url("/adminlte/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images") }}',
        filebrowserFlashUploadUrl : '{{ url("/adminlte/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash") }}'
        }
    );
</script>