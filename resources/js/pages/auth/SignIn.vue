<template>
	<Layout>
		<div class="main">
			<h2 class="title">Login</h2>
			<form class="form" @submit.prevent="login">
				<Input v-model="form.email" name="email" placeholder="Email" type="email" />
				<Input v-model="form.password" name="password" placeholder="Password" type="password" />
				<Button class="btn" type="submit">Sign In</Button>
			</form>
			<Link href="/auth/sign-up">Don't you have an account? Sign up</Link>
		</div>
	</Layout>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import Input from '@/components/Input.vue'
import Layout from '@/layouts/Layout.vue'
import { Link, useForm } from '@inertiajs/vue3'

const form = useForm({
	email: '',
	password: ''
})

const login = () => {
	form.post(route('login'))
}

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