@extends("layout")

@section("content")
    <div class="flex flex-col w-3/4 mx-auto mt-2 pt-5 h-full">
        <h1 class="px-3 text-[3rem] font-semibold border-b border-gray-750 mb-5">Demo</h1>
        <div class="w-full h-3/4 bg-gradient-to-r from-orange-400 to-orange-600 p-[3px] rounded-2xl mt-2 shadow-sm shadow-gray-950 overflow-hidden">
            <div class="rounded-2xl bg-gray-900 p-[30px] overflow-hidden w-full h-full">
                <div class="rounded-xl overflow-hidden w-full h-full shadow-xl shadow-gray-950">
                    <iframe src="https://tour.panoee.net/natadesa-endek/62621a50118202256c6ab134" class="w-full h-full"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

