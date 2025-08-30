<template>
	<Layout>
		<div class="user">
			<div class="image">
				<img
					src="https://plus.unsplash.com/premium_photo-1669839137069-4166d6ea11f4?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
					alt="Title">
			</div>
			<div class="content">
				<h3 class="title">Hi world</h3>
				<div class="text">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At earum illum placeat reprehenderit hic molestiae
						laborum obcaecati quibusdam quos aut?</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At earum illum placeat reprehenderit hic molestiae
						laborum obcaecati quibusdam quos aut?</p>
				</div>
			</div>
			<div class="btns">
				<Button class="btn">Edit</Button>
				<Button class="btn">Delete</Button>
			</div>
		</div>
	</Layout>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import Layout from '@/layouts/Layout.vue'
</script>
<style scoped>
.user {
	max-width: 1200px;
	background-color: var(--color-user);
	padding: 1.2rem 1.5rem;
	border-radius: 1rem;
	position: relative;
	margin: 1rem auto;
}

.image {
	max-width: 500px;
	margin-bottom: 1rem;
}

.title {
	font-weight: normal;
	font-size: 2.5rem;
	margin-bottom: 0.8rem;
}

.text {
	font-size: 0.9rem;
	margin-bottom: 1em;
}

.btns {
	display: flex;
	flex-direction: column;
	gap: 1rem;
	position: absolute;
	top: 1.5rem;
	right: 1.5rem;
}

.btn {
	width: 150px;
}
</style>