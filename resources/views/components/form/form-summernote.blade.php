<div class="form-group col-span-6 sm:col-span-5" wire:ignore>
    <label for="name">{{$title}}</label>
{{--    {{dd($summernote)}}--}}
    <textarea type="text" input="description" id="summernote" class="form-control summernote" >{!! $summernote !!}</textarea>
    @error($model) <span class="error">{{ $message }}</span> @enderror
    <script>
        document.addEventListener('livewire:load', function () {
            $('#summernote').summernote({
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onChange: function (content, $editable) {
                    @this.set('{{$model}}', content)
                    }
                }
            });
        });
    </script>
</div>
