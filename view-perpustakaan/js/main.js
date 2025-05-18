        document.addEventListener("DOMContentLoaded", function () {
            const sidebar = document.getElementById("sidebar");
            const sidebarToggle = document.getElementById("sidebarToggle");

            sidebarToggle.addEventListener("click", function () {
                // Toggle class 'translate-x-0' untuk menampilkan sidebar
                sidebar.classList.toggle("-translate-x-full");
            });
        });
