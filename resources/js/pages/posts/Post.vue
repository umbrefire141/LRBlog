<template>
	<Layout>
		<div class="post">
			<div class="image">
				<img
					src="https://plus.unsplash.com/premium_photo-1669839137069-4166d6ea11f4?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
					alt="Title">
			</div>
			<div class="content">
				<h3 class="title">{{ props.post?.title }}</h3>
				<div class="text">
					<p>{{ props.post?.content }}</p>
				</div>
			</div>
			<div class="btns">
				<Link :href="linkEdit">
				<Button class="btn">Edit</Button>
				</Link>
				<Button class="btn">Delete</Button>
			</div>
		</div>
	</Layout>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import Layout from '@/layouts/Layout.vue'
import { Link } from '@inertiajs/vue3'
import { PropType, ref } from 'vue'

interface IPost {
	id: number
	title: string
	content: string
}

const props = defineProps({
	post: {
		type: Object as PropType<IPost>
	}
})

const linkEdit = ref(`/posts/${props.post?.id}/edit`);

</script>
<style scoped>
.post {
	max-width: 1200px;
	background-color: var(--color-post);
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