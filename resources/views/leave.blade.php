<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="fromport" content="width=device-width, initial-scale=1.0">
    <title>Leave System</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
    $(document).ready(function () {

        $("#openBtn").click(function () {
            $("#modal").removeClass("hidden");
        });

        $("#closeBtn").click(function () {
            $("#modal").addClass("hidden");
        });

        $("#modal").click(function (e) {
            if (e.target.id === "modal") {
                $("#modal").addClass("hidden");
            }
        });

    });

    function editUser(name) {
        alert("Edit: " + name);
    }

    function deleteUser(name) {
        if (confirm("DELETE EMPLOYER: " + name)) {


            alert("Deleted: " + name);
        }
    }
    </script>

    <!-- React core -->
<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>

<!-- React DOM -->
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

<!-- Babel (to allow JSX in browser) -->
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>


    <script  type="text/babel"  >

function deleteUser(name) {
  fetch('/delete-user', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({ name })
  })
  .then(res => res.json())
  .then(data => {
    alert("Deleted: " + name);
  })
  .catch(err => console.log(err));
}

    </script>

</head>

<body class="h-screen flex bg-sky-50">

<!-- SIDEBAR -->
<div class="w-1/5 bg-white shadow-lg border-r border-sky-200 flex flex-col">

    <div class="p-6 text-center border-b border-sky-200">
        <h1 class="text-2xl font-bold text-sky-700">My App</h1>
    </div>
  <div class="flex-1 p-4 space-y-3">
        <a href="/logout" class="block px-4 py-2 rounded-lg hover:bg-sky-100">🚪 Logout</a>
        <a href="/users" class="block px-4 py-2 rounded-lg hover:bg-sky-100">👥 Employees</a>
        <a href="/leave" class="block px-4 py-2 rounded-lg hover:bg-sky-100">📝 Pending Leave Approvals</a>
        <a href="/approved" class="block px-4 py-2 rounded-lg hover:bg-sky-100">📋 Approved Leaves</a>
     
    </div>

</div>

<!-- MAIN -->
<div class="w-4/5 p-8 flex flex-col">

    <div class="bg-white p-4 rounded-xl shadow mb-6 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-700">Dashboard</h2>

        <button id="openBtn"
            class="bg-sky-700 text-white px-4 py-2 rounded-lg hover:bg-sky-800">
            + New
        </button>
    </div>

    <!-- TABLE -->
    <div class="bg-white p-6 rounded-xl shadow-md">

        <h2 class="text-xl font-semibold mb-4 text-sky-700">
            Pending Approval  Leaves
        </h2>

        <div class="max-h-96 overflow-y-auto border border-gray-200 rounded-lg">

            <table class="min-w-full">

                <thead class="bg-sky-100 text-sky-800 sticky top-0">
                    <tr>
                        <th class="px-4 py-2 text-left">Employer</th>
                        <th class="px-4 py-2 text-left">Leave Type </th>
                        <th class="text-center">From </th>
                        <th class="text-center">To</th>
                        <th class="text-center">Days</th>
                       
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody class="text-gray-700">

               @foreach($pendingleaves as $pendingleave)
<tr class="border-t">
    <td class="px-4 py-2">👤   {{ $pendingleave['employee'] }} </td>        <!-- Employee name -->
    <td class="px-4 py-2">  {{ $pendingleave['category'] }} </td>           <!-- Leave type -->
    
    <td class="text-center"> {{ $pendingleave['from'] }}</td>             <!-- From date -->
    <td class="text-center"> {{ $pendingleave['to'] }}</td>               <!-- To date -->
    
    <td class="text-center">
    @php
        $date1 = new DateTime($pendingleave['from']);
        $date2 = new DateTime($pendingleave['to']);
        $diff = $date1->diff($date2);
    @endphp

    {{ $diff->days }}
</td> 

    
    <td class="text-center space-x-2">
        <button onclick="editUser(' {{ $pendingleave['id'] }}')" class="text-sky-600 hover:underline">✅</button>
        <button onclick="deleteUser('  {{ $pendingleave['id'] }} ')" class="text-red-600 hover:underline">🗑️</button>
    </td>
</tr>
@endforeach

                </tbody>

            </table>

        </div>
    </div>
</div>

<!-- MODAL -->
<div id="modal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center">

    <div class="bg-white w-96 rounded-xl shadow-lg p-6 border border-sky-200">

        <h2 class="text-xl font-bold text-sky-700 mb-4">to Employee</h2>

        <form action="/newemployee" method="POST">
            @csrf

            <input type="text" name="name" placeholder="Username"
                class="w-full mb-3 px-3 py-2 border rounded-lg">

            <input type="password" name="password" placeholder="Password"
                class="w-full mb-3 px-3 py-2 border rounded-lg">

            <input type="text" name="leave" placeholder="leave"
                class="w-full mb-3 px-3 py-2 border rounded-lg">

            <div class="grid grid-cols-2 gap-2 mb-4">
                <label><input type="checkbox" name="from"> from</label>
                <label><input type="checkbox" name="to"> to</label>
                <label><input type="checkbox" name="edit"> Edit</label>
                <label><input type="checkbox" name="delete"> Delete</label>
            </div>

            <div class="flex justify-end gap-2">
                <button type="button" id="closeBtn"
                    class="px-4 py-2 border rounded-lg">
                    Cancel
                </button>

                <button type="submit"
                    class="px-4 py-2 bg-sky-600 text-white rounded-lg">
                    Save
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>