
<article id="main">
				<section class="wrapper style4 container">
					<div class="container">
		
		<div class="d-flex justify-content-center h-40">
			<div class="image_outer_container">
				<div class="green_icon"></div>
				<div class="image_inner_container">
					<img src="images/profil.png">
				</div>
			</div>
		</div>
	</div>
	<?php  echo"bienveenu ".$_SESSION['prenom']; ?>

<?php if(isset($_POST["submit"])){
		?>			
	<form method="POST" action ="#" enctype="multipart/form-data">
		<input type="file" name="avatar"/>
		<input type="submit" name="submit"/>
	</form> <?php  } else{
	 echo $_FILES['avatar']['name'];
	  
}?>





				</section> 
			</article>

	<style>
		  .container{
       	height: 100%;
       	align-content: center;
       }

       .image_outer_container{
       	margin-top: auto;
       	margin-bottom: auto;
       	border-radius: 50%;
       	position: relative;
       }

       .image_inner_container{
       	border-radius: 50%;
       	padding: 5px;
        background: #833ab4; 
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4); 
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
       }
       .image_inner_container img{
       	height: 100px;
       	width: 100px;
       	border-radius: 50%;
       	border: 5px solid white;
       }

       .image_outer_container .green_icon{
         background-color: #4cd137;
         position: absolute;
         right: 30px;
         bottom: 10px;
         height: 30px;
         width: 30px;
         border:5px solid white;
         border-radius: 50%;
       }
   </style>