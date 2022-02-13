<template>
	<header>
		<div class="container">
			<img src="../assets/dc-logo.png" alt="">
			<ul>
				<li  v-for = "(link,index) in links"
				:key="index"
				>
				<a :class="{active: index === 1}" href="">{{link}}</a>

				</li>
				
			</ul>
		</div>
	</header>
</template>

<script>
export default {
	name:'Header',
	data() {
	return {
		links: 
			[
				"characters",
				"comics",
				"movies",
				"tv",
				"games",
				"collectibles",
				"videos",
				"fans",
				"news",
				"shop",
			],
		}
	}
}

</script>

<style lang = 'scss' scoped >
@import '../styles/variables';

	header{
		position: relative;
		
		& > div{
			display: flex;
			align-items: center;
			justify-content: space-between;
			
			img{
				max-width: 80px;
			}
		}

		ul{
			list-style: none;
			display: flex;

			li{
				margin-right: 30px;
				position: relative;
				text-transform: uppercase;
				height: 100px;
				display: flex;
				align-items: center;
			
				
				&:last-child{
					margin-right: 0;

				}
					
				
				a{
					font-size: 0.7rem;
					font-weight: 700;
					color: $brownColor;
					&:hover{
						color: $brandColor;
					}
				
				} 
			}
		}
		

	}
	
	.active::after{
						content: '';
						width: 100%;
						height: 4px;
						background-color: $brandColor;
						display: block;	
						position: absolute;
						bottom: 0;
						}
	
</style>