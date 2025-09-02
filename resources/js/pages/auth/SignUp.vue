<template>
	<Layout>
		<div class="main">
			<h2 class="title">Registration</h2>
			<form class="form" @submit.prevent="register">
				<Input v-model="form.email" name="email" placeholder="Email" type="email" />
				<div class="error" v-if="form.errors.email">The email has existed already</div>
				<Input v-model="form.name" name="name" placeholder="Name" type="text" />
				<Input v-model="form.password" name="password" placeholder="Password" type="password" />
				<div class="error" v-if="form.errors.password">{{ form.errors.password }}</div>
				<Input v-model="form.password_confirmation" name="Confirm password" placeholder="Password" type="password" />
				<div class="error" v-if="form.errors.password_confirmation">The passwords aren't equal</div>
				<Button type="submit" class="btn">Sign Up</Button>
			</form>
			<Link href="/auth/sign-in">Do you have an account? Sign in</Link>
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
	name: '',
	password: '',
	password_confirmation: ''
})

const register = () => {
	form.post(route('register'))
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

.error {
	color: #ff3333;
	font-weight: 600;
	margin-top: 1.5rem;
}
</style>