<template>
	<Layout>
		<form class="form">
			<Input name="email" placeholder="Email" type="email" />
			<Input name="password" placeholder="Password" type="text" />
			<Button class="btn">Update</Button>
		</form>
	</Layout>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import Input from '@/components/Input.vue'
import Layout from '@/layouts/Layout.vue'

</script>
<style scoped>
.btn {
	max-width: 550px;
	width: 100%;
	margin-top: 1.5rem;
}
</style>