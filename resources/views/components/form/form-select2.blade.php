<div class="form-group col-span-6 sm:col-span-5" wire:ignore>
    <label for="{{$model}}">{{$title}}</label>
    <select id="{{$model}}" class="form-control select2" multiple="">
        @foreach($options as $option)
            <option value="{{$option->value}}" {{ $isSelected($option->value) ? 'selected="selected"' : '' }} >
                {{$option->title}}
            </option>
        @endforeach
    </select>
    <script>
        document.addEventListener('livewire:load', function () {
            $('#{{$model}}').select2();
            $('#{{$model}}').on('change', function (e) {
                data = $('#{{$model}}').select2("val");
            @this.set('{{$model}}', data);
            })
        });
    </script>
</div>
