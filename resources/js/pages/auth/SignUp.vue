<template>
	<Layout>
		<div class="main">
			<h2 class="title">Registration</h2>
			<form class="form">
				<Input v-model="email" name="email" placeholder="Email" type="email" />
				<Input v-model="name" name="name" placeholder="Name" type="text" />
				<Input v-model="password" name="password" placeholder="Password" type="password" />
				<Button class="btn">Sign Up</Button>
			</form>
			<Link href="/auth/sign-in">Do you have an account? Sign in</Link>
		</div>
	</Layout>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import Input from '@/components/Input.vue'
import Layout from '@/layouts/Layout.vue'
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const email = ref<string>('')
const name = ref<string>('')
const password = ref<string>('')

</script>
<style scoped>
.main {
	max-width: 900px;
	margin: 0 auto;
}

.title {
	font-size: 2.5rem;
	margin-bottom: 0.6em;
	text-align: center;
}

.form {
	margin-bottom: 1rem;
}

.btn {
	width: 100%;
	margin-top: 1.5rem;
}
</style>