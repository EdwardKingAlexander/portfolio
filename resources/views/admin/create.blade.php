<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://cdn.tiny.cloud/1/v814euhe1zoln9nf7f90qfvdcwtpitvx091wm7l08opoyxe7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
<div class="w-3/4 mx-auto">
    <textarea>
        Welcome to TinyMCE!
      </textarea>
</div>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'autolink lists media table',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Edward'
    });
  </script>
</body>
</html>