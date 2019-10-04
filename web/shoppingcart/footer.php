<?php 
    echo '
    </div>
    <footer>
    <div class="container">
      <nav>
        <ul>';
        for($i = 0; $i < $arr_length; $i++) {
          echo '<li><a class="anchorTag" id="'; 
          echo $menu_links[$i]; 
          echo '" onClick="navigation(this)">';
          echo $menu_links[$i]; 
          echo '</a></li>';
        }
        echo '</ul>
      </nav>
    </div>
  </footer>
  <script src="./scripts/toggle.js"></script>
  <script src="./scripts/app.js"></script>
</body>
</html>
    ';