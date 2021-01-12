<div class="form-group col-span-6 sm:col-span-5">
    <label for="name">{{$title}}</label>
    <select class="form-control" wire:model.defer="{{$model}}" required>
        @foreach($options as $option)
        <option value="{{$option->value}}" {{ $isSelected('waiting') ? 'selected="selected"' : '' }}>{{$option->title}}</option>
        @endforeach
{{--        <option value="accepted" {{ $isSelected('accepted' )? 'selected="selected"' : '' }}>Accepted</option>--}}
{{--        <option value="decline" {{ $isSelected('decline') ? 'selected="selected"' : '' }}>Decline</option>--}}
    </select>
</div>
