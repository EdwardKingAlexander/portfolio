@extends('admin.layout.admin')
@section('scripts')
<script src="https://cdn.tiny.cloud/1/v814euhe1zoln9nf7f90qfvdcwtpitvx091wm7l08opoyxe7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
@section('content')
@section('main-content')

<div class="w-3/4 mx-auto mt-3">
  
<form action="{{ route('blog.store') }}" method="POST" class="space-y-8 divide-y divide-gray-200">
  @csrf
  <div class="space-y-8 divide-y divide-gray-200">
    <div>
      <div>
        @error('title')
          {{$message}}
        @enderror
        @error('body')

        @error('author')
        {{$message}}
      @enderror
        {{$message}}
      @enderror
        <h3 class="text-lg font-medium leading-6 text-gray-900">
          Create a New Blog Post
        </h3>
      </div>

      <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm font-medium text-gray-700">
            Title
          </label>
          
          <div class="flex mt-1 rounded-md shadow-sm">
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="flex-1 block w-full min-w-0 border-gray-300 rounded-none focus:ring-blue-500 focus:border-blue-500 rounded-r-md sm:text-sm">
          </div>
        </div>

        <div class="sm:col-span-6">
          <label for="body" class="block text-sm font-medium text-gray-700">
            Body
          </label>
          <div class="mt-1">

            <textarea name="body" id="body" cols="30" rows="20">{{ old('body') }}</textarea>
          </div>
        </div>


        <div>
          <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
          <select id="tags" multiple
           name="tags[]" class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
            @endforeach
          </select>
        </div>
        
       
      </div>
    </div>

  
    
  </div>

  <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

  <div class="pt-5">
    <div class="flex justify-end">
      <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        Publish
      </button>
    </div>
  </div>
</form>

</div>



<script>
  var editor_config = {
    path_absolute : "http://localhost:8000/",
    selector: 'textarea',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      console.log(cmsURL);
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>
  @endsection
@endsection