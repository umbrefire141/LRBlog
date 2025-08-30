<template>
	<header class="header">
		<div class="container">
			<nav class="menu">
				<Logo />
				<div class="block">
					<ul class="menu-list">
						<li class="menu-list__item">
							<Link href="/">Search</Link>
						</li>
						<li class="menu-list__item">
							<Link href="/">Posts</Link>
						</li>
					</ul>
					<div class="btns">
						<Link href="/auth/sign-in">
						<Button>Войти</Button>
						</Link>
					</div>
				</div>
			</nav>
		</div>
	</header>
</template>
<script setup lang="ts">
import Button from '@/components/Button.vue'
import Logo from '@/components/Logo.vue'
import { Link } from '@inertiajs/vue3'

</script>
<style scoped>
.header {
	background-color: var(--color-post);
	padding: 1rem;
}

.menu {
	display: flex;
	justify-content: space-between;
	align-items: center;
	gap: 1rem;
}

.block {
	display: flex;
	align-items: center;
	gap: 1rem;
}

.menu-list {
	display: flex;
	align-items: center;
	gap: 1rem;
	margin-right: 1rem;
}
</style>