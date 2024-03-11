<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex flex-col min-h-screen">
        <!-- Top Bar -->
        <div class="bg-gray-800 text-gray-100 py-4 px-6">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold">Dashboard</h2>
                <button class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded">Logout</button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-grow md:flex-row">
            <!-- Sidebar -->
            <div id="sidebar" class="bg-gray-900 text-gray-100 w-full md:w-64 flex-shrink-0">
                <div class="p-4">
                    <h1 class="text-2xl font-bold">Admin Panel</h1>
                </div>
                <ul class="py-4">
                    <li class="px-4 py-2 hover:bg-gray-800"><a href="#"
                            onclick="loadPage('dashboard.html')">Dashboard</a></li>
                    <li class="px-4 py-2 hover:bg-gray-800"><a href="#" onclick="loadPage('projects.html')">Projects</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-800"><a href="#" onclick="loadPage('task.html')">Tasks</a></li>
                    <li class="px-4 py-2 hover:bg-gray-800"><a href="#" onclick="loadPage('users.html')">Users</a></li>
                    <li class="px-4 py-2 hover:bg-gray-800"><a href="#" onclick="loadPage('settings.html')">Settings</a>
                    </li>
                </ul>
            </div>

            <!-- Content -->
            <div id="main-content" class="flex-1 p-6">
                <!-- Content will be dynamically loaded here -->
            </div>
        </div>
    </div>

    <script>
        function loadPage(url) {
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('main-content').innerHTML = html;
                })
                .catch(error => console.error('Error loading page:', error));
        }

        // Load dashboard.html initially when the page is loaded
        window.addEventListener('load', function () {
            loadPage('dashboard.html');
        });
    </script>
</body>

</html>