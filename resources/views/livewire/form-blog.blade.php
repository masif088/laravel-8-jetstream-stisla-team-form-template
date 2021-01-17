<div id="form-create" class=" card p-4">
    <form wire:submit.prevent="create">

        <x-form-input type="text" title="title" model="blog.title"/>

        <x-form-summernote :summernote="$blog['contents']" title="contents" model="blog.contents"/>

        <x-form-select2 :options="$optionTags" :selected="$blogTags" title="Yoski" model="blogTags"/>
        <x-form-select :options="$optionStatus" :selected="$blog['status']" title="Yoski" model="blog.status"/>

        <div class="form-group col-span-6 sm:col-span-5"></div>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>

    </form>
    {{--    console.log({{$data['content']}})--}}

</div>