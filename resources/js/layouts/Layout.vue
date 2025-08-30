<template>
	<Header />
	<main class="main">
		<div class="container">
			<slot />
		</div>
	</main>
</template>
<script setup lang="ts">
import Header from './Header.vue'
</script>
<style scoped>
.main {
	margin-top: 1.5rem;
}
</style>