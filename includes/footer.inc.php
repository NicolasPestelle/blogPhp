</div>

        <?php  
          echo'<nav class="span4">
            <h2>Menu</h2>
			
			
            <ul class = "menu">
				<li><a href="index.php">Accueil</a></li>
				<li><a href="article.php">Rédiger un article</a></li>
				<li><a href="inscription.php">Inscription</a></li>
				<li><a href="connexion.php">Connexion</a></li>
				<li> <form action="index.php" method="post">
					<input type="text" name="search" id="search" placeholder="Tapper ici votre recherche">
					<input class="btn btn-primary" id="rechercher" type="submit" value="rechercher">
				</form></li>
				<li>
					<input type="text" name="mail" id="mail" placeholder="rentrer votre mail">
					<input class="btn btn-primary" id="abonne" type="button" value="je m\'abonne" onclick="newsletter()">
				</li>
			</ul>
            

          </nav>';
		  
		?>
        </div>
        
      </div>
	  
	  <script>

		
	  $('.menu').css('display','none');
	  $(".span4").hover(function(){
		$(".menu").slideDown();

	  },function(){
		$(".menu").slideUp();
	  });
	  

	  </script>

      <footer>
        <p>&copy; Pestelle Nicolas 2016</p>
      </footer>

    </div>

  </body>
        <script>

    
		//repere la touche entre (=13) pour réactiver la validation des mail
		$("#mail").keypress(function(event){
			var enter = (event.keyCode ? event.keyCode : event.which);
			if( enter == 13){
				newsletter();
			}
		});
		
		//gestion abonnement newletter
	  function newsletter(){
		 var email = $("#mail").val();
		//  alert(email);
		  
		  if(email == ''){
				alert('veuillez remplir votre email');
		  }else{
			   var mail = "?email=" + email;
			   //alert(""+mail);
			   //traitement ajax + affichage pour mail
			   $.ajax({
				   type: "GET",
				   url:"newletter.php"+mail,
				   data: mail,
				   cache: false,
				   success: function(data){
					   $("ul").append(data);
					   $("#mail").val("");
				   }
			   });
		  }
	  }
	  
	  function removeParent(){
		  $('.close').parent().remove();
	  }
</script>
</html>
