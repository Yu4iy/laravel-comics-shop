<template>
	<div class="links-wrapper">
		<div class="container">
			<section>				
				<div class="comics-links">
					<ul>
						<li><h2>DS comics</h2></li>
						<li>Characters</li>
						<li>Comics</li>
						<li>Movies</li>
						<li>Tv</li>
						<li>Games</li>
						<li>Videos</li>
						<li>News</li>
					</ul>
						<ul>
						<li><h2>Shop</h2></li>
						<li>Shop DC</li>
						<li>Shop DC Colectibles</li>
					</ul>
				</div>
				<div class="comics-links">
					<ul>
						<li><h2>DC</h2></li>
						<li>Terms Of Use</li>
						<li>Privacy Policy</li>
						<li>Ad Choices</li>
						<li>Advertising</li>
						<li>Jobs</li>
						<li>Subscriptions</li>
						<li>Talent Workshops</li>
						<li>CPSC Certificates</li>
						<li>Ratings</li>
						<li>Shop Help</li>
						<li>Contact Us</li>
					</ul>
				</div>
				<div class="comics-links">
					<ul>
						<li><h2>Sites</h2></li>
						<li>DC</li>
						<li>MAD Magazine</li>
						<li>DC Kids</li>
						<li>DC Universe</li>
						<li>DC Power Visa</li>
					</ul>
				</div>	
			</section>
		
		</div>
	</div>	
</template>

<script>
export default {
name:'FooterLinks'
}
</script>

<style lang='scss' scope>
@import '../styles/variables';

	.links-wrapper{
		background-image: url('../assets/img/footer-bg.jpg');
		background-repeat: no-repeat;
		background-size: cover;
			
			section{
				display: flex;
				background-image: url(../assets/img/dc-logo-bg.png);
				background-repeat: no-repeat;
				background-position: center right;
				background-size:  50%;
					.comics-links{
						padding: 40px 25px  60px 0;
						h2{
							color: $whitheColor;
							font-size: 1rem;
							margin: 0.7rem 0 0.7rem 0;
							text-transform: uppercase;
						}
						li{
							margin-bottom: 0.6rem ;
							color:$colorLightGray;
							font-size: 0.8rem;
						}
					}
			}
			
	}

</style>