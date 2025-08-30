<template>
	<div class="input-group">
		<label :for="name" class="label">{{ name }}</label>
		<input :value="modelValue" @input="updateValue($event.target.value)" :type="type ? type : 'text'"
			:placeholder="placeholder" class="input">
	</div>
</template>
<script lang="ts">
import { defineComponent, PropType } from "vue"

export default defineComponent({
	props: {
		type: Object as PropType<"text" | "email" | "password">,
		name: String,
		modelValue: String,
		placeholder: String
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
.input-group {
	display: flex;
	flex-direction: column;
	gap: 0.5rem;
}

.input-group:not(:first-child) {
	margin-top: 1.5rem;
}

.label {
	display: block;
	font-weight: 700;
	font-size: 1.2rem;
	margin-bottom: 0.3125rem;
}

.input {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	font-size: 16px;
	transition: border-color 0.3s ease;
}

.input:focus {
	border-color: var(--color-orange);
	outline: none;
	box-shadow: 0 0 5px var(--color-orange);
}
</style>