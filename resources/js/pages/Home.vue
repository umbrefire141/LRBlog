<template>
	<Layout>
		<div class="main">
			<h2 class="title">Posts</h2>
			<Link href="/create-post">
			<Button class="btn">Create post</Button>
			</Link>
			<Posts />
			<div class="posts">
				<Post v-for="post in props.posts" :key="post.id" :id="post.id" :title="post.title" :content="post.content" />
			</div>
		</div>
	</Layout>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import Post from '@/components/Post.vue'
import Layout from '@/layouts/Layout.vue'
import { Link } from '@inertiajs/vue3'


const props = defineProps({
	posts: {
		type: Array<{
			id: number,
			title: string,
			content: string
		}>
	}
})
</script>


<style scoped>
.posts {
	display: grid;
	grid-template-columns: repeat(auto-fill, minmax(402px, 1fr));
	gap: 1rem;
}

.title {
	font-size: 2.4rem;
	margin-bottom: 0.5em;
}

.btn {
	width: 100%;
	margin-bottom: 1rem;
}
</style>