<template>
	<div class="textarea-group">
		<textarea :value="modelValue" @input="updateValue($event.target.value)" :placeholder="placeholder"
			class="textarea" />
	</div>
</template>
<script lang="ts">
import { defineComponent } from "vue"

export default defineComponent({
	props: {
		placeholder: String,
		modelValue: String
	},

	emits: ['update:modelValue'],

	methods: {
		updateValue(value: string) {
			this.$emit("update:modelValue", value)
		}
	},
})
</script>
<style scoped>
.textarea-group {
	display: flex;
	gap: 0.8rem;
	align-items: center;
}

.textarea-group:not(:first-child) {
	margin-top: 1.5rem;
}


.textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	font-size: 16px;
	transition: border-color 0.3s ease;
	resize: vertical;
	height: 120px;
}

.textarea:focus {
	border-color: var(--color-orange);
	outline: none;
	box-shadow: 0 0 5px var(--color-orange);
}
</style>