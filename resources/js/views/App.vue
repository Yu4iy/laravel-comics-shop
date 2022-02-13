
<template>
<div>
	<!-- HEADER -->
	<Header/>

	<!-- MAIN  -->
	<main>Main</main>

	<!-- FOOTER -->
	<FooterLinks/>
	<Footer/>
	
</div>

</template>

<script>

import Header from '../components/Header.vue'
import FooterLinks from '../components/FooterLinks.vue'
import Footer from '../components/Footer.vue'
export default {
name:'App',
components:{
	Header,
	FooterLinks,
	Footer
},

}
</script>

<style lang="scss">
@import '../styles/variables';
@import '../styles/globals';

</style>