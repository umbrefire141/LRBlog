<template>
	<div>
		<div class="upload-container">
			<input class="input" type="file" accept="image/*" @change="handleFileChange">
			<label class="upload-label">
				<i class="fas fa-upload"></i>
				<span>Choose a file</span>
			</label>
			<div class="file-name">{{ file ? file.name : "No file chosen" }}</div>
		</div>
	</div>
</template>
<script lang="ts">
import type { PropType } from 'vue'
import { defineComponent } from "vue"
type TFile = {
	name: string
	lastModified: number
	size: number
	type: string
}

interface IData {
	file: TFile | null
}

export default defineComponent({
	data(): IData {
		return {
			file: null
		}
	},

	props: {
		file: Object as PropType<TFile | null>
	},

	methods: {
		handleFileChange(event: Event) {
			const target = event.target as HTMLInputElement

			if (target && target.files) {
				this.$emit("getFile", {
					file: target.files[0]
				})
			}

		}
	},
})
</script>
<style scoped>
.upload-container {
	border: 2px dashed #ccc;
	border-radius: 8px;
	padding: 20px;
	cursor: pointer;
	transition: border-color 0.3s ease;
	position: relative;
}

.input {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	cursor: pointer;
	opacity: 0;
}

.upload-container:hover {
	border-color: #4CAF50;
}

.upload-container:hover .upload-label {
	color: #4CAF50;
}

.upload-label {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	cursor: pointer;
	color: #555;
	transition: color 0.3s ease;
}


.upload-label i {
	font-size: 3em;
	margin-bottom: 10px;
}

.upload-label span {
	font-size: 1.2em;
}

.file-name {
	margin-top: 20px;
	font-style: italic;
	color: #777;
}
</style>