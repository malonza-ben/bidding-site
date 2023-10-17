<!DOCTYPE html>
<html>
<head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .task-bar {
        background-color: #333;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
    }

    .logo {
        /* Add your logo styling here, e.g., width, height, background-image, etc. */
        border-radius: 10px 10px 10px 10px;
        
    }

    .center-title {
        font-size: 24px;
        font-weight: bold;
    }

    .admin-panel {
        display: flex;
        flex-wrap: wrap;
    }

    .sidebar {
        flex: 1;
        background-color: #333;
        color: #fff;
        padding: 20px;
    }

    .sidebar > div {
        margin: 10px 0;
        cursor: pointer;
    }

    .content {
        flex: 4;
        padding: 20px;
    }

    .order-details {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
    }

    .order-details table {
        width: 100%;
        border-collapse: collapse;
    }

    .order-details th, .order-details td {
        padding: 10px;
        text-align: left;
    }

    .order-details th {
        background-color: #eee;
    }

    .order-details th, .order-details td {
        border: none;
    }

    .status-buttons, .action-buttons {
        display: flex;
    }

    .status-buttons button, .action-buttons button {
        background-color: transparent;
        border: none;
        margin-right: 5px;
        cursor: pointer;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        margin: 5px 0;
    }

    .sidebar ul li a {
        color: #fff;
        text-decoration: none;
    }

    /* Define styles for the sidebar elements (e.g., .profile, .balance, etc.) */
    .profile, .balance, .available-tasks, .completed-tasks, .in-progress, .chat, .notification, .statistics {
        border: 1px solid #444;
        padding: 10px;
        border-radius: 5px;
    }

    /* Define responsive styles for different screen sizes */
    @media (max-width: 992px) {
        .sidebar {
            flex: 1;
            display: none;
        }
        
    }

    #search {
        width: 100%; /* Make the search input full width */
        margin-top: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

</style>
</head>
<body>
    <div class="task-bar">
        <div class="logo">
            <img src="logo.png" class="logo" alt="Company logo" width="150" height="100">
        </div>
        <div class="center-title">InTeD</div>
        <div class="innovation">Admin Panel</div>
    </div>
    <div class="admin-panel">
        
        <div class="sidebar">
           <div class="profile" <a href="profile.php">Profile</a></div>
            <div class="balance">Balance</div>
            <div class="available-tasks">Available Tasks</div>
            <div class="completed-tasks">Completed Tasks</div>
            <div class="in-progress" <a href="progress.php">In progress</a></div>
            <div class="chat">Chat</div>
            <div class="notification">Notification</div>
            <div class="statistics">Statistics</div>
        </div>
        <div class="content">
            <div class="order-details">
                <div>
                    <h2>Order Details</h2>
                    
            </div>
        </div>
    </div>

   <!--
    <script>
        // JavaScript for handling the sidebar toggle
        const sidebar = document.querySelector(".sidebar");
        const sidebarToggleIcon = document.getElementById("sidebar-toggle-icon");
        const sidebarCloseIcon = document.getElementById("sidebar-close-icon");

        document.querySelector(".sidebar-toggle").addEventListener("click", function() {
            if (sidebar.style.display === "none" || sidebar.style.display === "") {
                sidebar.style.display = "block";
                sidebarToggleIcon.style.display = "none";
            } else {
                sidebar.style.display = "none";
                sidebarToggleIcon.style.display = "block";
            }
        });

        // JavaScript for handling the search input
        const searchInput = document.getElementById("search");
        searchInput.addEventListener("keyup", function() {
            const searchText = searchInput.value.toLowerCase();
            const rows = document.querySelectorAll("table tr");
            rows.forEach(row => {
                const cells = row.getElementsByTagName("td");
                if (cells.length > 0) {
                    let match = false;
                    for (let i = 0; i < cells.length; i++) {
                        if (cells[i].textContent.toLowerCase().indexOf(searchText) > -1) {
                            match = true;
                            break;
                        }
                    }
                    if (match) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                }
            });
        });

        // JavaScript to close the sidebar on small screens
        sidebarCloseIcon.addEventListener("click", function() {
            sidebar.style.display = "none";
            sidebarToggleIcon.style.display = "block";
        });
    </script>
-->
</body>
</html>
