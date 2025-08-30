<template>
	<button class="btn" @click="$emit('click')">
		<slot />
	</button>
</template>
<script lang="ts">
import { defineComponent } from "vue"

export default defineComponent({
	setup() {
		return {}
	}
})
</script>
<style scoped>
.btn {
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: var(--color-primary);
	color: white;
	border: none;
	cursor: pointer;
	border-radius: 0.7rem;
	transition: 0.3s background-color;
	padding: 0.7em 1em;
}

.btn:hover {
	background-color: var(--color-secondary);
}
</style>