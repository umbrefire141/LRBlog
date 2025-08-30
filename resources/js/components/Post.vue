<template>
	<div class="post">
		<div class="image">
			<img
				src="https://plus.unsplash.com/premium_photo-1669839137069-4166d6ea11f4?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
				alt="Title">
		</div>
		<div class="content">
			<h3 class="title">{{ title }}</h3>
			<div class="text">
				<p>{{ content }}</p>
			</div>
			<Link :href="readLink">
			<Button>Read</Button>
			</Link>
		</div>
		<div class="btns">
			<Link :href="editLink">
			<Button class="btn">Edit</Button>
			</Link>
			<Button class="btn">Delete</Button>
		</div>
	</div>
</template>
<script lang="ts">
import { Link } from '@inertiajs/vue3'
import { defineComponent } from "vue"
import Button from './Button.vue'

export default defineComponent({
	props: ['id', 'title', 'content'],

	components: {
		Button,
		Link
	},

	data(props) {
		return {
			editLink: `/posts/${props.id}/edit`,
			readLink: `/posts/${props.id}`
		}
	}

})
</script>
<style scoped>
.post {
	background-color: var(--color-post);
	padding: 1.2rem 1.5rem;
	border-radius: 1rem;
	position: relative;
}

.image {
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
	transition: 0.3s all;
	visibility: hidden;
	opacity: 0;
}

.btn {
	width: 100px;
}

.post:hover .btns {
	opacity: 1;
	visibility: visible;
}
</style>