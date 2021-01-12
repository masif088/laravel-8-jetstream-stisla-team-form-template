<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-form-input type="text" title="title" model="text"/>

{{--                </x-form>--}}
                <x-alert type="error" message="amessage"/>
{{--                piler::sanitizeComp--}}
{{--                <?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(error),'message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute({{$asd}}),'class' => 'mb-4']); ?>--}}
            </div>
        </div>
    </div>
</x-app-layout>
