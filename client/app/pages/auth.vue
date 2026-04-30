<script lang="ts" setup>
useHead({
	title: 'Auth',
})
</script>

<template>
	<div
		class="container d-flex justify-content-center align-items-center vh-100"
	>
		<div class="card p-4" style="width: 400px">
			<!-- Login Form -->
			<h3 class="text-center">Login</h3>
			<form>
				<input
					class="form-control mb-2"
					name="email"
					type="email"
					placeholder="Email"
					required
				/>
				<input
					class="form-control mb-2"
					name="password"
					type="password"
					placeholder="Password"
					required
				/>
				<button class="btn btn-primary w-100" type="submit">Login</button>
			</form>

			<p class="mt-3 text-center">Don't have an account? Register</p>

			<hr />

			<!-- Register Form -->
			<h3 class="text-center">Register</h3>
			<form>
				<input
					class="form-control mb-2"
					name="name"
					type="text"
					placeholder="Name"
					required
				/>
				<input
					class="form-control mb-2"
					name="email"
					type="email"
					placeholder="Email"
					required
				/>
				<input
					class="form-control mb-2"
					name="password"
					type="password"
					placeholder="Password"
					required
				/>
				<input
					class="form-control mb-2"
					name="password_confirmation"
					type="password"
					placeholder="Confirm Password"
					required
				/>
				<button class="btn btn-primary w-100" type="submit">Register</button>
			</form>
		</div>
	</div>
</template>
