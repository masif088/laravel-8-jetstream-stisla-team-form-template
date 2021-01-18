<div class="form-group col-span-6 sm:col-span-5" wire:ignore>
    <label for="{{$title}}">{{$title}}</label>
    <input id="{{str_replace(".", "", $model)}}" type="{{$type}}" class="mt-1 block w-full form-control shadow-none datepicker" wire:model.defer="{{$model}}"/>
    @error($model) <span class="error">{{ $message }}</span> @enderror
    <script>
        document.addEventListener('livewire:load', function () {
            $("#{{str_replace(".", "", $model)}}").on("change.datetimepicker", () => {
                var data = document.getElementById('{{str_replace(".", "", $model)}}').value;
            @this.set('{{$model}}', data)
            });
        });
    </script>
</div>
