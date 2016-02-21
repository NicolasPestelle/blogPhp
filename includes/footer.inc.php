</div>

        <?php  
          echo'<nav class="span4">
            <h2>Menu</h2>
			
            <form action="index.php" method="post">
			<div class="clearfix">
				<input type="text" name="search" id="search">
			</div>
			<input class="btn btn-default" id=rechercher" type="submit" value="rechercher">
			</form>
			
            <ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="article.php">Rédiger un article</a></li>
				<li><a href="inscription.php">Inscription</a></li>
				<li><a href="connexion.php">Connexion</a></li>				
			</ul>
            
          </nav>';
		  
		?>
        </div>
        
      </div>

      <footer>
        <p>&copy; Pestelle Nicolas 2016</p>
      </footer>

    </div>

  </body>
</html>
