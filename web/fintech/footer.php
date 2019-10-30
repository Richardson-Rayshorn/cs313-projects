<?php 
    echo '
    <footer>
    <div class="container">
      <nav grey darken-4>
        <ul>';
        for($i = 0; $i < $arr_length; $i++) {
          echo '<li><a class="anchorTag" id="'; 
          echo $menu_links[$i]; 
          echo '"';
          echo $menu_links[$i]; 
          echo '</a></li>';
        }
        echo '</ul>
      </nav>
    </div>
  </footer>
  <script src="./scripts/material.js"></script>
  <script src="./scripts/custom.js"></script>
</body>
</html>
    ';