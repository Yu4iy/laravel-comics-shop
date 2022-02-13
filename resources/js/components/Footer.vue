<template>
  <footer class="footer">
	<div class="footer__container container">
		<div class="sign-up">
			<a href="">Sign-Up Now!</a>
		</div>
		
		<div class="social">
			<div class="social__text">Folow Us</div>
			<div>
				<a class="social__link" href="">
					<img src="'../assets/img/footer-facebook.png' " alt="">
				</a>
				<a class="social__link" href="">
					<img src="'../assets/img/footer-periscope.png' " alt="">
				</a>
				<a class="social__link" href="">
					<img src=" '../assets/img/footer-pinterest.png' " alt="">
				</a>
				<a class="social__link" href="">
					<img src=" '../assets/img/footer-twitter.png' " alt="">
				</a>
				<a class="social__link" href="">
					<img src=" '../assets/img/footer-youtube.png' " alt="">
				</a>
			</div>
		</div>
	</div>
</footer>
</template>

<script>
export default {

}

</script>

<style lang="scss" scoped>
@import '../styles/variables';

.footer{
	background-color: rgb(51, 51, 51);
	border-top: solid 17px  $brandColor;
	padding: 30px 0;

	.footer__container {
		display: flex;
		justify-content: space-between;
		align-items: center;
		@media screen and (max-width: 542px) {
			flex-direction: column;

		}
	}
	.sign-up a {
		font-size: 17px;
		text-transform: uppercase;
		color: #fff;
		text-decoration: none;
		padding: 15px 14px;
		border: 2px solid $brandColor;
		transition: all ease-in 0.2s;
		&:hover{
			background-color: $brandColor;
		}

	}
	.social {
		display: flex;
		align-items: center;
		@media screen and (max-width: 632px) {
			flex-direction: column;

		}

	
			&__text {
				margin-right: 25px;
				font-weight: 700;
				text-transform: uppercase;
				color:$brandColor;
				@media screen and (max-width: 632px) {
					margin-right: 0;
					margin-bottom: 10px;
					
				}
				@media screen and (max-width: 542px) {
					margin-top: 25px;
		
				}
			}
	
			&__link {
				margin-right: 15px;
				text-decoration: none;

				&:last-child{
					margin-right: 0;
				}
				img{
					transition: all ease-in 0.2s ;
					box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
					border-radius: 100%;
					&:hover{
						transform: scale(1.1);
						box-shadow: 0px 5px 7px -4px #000000, 3px 3px 7px 3px rgba(0,0,0,0);
						filter: brightness(1.5)




	
					}

				}
			}
	}
	
}

</style>