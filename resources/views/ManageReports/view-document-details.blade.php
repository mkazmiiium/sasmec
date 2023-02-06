@extends('layouts.app')

@section('content')


  <div class="-my-2 w-full mx-auto overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">

      <div class="px-3 text-2xl pt-4 font-bold">
      Document Details
      </div>

      <div class="p-6">
  <div class="max-w-full border-dashed border-4 border-gray-600 bg-white rounded overflow-hidden shadow-lg">

    <div class="flex justify-center">
        
    <div class="flex flex-col w-full p-5 mx-auto card">
            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mt-2 pb-12 items-center">
                    <span class="absolute text-lg bg-gray-100 px-2 font-semibold">Document</span>
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<iframe src="{{ $document->document_file }}" frameborder="0"></iframe>
				</div>

                </div>
            </div>

            <div class="mt-4 border-t-2 border-gray-200 "></div>

        
            <div class="mt-4 border-t-2 border-gray-200 "></div>

 
    </div>
    </div>
    </div>
 </div>

@endsection