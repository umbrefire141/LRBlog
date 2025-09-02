<template>
	<Layout>
		<form class="form" @submit.prevent="sendData">
			<FileUpload :file="file" @getFile="getFile" />
			<Input v-model="form.title" name="title" placeholder="Title" type="text" />
			<div class="error" v-if="form.errors.title">{{ form.errors.title }}</div>
			<Textarea v-model="form.content" placeholder="Content" />
			<div class="error" v-if="form.errors.content">{{ form.errors.content }}</div>
			<Button type="submit" class="btn">Create</Button>
		</form>
	</Layout>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import FileUpload from '@/components/FileUpload.vue'
import Input from '@/components/Input.vue'
import Textarea from '@/components/Textarea.vue'
import Layout from '@/layouts/Layout.vue'
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'

const file = ref<File | null>()

const form = useForm({
	title: '',
	content: ''
})


const getFile = (afile: File) => {
	file.value = afile
}

const sendData = () => {

}

</script>
<style scoped>
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