@extends('admin_layouts.userLayout')
@section('content')

@extends('components.sidebar')

<div class="flex flex-col p-10 bg-slate-200 w-[100%]">
    <div class="flex gap-5">
        <span class="w-[2px] rounded h-[35px] bg-slate-300"></span>
        <h1 class="text-orange-600 text-2xl font-semibold">User Entries</h1>
    </div>

    <div class="text-center p-7 text-sky-900 text-lg">All User Entries</div>

    <div class="w-full flex justify-center p-4">
        <input class="shadow appearance-none border rounded w-[50%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline0" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Total Points">
        <input class="ml-3 py-2 px-5 rounded-md bg-red-800 text-white shadow-md hover:bg-gray-400 cursor-pointer transition assignment text-left" type="submit" name="sstudent" value="Search User Entry"> <br>
    </div>

    <div class="flex flex-col bg-gray-100 w-[1000px] ml-5 items-center mb-32 gap-10 p-6">
        <div class="flex justify-center h-[70%] p-4 w-[80%] mb-4">
            <table class="shadow-2xl table-auto rounded-md w-[90%]" id="myTable">
                <thead class="text-white bg-gray-700">
                    <tr>
                        <th class="px-6 py-3">User Entry Id</th>
                        <th class="px-6 py-3">User Id</th>
                        <th class="px-6 py-3">Mathematics</th>
                        <th class="px-6 py-3">English</th>
                        <th class="px-6 py-3">Swahili</th>
                        <th class="px-6 py-3">Science</th>
                        <th class="px-6 py-3">Humanity</th>
                        <th class="px-6 py-3">Total Points</th>
                        <th class="px-6 py-3">Delete</th>

                    </tr>
                </thead>
                @foreach($gradeentry as $grade)
                <tbody id="dynamic" class="bg-white">
                    <tr class="border-b odd:bg-white even:bg-gray-50">
                        <td class="px-6 py-4">{{$grade->id}}</td>
                        <td class="px-6 py-4">{{$grade->user_id}}</td>
                        <td class="px-6 py-4"> {{$grade->mathematics}}</td>
                        <td class="px-6 py-4">{{$grade->english}}</td>
                        <td class="px-6 py-4">{{$grade->swahili}}</td>
                        <td class="px-6 py-4">{{$grade->science}}</td>
                        <td class="px-6 py-4">{{$grade->humanity}}</td>
                        <td class="px-6 py-4">{{$grade->totalpoints}}</td>
                    
                        <td class="px-5 py-4">
                            <a href="#" class="inline-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                   

                </tbody>
                @endforeach
            </table>
           
        </div>
     
    </div>

</div>
</div>
@endsection


<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[6];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    };

    function adduser() {
        let modal = $(".add-user-entry-modal");
        modal.removeClass('hidden');
        modal.addClass('flex');
        stopScroll();

    }

    function closeuser() {
        let modal = $(".add-user-entry-modal");
        modal.removeClass('flex');
        modal.addClass('hidden');
        resumeScroll();

    }

 
</script>