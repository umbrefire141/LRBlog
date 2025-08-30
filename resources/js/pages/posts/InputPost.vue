<template>
	<Layout>
		<form class="form" @submit.prevent>
			<FileUpload :file="file" @getFile="getFile" />
			<Input v-model="title" name="title" placeholder="Title" type="text" />
			<Textarea v-model="content" placeholder="Content" />
			<Button class="btn" @click="sendData">Create</Button>
		</form>
	</Layout>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import FileUpload from '@/components/FileUpload.vue'
import Input from '@/components/Input.vue'
import Textarea from '@/components/Textarea.vue'
import Layout from '@/layouts/Layout.vue'
import { ref } from 'vue'

const file = ref<File | null>()
const title = ref<string>('')
const content = ref<string>('')


const getFile = (afile: File) => {
	file.value = afile
}

const sendData = () => {
	console.log(file.value)
	console.log(title.value)
	console.log(content.value)

}


</script>
<style scoped>
.btn {
	width: 100%;
	margin-top: 1.5rem;
}
</style>