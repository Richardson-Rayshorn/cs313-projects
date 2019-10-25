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
          echo '"';
          echo $menu_links[$i]; 
          echo '</a></li>';
        }
        echo '</ul>
      </nav>
    </div>
  </footer>
</body>
</html>
    ';