
<?php
require_once './partials/header.php';


?>

  <!-- Page content -->
  <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
      <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 flex items-center justify-center">
        <p class="text-gray-500 text-xl">Hello <?php echo isset($_SESSION['user'] )? "{$_SESSION['user'][0]['name']}":"Guest" ?></p>
      </div>
    </div>
  </div>

  <script>
    // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });
        
        // Mobile dropdown toggles
        document.querySelectorAll('.mobile-dropdown-trigger').forEach(trigger => {
            trigger.addEventListener('click', function() {
                const content = this.nextElementSibling;
                content.classList.toggle('hidden');
            });
        });
  </script>
</body>

</html>